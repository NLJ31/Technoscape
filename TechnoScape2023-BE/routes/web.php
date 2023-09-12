<?php

use App\Http\Controllers\Admin\TCAdminController;
use App\Http\Controllers\Admin\HackAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Hackathon\HackathonUserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\TSAdminController;
use App\Http\Controllers\Hackathon\HackathonTeamController;
use App\Models\Announcement;
use Carbon\Carbon;
use App\Http\Controllers\TechnoAcademyUserController;
use App\Http\Controllers\TechnoConferenceUserController;
use App\Http\Controllers\Admin\TAAdminController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadController;
use App\Models\TechnoAcademyUser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::controller(EmailController::class)->group(function () {
//     Route::get('/','createEmail')->name('createEmail');
// });


Route::get('/', function () {
    return view('welcome');
});
// Admin
Route::middleware('is_admin')->group(function () {
    Route::prefix('/admin')->group(function () {

        Route::get('/contact-us', [ContactUsController::class, 'read']);
        //TS
        Route::prefix('/ts')->group(function () {
            Route::prefix('/announcement')->group(function () {
                Route::get('/', [TSAdminController::class, 'tsAnnouncementPage']);
                Route::post('/store', [TSAdminController::class, 'storeTsAnnouncement'])->name('storeTsAnnouncement');
                Route::delete('/delete/{id}', [TSAdminController::class, 'deleteTsAnnouncement']);
            });

            Route::prefix('/participant')->group(function () {
                Route::get('/', [TSAdminController::class, 'tsParticipantPage']);
                Route::get('/view/{id}', [TSAdminController::class, 'viewTsParticipantPage'])->name('viewTsParticipantPage');
                Route::get('/edit/{id}', [TSAdminController::class, 'editTsParticipantPage'])->name('editTsParticipantPage');
                Route::patch('/update/{id}', [TSAdminController::class, 'updateTsParticipant'])->name('updateTsParticipant');
                Route::delete('/delete/{id}', [TSAdminController::class, 'deleteTsParticipant'])->name('deleteTsParticipant');
            });
        });

        //TC
        Route::prefix('/tc')->group(function () {
            Route::prefix('/announcement')->group(function () {
                Route::get('/', [TCAdminController::class, 'tcAnnouncementPage']);
                Route::post('/store', [TCAdminController::class, 'storeTcAnnouncement'])->name('storeTcAnnouncement');
                Route::delete('/delete/{id}', [TCAdminController::class, 'deleteTcAnnouncement']);
            });

            Route::prefix('/participant')->group(function () {
                Route::get('/', [TCAdminController::class, 'tcParticipantPage']);
                Route::get('/view/{id}', [TCAdminController::class, 'viewTcParticipantPage'])->name('viewTcParticipantPage');
                Route::get('/edit/{id}', [TCAdminController::class, 'editTcParticipantPage'])->name('editTcParticipantPage');
                Route::patch('/update/{id}', [TCAdminController::class, 'updateTcParticipant'])->name('updateTcParticipant');
                Route::delete('/delete/{id}', [TCAdminController::class, 'deleteTcParticipant'])->name('deleteTcParticipant');
            });

            Route::prefix('/payment')->group(function () {
                Route::get('/', [TCAdminController::class, 'paymentPage']);
                Route::get('/{status}', [TCAdminController::class, 'filterPayments']);
                Route::post('/verify/{id}', [TCAdminController::class, 'verifyPayment']);
                Route::post('/reject/{id}', [TCAdminController::class, 'rejectPayment']);
            });
        });

        //ta
        Route::prefix('/ta')->group(function () {
            Route::prefix('/announcement')->group(function () {
                Route::get('/', [TAAdminController::class, 'taAnnouncementPage']);
                Route::post('/store', [TAAdminController::class, 'storeTaAnnouncement'])->name('storeTaAnnouncement');
                Route::delete('/delete/{id}', [TAAdminController::class, 'deleteTaAnnouncement']);
            });

            Route::prefix('/participant')->group(function () {
                Route::get('/', [TAAdminController::class, 'taParticipantPage']);
                Route::get('/view/{id}', [TAAdminController::class, 'viewTaParticipantPage'])->name('viewTaParticipantPage');
                Route::get('/edit/{id}', [TAAdminController::class, 'editTaParticipantPage'])->name('editTaParticipantPage');
                Route::patch('/update/{id}', [TAAdminController::class, 'updateTaParticipant'])->name('updateTaParticipant');
                Route::delete('/delete/{id}', [TAAdminController::class, 'deleteTaParticipant'])->name('deleteTaParticipant');
            });

            Route::prefix('/payment')->group(function () {
                Route::get('/', [TAAdminController::class, 'paymentPage']);
                Route::get('/{status}', [TAAdminController::class, 'filterPayments']);
                Route::post('/verify/{id}', [TAAdminController::class, 'verifyPayment']);
                Route::post('/reject/{id}', [TAAdminController::class, 'rejectPayment']);
            });
        });

        //hack
        Route::prefix('/hack')->group(function () {
            Route::prefix('/announcement')->group(function () {
                Route::get('/', [HackAdminController::class, 'hackAnnouncementPage']);
                Route::post('/store', [HackAdminController::class, 'storeHackAnnouncement'])->name('storeHackAnnouncement');
                Route::delete('/delete/{id}', [HackAdminController::class, 'deleteHackAnnouncement']);
            });

            Route::prefix('/participant')->group(function () {
                Route::get('/', [HackAdminController::class, 'hackParticipantPage']);
                Route::get('/view/{id}', [HackAdminController::class, 'viewHackParticipantPage'])->name('viewHackParticipantPage');
                Route::get('/edit/{id}', [HackAdminController::class, 'editHackParticipantPage'])->name('editHackParticipantPage');
                Route::patch('/update/{id}', [HackAdminController::class, 'updateHackParticipant'])->name('updateHackParticipant');
                Route::delete('/delete/{id}', [HackAdminController::class, 'deleteHackParticipant'])->name('deleteHackParticipant');
                Route::delete('/delete/team/{id}', [HackAdminController::class, 'deleteHackTeam'])->name('deleteHackTeam');
            });

            Route::prefix('/payment')->group(function () {
                Route::get('/', [HackAdminController::class, 'paymentPage']);
                Route::get('/{status}', [HackAdminController::class, 'filterPayments']);
                Route::post('/verify/{id}', [HackAdminController::class, 'verifyPayment']);
                Route::post('/reject/{id}', [HackAdminController::class, 'rejectPayment']);
            });
        });
    });
});

Route::middleware('auth')->group(function () {


    Route::get('/dashboard', [DashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/profile',[DashboardController::class,'profile'])->middleware(['auth', 'verified'])->name('profile');
    Route::get('/schedule',[DashboardController::class,'schedule'])->middleware(['auth', 'verified'])->name('schedule');
    Route::get('/task',[DashboardController::class,'task'])->middleware(['auth', 'verified'])->name('task');
    // Route::get('/task-empty',[DashboardController::class,'taskEmpty'])->middleware(['auth', 'verified'])->name('taskEmpty');
    Route::get('/find-event',[DashboardController::class,'findEvent'])->middleware(['auth', 'verified'])->name('findEvent');

    Route::get('/download-file/{id}', [DownloadController::class ,'downloadAnnouncement'])->name('downloadAnnouncement');
    Route::get('/download-cv/{filename}', [DownloadController::class ,'downloadCv'])->name('downloadCv');
    Route::get('/download-card/{filename}', [DownloadController::class ,'downloadCard'])->name('downloadCard');
    Route::get('/download-receipt/{filename}', [DownloadController::class ,'downloadReceipt'])->name('downloadReceipt');

    Route::prefix('/hackathon')->middleware(['has_team'])->group(function () {
        Route::get('/joingroup', [HackathonUserController::class, 'joinGroup'])->name('hackathonJoinGroup');

        Route::prefix('/user')->group(function () {
            Route::get('/registration', [HackathonUserController::class, 'registration'])->name('hackathonUserRegistration');
            Route::post('/store', [HackathonUserController::class, 'store'])->name('storeHackathonUser');
        });
        Route::prefix('/team')->group(function () {
            Route::get('/join', [HackathonTeamController::class, 'join'])->name('hackathonTeamJoin');
            Route::get('/registration', [HackathonTeamController::class, 'registration'])->name('hackathonTeamRegistration');
            Route::post('/store', [HackathonTeamController::class, 'store'])->name('storeHackathonTeam');
            Route::get('/payment', [HackathonTeamController::class, 'payment'])->name('hackathonTeamPayment');
            Route::get('/payment', [HackathonTeamController::class, 'payment'])->name('hackathonTeamPayment');
            Route::post('/payment/store', [HackathonTeamController::class, 'paymentUpdate'])->name('storeHackathonTeamPayment');
            Route::post('/join/store', [HackathonTeamController::class, 'storeJoin'])->name('storeJoinHackathonTeam');
        });
        Route::get('/dashboard', [HackathonUserController::class, 'dashboard'])->name('hackathonDashboard');
    });
});

Route::prefix('/techno-conference')->group(function () {
    Route::get('/', [TechnoConferenceUserController::class, 'index'])->name('tc.index');

    Route::middleware(['auth'])->group(function () {
        Route::get('/register', [TechnoConferenceUserController::class, 'RegisterPage'])->name('auth.tc.register');

        Route::post('/register/user', [TechnoConferenceUserController::class, 'create'])->name('auth.tc.user')->middleware('TcUser');
    });
});

Route::prefix('/techno-academy')->group(function () {
    Route::get('/', [TechnoAcademyUserController::class, 'index'])->name('ta.index');

    Route::middleware(['auth'])->group(function () {
        Route::get('/register', [TechnoAcademyUserController::class, 'disabled'])->name('auth.ta.register');

        Route::post('/register/user', [TechnoConferenceUserController::class, 'disabled'])->name('auth.ta.user')->middleware('TaUser');
    });
});

//hack index
Route::get('/hackathon', function () {
    return view('hackathon.index');
})->name('hack');

//privacy policy
Route::get('/privacy-policy', function () {
    return view('privacy_policy');
})->name('privacyPolicy');

//term and condition
Route::get('/term-and-condition', function () {
    return view('terms_and_conditions');
})->name('termsAndConditions');

require __DIR__ . '/auth.php';
