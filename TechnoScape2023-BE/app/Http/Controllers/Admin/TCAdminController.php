<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncementRequest;
use App\Mail\Notification;
use App\Mail\NotificationAccepted;
use App\Mail\NotificationRejected;
use App\Models\Announcement;
use App\Models\TechnoConferenceUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TCAdminController extends Controller
{
    // TC Announcement
    public function tcAnnouncementPage(){
        $announcements = Announcement::orderBy('created_at', 'desc')->where('event_type', '=', 'tc')->paginate(5);
        return view('admin.tc.announcement', ['title' => 'tc'], compact('announcements'));
    }

    public function storeTcAnnouncement(AnnouncementRequest $request){
        $event_type = 'tc';
        if($request->hasFile('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $filename = $request->title.'_'.$event_type.'.'.$extension;
            $request->file('file')->storeAs('/public/announcement/tc', $filename);

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
        return redirect('/admin/tc/announcement/');
    }

    public function deleteTcAnnouncement($id){
        Announcement::destroy($id);
        return redirect('/admin/tc/announcement/');
    }

    // TC Participant
    public function tcParticipantPage(Request $request){
        if($request->input('search')){
            $users = TechnoConferenceUser::join('users','techno_conference_users.user_id','=','users.id')
            ->where('users.name','like','%' .request('search'). '%')
            ->paginate(10);
        } else{
            $users = TechnoConferenceUser::with('user')->paginate(10);
        }

        return view('admin.tc.participant', ['title' => 'tc'], compact('users'));
    }

    public function viewTcParticipantPage($id){
        $user = User::findOrFail($id);
        return view('admin.tc.view-participant', ['title' => 'tc'], compact('user'));
    }

    public function editTcParticipantPage($id){
        $user = User::findOrFail($id);
        return view('admin.tc.edit-participant', ['title' => 'tc'], compact('user'));
    }

    public function updateTcParticipant(Request $request, $id){
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
        return redirect('/admin/tc/participant');
    }

    public function deleteTcParticipant($id){
        TechnoConferenceUser::where('user_id','=',$id)->delete();
        return redirect('/admin/tc/participant');
    }

    // TC Payment
    public function paymentPage(Request $request){
        if($request->input('search')){
            $users = TechnoConferenceUser::join('users','techno_conference_users.user_id','=','users.id')
            ->where('users.name','like','%' .request('search'). '%')
            ->paginate(10);
        } else{
            $users = TechnoConferenceUser::with('user')->paginate(10);
        }

        return view('admin.tc.payment', ['title' => 'tc'], compact('users'));
    }

    public function verifyPayment($id){
        $tc = TechnoConferenceUser::where('user_id','=',$id);
        $tc->update([
            'payment_status' => 'accepted'
        ]);
        $user = User::findOrFail($id);
        Mail::to($user->email)->send(new NotificationAccepted());

        return redirect('/admin/tc/payment');
    }

    public function rejectPayment($id){
        $tc = TechnoConferenceUser::where('user_id','=',$id);
        $tc->update([
            'payment_status' => 'rejected'
        ]);
        $user = User::findOrFail($id);
        Mail::to($user->email)->send(new NotificationRejected());

        return redirect('/admin/tc/payment');
    }

    public function filterPayments(Request $request, $status) {
        if($request->input('search')){
            $users = TechnoConferenceUser::join('users', 'virtual_conference_users.user_id', '=', 'users.id')
            ->where('users.name','like','%' .request('search'). '%')
            ->where('payment_status', $status)
            ->paginate(10);
        } else {
            $users = TechnoConferenceUser::where('payment_status','=', $status)->paginate(10);
        }
        return view('admin.tc.payment', ['title' => 'tc'], compact('users'));
    }
}
