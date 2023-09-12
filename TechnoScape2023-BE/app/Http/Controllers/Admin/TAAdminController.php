<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncementRequest;
use App\Mail\NotificationAccepted;
use App\Mail\NotificationRejected;
use App\Models\Announcement;
use App\Models\TechnoAcademyUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TAAdminController extends Controller
{
    // TA Announcement
    public function taAnnouncementPage(){
        $announcements = Announcement::orderBy('created_at', 'desc')->where('event_type', '=', 'ta')->paginate(5);
        return view('admin.ta.announcement', ['title' => 'ta'], compact('announcements'));
    }

    public function storeTaAnnouncement(AnnouncementRequest $request){
        $event_type = 'ta';
        if($request->hasFile('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $filename = $request->title.'_'.$event_type.'.'.$extension;
            $request->file('file')->storeAs('/public/announcement/ta', $filename);

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
        return redirect('/admin/ta/announcement/');
    }

    public function deleteTaAnnouncement($id){
        Announcement::destroy($id);
        return redirect('/admin/ta/announcement/');
    }

    // ta Participant
    public function taParticipantPage(Request $request){
        if($request->input('search')){
            $users = TechnoAcademyUser::join('users','techno_conference_users.user_id','=','users.id')
            ->where('users.name','like','%' .request('search'). '%')
            ->paginate(10);
        } else{
            $users = TechnoAcademyUser::with('user')->paginate(10);
        }

        return view('admin.ta.participant', ['title' => 'ta'], compact('users'));
    }

    public function viewTaParticipantPage($id){
        $user = User::findOrFail($id);
        return view('admin.ta.view-participant', ['title' => 'ta'], compact('user'));
    }

    public function editTaParticipantPage($id){
        $user = User::findOrFail($id);
        return view('admin.ta.edit-participant', ['title' => 'ta'], compact('user'));
    }

    public function updateTaParticipant(Request $request, $id){
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
        return redirect('/admin/ta/participant');
    }

    public function deleteTaParticipant($id){
        TechnoAcademyUser::where('user_id','=',$id)->delete();
        return redirect('/admin/ta/participant');
    }

    // ta Payment
    public function paymentPage(Request $request){
        if($request->input('search')){
            $users = TechnoAcademyUser::join('users','techno_conference_users.user_id','=','users.id')
            ->where('users.name','like','%' .request('search'). '%')
            ->paginate(10);
        } else{
            $users = TechnoAcademyUser::with('user')->paginate(10);
        }

        return view('admin.ta.payment', ['title' => 'ta'], compact('users'));
    }

    public function verifyPayment($id){
        $ta = TechnoAcademyUser::where('user_id','=',$id);
        $ta->update([
            'payment_status' => 'accepted'
        ]);
        $user = User::findOrFail($id);
        Mail::to($user->email)->send(new NotificationAccepted());

        return redirect('/admin/ta/payment');
    }

    public function rejectPayment($id){
        $ta = TechnoAcademyUser::where('user_id','=',$id);
        $ta->update([
            'payment_status' => 'rejected'
        ]);
        $user = User::findOrFail($id);
        Mail::to($user->email)->send(new NotificationRejected());

        return redirect('/admin/ta/payment');
    }

    public function filterPayments(Request $request, $status) {
        if($request->input('search')){
            $users = TechnoAcademyUser::join('users', 'virtual_conference_users.user_id', '=', 'users.id')
            ->where('users.name','like','%' .request('search'). '%')
            ->where('payment_status', $status)
            ->paginate(10);
        } else {
            $users = TechnoAcademyUser::where('payment_status','=', $status)->paginate(10);
        }
        return view('admin.ta.payment', ['title' => 'ta'], compact('users'));
    }
}
