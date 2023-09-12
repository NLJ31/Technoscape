<?php

namespace App\Http\Controllers;

use App\Models\TechnoConferenceUser;
use App\Http\Requests\StoreTechnoConferenceUserRequest;
use App\Http\Requests\UpdateTechnoConferenceUserRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class TechnoConferenceUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tc.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function RegisterPage()
    {
        $payment_status = null;
        if (isset(auth()->user()->TcUser->payment_status)) {
            $payment_status = auth()->user()->TcUser->payment_status;
            if ($payment_status == 'accepted') {
                return redirect(route('dashboard'));
            }
            return view('tc.register', compact('payment_status'));
        }
        return view('tc.register', compact('payment_status'));
    }

    /**
     * Function for validation earyl / general for create tc.
     *
     * @return \Illuminate\Http\Response
     */
    public function ReUpload(): bool
    {
        if (isset(auth()->user()->TcUser->payment_status)) {
            if (auth()->user()->TcUser->payment_status == 'rejected') {
                return true;
            }
        }

        return false;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreTechnoConferenceUserRequest $request)
    {
        $user_id = auth()->user()->id;
        $name = time() . '-' . $user_id . $request->file('input-proof')->getClientOriginalName();

        if ($this->ReUpload()) {
            Storage::delete('public/tc-registrationProof/' . auth()->user()->TcUser->payment_receipt);
            $request->file('input-proof')->storeAs('public/tc-registrationProof', $name);

            $TCuser = TechnoConferenceUser::where('user_id', $user_id);
            $TCuser->update([
                'payment_status' => 'paid',
                'payment_receipt' => $name,
            ]);
            return redirect(route('auth.tc.register'))->with('success', __('messages.success.tc-reupload'));
        }


        $request->file('input-proof')->storeAs('public/tc-registrationProof', $name);

        // dd($name);
        TechnoConferenceUser::create([
            'user_id' => $user_id,
            'payment_status' => 'paid',
            'payment_receipt' => $name,
        ]);


        return redirect(route('auth.tc.register'))->with('success', __('messages.success.tc-upload'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTechnoConferenceUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTechnoConferenceUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TechnoConferenceUser  $technoConferenceUser
     * @return \Illuminate\Http\Response
     */
    public function show(TechnoConferenceUser $technoConferenceUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TechnoConferenceUser  $technoConferenceUser
     * @return \Illuminate\Http\Response
     */
    public function edit(TechnoConferenceUser $technoConferenceUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTechnoConferenceUserRequest  $request
     * @param  \App\Models\TechnoConferenceUser  $technoConferenceUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTechnoConferenceUserRequest $request, TechnoConferenceUser $technoConferenceUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TechnoConferenceUser  $technoConferenceUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(TechnoConferenceUser $technoConferenceUser)
    {
        //
    }
}
