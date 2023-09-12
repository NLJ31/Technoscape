<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncementRequest;
use App\Mail\NotificationAccepted;
use App\Mail\NotificationRejected;
use App\Models\Announcement;
use App\Models\HackathonTeam;
use App\Models\HackathonUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HackAdminController extends Controller
{
    // Hack Announcement
    public function hackAnnouncementPage(){
        $announcements = Announcement::orderBy('created_at', 'desc')->where('event_type', '=', 'hack')->paginate(5);
        return view('admin.hack.announcement', ['title' => 'hack'], compact('announcements'));
    }

    public function storeHackAnnouncement(AnnouncementRequest $request){
        $event_type = 'hack';
        if($request->hasFile('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $filename = $request->title.'_'.$event_type.'.'.$extension;
            $request->file('file')->storeAs('/public/announcement/hack', $filename);

            Announcement::create([
                'title' => $request->title,
                'announcement' => $request->announcement,
                'event_type' => $event_type,
                'file' => $filename,
            ]);
        }else{
            Announcement::create([
                'title' => $request->title,
                'announcement' => $request->announcement,
                'event_type' => $event_type,
                'file' => 'nothing',
            ]);
        }
        return redirect('/admin/hack/announcement/');
    }

    public function deleteHackAnnouncement($id){
        Announcement::destroy($id);
        return redirect('/admin/hack/announcement/');
    }

    // hack Participant
    public function hackParticipantPage(Request $request){
        if($request->input('search')){
            $users = HackathonTeam::where('name','like','%' .request('search'). '%')
            ->paginate(10);
        } else{
            $users = HackathonTeam::paginate(10);
        }

        return view('admin.hack.participant', ['title' => 'hack'], compact('users'));
    }

    public function viewHackParticipantPage($team_id){
        $team = HackathonTeam::where('id', '=', $team_id)->first();

        //get team leader
        $users[0] = HackathonUser::where('hackathon_team_id', $team_id)->where('is_leader', 1)->first();

        //get team member
        $get_member = HackathonUser::where('hackathon_team_id', $team_id)->where('is_leader', 0)->get();
        for($i = 1, $j=0; $i < count($get_member)+1; $i++, $j++){
            $users[$i] = $get_member[$j];
        }
        return view('admin.hack.view-participant', ['title' => 'hack'], compact('users','team'));
    }

    public function editHackParticipantPage($id){
        $user = HackathonUser::with('user')->where('user_id', '=', $id)->first();
        return view('admin.hack.edit-participant', ['title' => 'hack'], compact('user'));
    }

    public function updateHackParticipant(Request $request, $id){
        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'line_id' => $request->line_id,
            'whatsapp' => $request->whatsapp,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'company' => $request->company
        ]);
        return redirect('/admin/hack/participant');
    }

    public function deleteHackParticipant($id){
        HackathonUser::where('user_id','=',$id)->delete();
        return redirect('/admin/hack/participant');
    }

    public function deleteHackTeam($team_id){
        HackathonTeam::where('id','=',$team_id)->delete();
        return redirect('/admin/hack/participant');
    }

    // hack Payment
    public function paymentPage(Request $request){
        if($request->input('search')){
            $users = HackathonTeam::where('name','like','%' .request('search'). '%')
            ->where('payment_status', '!=', 'unpaid')
            ->paginate(10);
        } else{
            $users = HackathonTeam::where('payment_status', '!=', 'unpaid')
        ->paginate(10);
        }

        return view('admin.hack.payment', ['title' => 'hack'], compact('users'));
    }

    public function verifyPayment($team_id){
        $hack = HackathonTeam::where('id','=',$team_id);
        $hack->update([
            'payment_status' => 'accepted'
        ]);
        $user_id = HackathonUser::where('hackathon_team_id','=',$team_id)->where('is_leader','=',1)->get('user_id');
        $user = User::findOrFail($user_id);
        Mail::to($user[0]->email)->send(new NotificationAccepted());

        return redirect('/admin/hack/payment');
    }

    public function rejectPayment($team_id){
        $hack = HackathonTeam::where('id','=',$team_id);
        $hack->update([
            'payment_status' => 'rejected'
        ]);
        $user_id = HackathonUser::where('hackathon_team_id','=',$team_id)->where('is_leader','=',1)->get('user_id');
        $user = User::findOrFail($user_id);
        Mail::to($user[0]->email)->send(new NotificationRejected());

        return redirect('/admin/hack/payment');
    }

    public function filterPayments(Request $request, $status) {
        $users = HackathonTeam::where('payment_status','=', $status)->paginate(10);
        return view('admin.hack.payment', ['title' => 'hack'], compact('users'));
    }
}
