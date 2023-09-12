<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    //
    

public function downloadAnnouncement($id)
{
    $user = Auth::user();
    $hackathonUser = $user->hackathonUser;
    $taUser = $user->TAUser;
    $tcUser = $user->TCUser;
    $announcement = Announcement::where('id', $id)->first();
    $filename = $announcement->file;
    $type = $announcement->event_type;
    

    if($type == "ts"){
        $path = storage_path('app/public/announcement/ts/' . $filename);
        if(!Storage::disk('public')->exists('announcement/ts/' . $filename)) {
            abort(404);
        }
        return response()->download($path);
    }
    else if ($type == "ta"){
        $path = storage_path('app/public/announcement/ta/' . $filename);
        if(!Storage::disk('public')->exists('announcement/ta/' . $filename) || !$taUser) {
            abort(404);
        }
        return response()->download($path);
    }
    else if ($type == "tc"){
        $path = storage_path('app/public/announcement/tc/' . $filename);
        if(!Storage::disk('public')->exists('announcement/tc/' . $filename) || !$tcUser) {
            abort(404);
        }
        return response()->download($path);
    }
    else if ($type == "hack"){
        $path = storage_path('app/public/announcement/hack/' . $filename);
        if(!Storage::disk('public')->exists('announcement/hack/' . $filename) || !$hackathonUser) {
            abort(404);
        }
        return response()->download($path);
    }
    
}
public function downloadCV($filename)
{
    $path = storage_path('app/public/hackathonUser/cv/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path);
}

public function downloadCard($filename)
{
    $path = storage_path('app/public/hackathonUser/card/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path);
}
public function downloadReceipt($filename)
{
    $path = storage_path('app/public/hackathonTeam/receipt/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path);
}
}
