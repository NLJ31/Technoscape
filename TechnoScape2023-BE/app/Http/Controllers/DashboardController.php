<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\HackathonTeam;
use App\Models\HackathonUser;
use App\Models\TechnoAcademyUser;
use App\Models\TechnoConferenceUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $user = auth()->user();
        $statusHacka = HackathonUser::where('user_id', $user->id)->first();
        $statusTa = TechnoAcademyUser::where('user_id', $user->id)->first();
        $statusTc = TechnoConferenceUser::where('user_id', $user->id)->first();
        $taUser = $user->TAUser;
        $tcUser = $user->TCUser;
        $hackathonUser = $user->hackathonUser;
        $hackathonTeam = $hackathonUser ? $hackathonUser->hackathonTeam : null;
        $announcement = Announcement::where('event_type', 'ts');

        if (!empty($statusHacka)) {
            $statusHacka = HackathonTeam::where('id', $statusHacka->hackathon_team_id)->first();
            if ($statusHacka->payment_status == "accepted") {
                $announcement = $announcement->orWhere('event_type', 'hack');
            }
        }
        if ($statusTa) {
            if ($statusTa->payment_status == "accepted") {
                $announcement = $announcement->orWhere('event_type', 'ta');
            }
        }
        if ($statusTc) {
            if ($statusTc->payment_status == "accepted") {
                $announcement = $announcement->orWhere('event_type', 'tc');
            }
        }

        $announcement = $announcement->orderBy('created_at', 'desc')->get();

        $time = Carbon::now()->toDateTimeString();
        if ($statusHacka) {
            $statusHacka = $statusHacka->payment_status;
            if ($time < '2023-06-20 18:20:00' && !empty($statusHacka)) {
                if ($statusHacka == "accepted") {
                    $statusEvent  = "hack";
                }
            }
        }
        if ($statusTa) {
            $statusTa = $statusTa->payment_status;
            if ($time < '2023-06-12 21:10:00' && !empty($statusTa)) {
                if ($statusTa == "accepted") {
                    $statusEvent = "ta";
                }
            }
        }
        if ($statusTc) {
            $statusTc = $statusTc->payment_status;
            if ($time < '2023-06-13 23:59:59' && !empty($statusTc)) {
                if ($statusTc == "accepted") {
                    $statusEvent = "tc";
                }
            }
        }
        if (empty($statusEvent)) {
            $statusEvent = "null";
        }

        $user = auth()->user()->is_admin;
        if ($user == 1) {
            return redirect('/admin/ts/announcement');
        } else {
            $user = Auth::user();
            return view('dashboard.dashboard', [
                'announcement' => $announcement,
                'title' => 'Dashboard',
                'statusEvent' => $statusEvent,
                'user' => $user,
                'taUser' => $taUser,
                'tcUser'=> $tcUser,
                'hackathonTeam' => $hackathonTeam
            ]);
        }
    }
    public function profile()
    {
        $user = Auth::user();
        $dateString = $user->date_of_birth;
        $date =  Carbon::createFromFormat('Y-m-d', $dateString);
        $dateText =  $date->format('d F Y');
        $taUser = $user->TAUser;
        $tcUser = $user->TCUser;
        $hackathonUser = $user->hackathonUser;
        $hackathonTeam = $hackathonUser ? $hackathonUser->hackathonTeam : null;

        return view('dashboard.profile', compact('user', 'hackathonUser', 'dateText','taUser','tcUser','hackathonTeam'));
    }



    public function task()
    {
        $user = Auth::user();
        $taUser = $user->TAUser;
        $tcUser = $user->TCUser;
        $hackathonUser = $user->hackathonUser;
        $hackathonTeam = $hackathonUser ? $hackathonUser->hackathonTeam : null;

        $statusHacka = HackathonUser::where('user_id', $user->id)->first();
        $statusTa = TechnoAcademyUser::where('user_id', $user->id)->first();
        $statusTc = TechnoConferenceUser::where('user_id', $user->id)->first();
        $announcement = Announcement::where('event_type', 'ts');

        if (!empty($statusHacka)) {
            $statusHacka = HackathonTeam::where('id', $statusHacka->hackathon_team_id)->first();
            if ($statusHacka->payment_status == "accepted") {
                $announcement = $announcement->orWhere('event_type', 'hack');
            }
        }
        if ($statusTa) {
            if ($statusTa->payment_status == "accepted") {
                $announcement = $announcement->orWhere('event_type', 'ta');
            }
        }
        if ($statusTc) {
            if ($statusTc->payment_status == "accepted") {
                $announcement = $announcement->orWhere('event_type', 'tc');
            }
        }

        $time = Carbon::now()->toDateTimeString();
        if ($statusHacka) {
            $statusHacka = $statusHacka->payment_status;
            if ($time < '2023-06-20 18:20:00' && !empty($statusHacka)) {
                if ($statusHacka == "accepted") {
                    $statusEvent  = "hack";
                }
            }
        }
        if ($statusTa) {
            $statusTa = $statusTa->payment_status;
            if ($time < '2023-06-12 21:10:00' && !empty($statusTa)) {
                if ($statusTa == "accepted") {
                    $statusEvent = "ta";
                }
            }
        }
        if ($statusTc) {
            $statusTc = $statusTc->payment_status;
            if ($time < '2023-06-05 21:10:00' && !empty($statusTc)) {
                if ($statusTc == "accepted") {
                    $statusEvent = "tc";
                }
            }
        }
        if (empty($statusEvent)) {
            $statusEvent = "null";
        }

        if (!$taUser && !$tcUser && !$hackathonTeam) {
            return redirect()->route('findEvent');
        } else {
            return view('dashboard.task', compact('user', 'taUser', 'tcUser', 'hackathonTeam','statusEvent'));
        }
    }

    // public function taskEmpty()
    // {
    //     $user = Auth::user();
    //     $taUser = $user->TAUser;
    //     $tcUser = $user->TCUser;
    //     $hackathonUser = $user->hackathonUser;
    //     $hackathonTeam = $hackathonUser ? $hackathonUser->hackathonTeam : null;

    //     $statusHacka = HackathonUser::where('user_id', $user->id)->first();
    //     $statusTa = TechnoAcademyUser::where('user_id', $user->id)->first();
    //     $statusTc = TechnoConferenceUser::where('user_id', $user->id)->first();

    //     $time = Carbon::now()->toDateTimeString();
    //     if ($statusHacka) {
    //         $statusHacka = $statusHacka->payment_status;
    //         if ($time < '2023-06-20 18:20:00' && !empty($statusHacka)) {
    //             if ($statusHacka == "accepted") {
    //                 $statusEvent  = "hack";
    //             }
    //         }
    //     }
    //     if ($statusTa) {
    //         $statusTa = $statusTa->payment_status;
    //         if ($time < '2023-06-12 21:10:00' && !empty($statusTa)) {
    //             if ($statusTa == "accepted") {
    //                 $statusEvent = "ta";
    //             }
    //         }
    //     }
    //     if ($statusTc) {
    //         $statusTc = $statusTc->payment_status;
    //         if ($time < '2023-06-05 21:10:00' && !empty($statusTc)) {
    //             if ($statusTc == "accepted") {
    //                 $statusEvent = "tc";
    //             }
    //         }
    //     }
    //     if (empty($statusEvent)) {
    //         $statusEvent = "null";
    //     }

    //     if ($taUser || $tcUser || $hackathonTeam) {
    //         return redirect()->route('task');
    //     } else {
    //         return view('dashboard.task-empty', compact('user','statusEvent','tcUser','taUser','hackathonTeam'));
    //     }
    // }

    public function findEvent()
    {
        $user = Auth::user();
        $taUser = $user->TAUser;
        $tcUser = $user->TCUser;
        $hackathonUser = $user->hackathonUser;
        $hackathonTeam = $hackathonUser ? $hackathonUser->hackathonTeam : null;

        $statusHacka = HackathonUser::where('user_id', $user->id)->first();
        $statusTa = TechnoAcademyUser::where('user_id', $user->id)->first();
        $statusTc = TechnoConferenceUser::where('user_id', $user->id)->first();

        $time = Carbon::now()->toDateTimeString();
        if ($statusHacka) {
            $statusHacka = $statusHacka->payment_status;
            if ($time < '2023-06-20 18:20:00' && !empty($statusHacka)) {
                if ($statusHacka == "accepted") {
                    $statusEvent  = "hack";
                }
            }
        }
        if ($statusTa) {
            $statusTa = $statusTa->payment_status;
            if ($time < '2023-06-12 21:10:00' && !empty($statusTa)) {
                if ($statusTa == "accepted") {
                    $statusEvent = "ta";
                }
            }
        }
        if ($statusTc) {
            $statusTc = $statusTc->payment_status;
            if ($time < '2023-06-05 21:10:00' && !empty($statusTc)) {
                if ($statusTc == "accepted") {
                    $statusEvent = "tc";
                }
            }
        }
        if (empty($statusEvent)) {
            $statusEvent = "null";
        }

        if ($taUser && $tcUser && $hackathonTeam) {
            return redirect()->route('task');
        } else {
            return view('dashboard.find-event', compact('user', 'taUser', 'tcUser', 'hackathonTeam','statusEvent'));
        }
    }

    public function schedule()
    {
        $user = Auth::user();
        $taUser = $user->TAUser;
        $tcUser = $user->TCUser;
        $hackathonUser = $user->hackathonUser;
        $hackathonTeam = $hackathonUser ? $hackathonUser->hackathonTeam : null;

        $statusHacka = HackathonUser::where('user_id', $user->id)->first();
        $statusTa = TechnoAcademyUser::where('user_id', $user->id)->first();
        $statusTc = TechnoConferenceUser::where('user_id', $user->id)->first();
        $announcement = Announcement::where('event_type', 'ts');

        if (!empty($statusHacka)) {
            $statusHacka = HackathonTeam::where('id', $statusHacka->hackathon_team_id)->first();
            if ($statusHacka->payment_status == "accepted") {
                $announcement = $announcement->orWhere('event_type', 'hack');
            }
        }
        if ($statusTa) {
            if ($statusTa->payment_status == "accepted") {
                $announcement = $announcement->orWhere('event_type', 'ta');
            }
        }
        if ($statusTc) {
            if ($statusTc->payment_status == "accepted") {
                $announcement = $announcement->orWhere('event_type', 'tc');
            }
        }

        $time = Carbon::now()->toDateTimeString();
        if ($statusHacka) {
            $statusHacka = $statusHacka->payment_status;
            if ($time < '2023-06-20 18:20:00' && !empty($statusHacka)) {
                if ($statusHacka == "accepted") {
                    $statusEvent  = "hack";
                }
            }
        }
        if ($statusTa) {
            $statusTa = $statusTa->payment_status;
            if ($time < '2023-06-12 21:10:00' && !empty($statusTa)) {
                if ($statusTa == "accepted") {
                    $statusEvent = "ta";
                }
            }
        }
        if ($statusTc) {
            $statusTc = $statusTc->payment_status;
            if ($time < '2023-06-05 21:10:00' && !empty($statusTc)) {
                if ($statusTc == "accepted") {
                    $statusEvent = "tc";
                }
            }
        }
        if (empty($statusEvent)) {
            $statusEvent = "null";
        }
        return view('dashboard.schedule', compact('user', 'taUser', 'tcUser', 'hackathonTeam','statusEvent'));
    }
}
