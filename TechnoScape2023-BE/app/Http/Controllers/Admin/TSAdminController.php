<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncementRequest;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;

class TSAdminController extends Controller
{
    // TS Announcement
    public function tsAnnouncementPage(){
        $announcements = Announcement::orderBy('created_at', 'desc')->where('event_type', '=', 'ts')->paginate(5);
        return view('admin.ts.announcement', ['title' => 'ts'], compact('announcements'));
    }

    public function storeTsAnnouncement(AnnouncementRequest $request){
        $event_type = 'ts';
        if($request->hasFile('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $filename = $request->title.'_'.$event_type.'.'.$extension;
            $request->file('file')->storeAs('/public/announcement/ts', $filename);

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
        return redirect('/admin/ts/announcement/');
    }

    public function deleteTsAnnouncement($id){
        Announcement::destroy($id);
        return redirect('/admin/ts/announcement/');
    }

    // TS Participant
    public function tsParticipantPage(Request $request){
        if($request->input('search')){
            $users = User::where('name','like','%' .request('search'). '%')
            ->where('is_admin', '=', 0)
            ->paginate(10);
        } else{
            $users = User::where('is_admin', '=', 0)->paginate(10);
        }

        return view('admin.ts.participant', ['title' => 'ts'], compact('users'));
    }

    public function viewTsParticipantPage($id){
        $user = User::findOrFail($id);
        return view('admin.ts.view-participant', ['title' => 'ts'], compact('user'));
    }

    public function editTsParticipantPage($id){
        $user = User::findOrFail($id);
        return view('admin.ts.edit-participant', ['title' => 'ts'], compact('user'));
    }

    public function updateTsParticipant(Request $request, $id){
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
        return redirect('/admin/ts/participant');
    }

    public function deleteTsParticipant($id){
        User::destroy($id);
        return redirect('/admin/ts/participant');
    }
}
