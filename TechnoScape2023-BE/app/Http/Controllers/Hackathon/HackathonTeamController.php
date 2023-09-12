<?php

namespace App\Http\Controllers\Hackathon;

use App\http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\HackathonTeam;
use App\Models\User;
use App\Http\Requests\StoreHackathonTeamRequest;
use App\Http\Requests\UpdateHackathonTeamRequest;
use App\Models\HackathonUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HackathonTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $teamToken;
    
    public function registration(){
       
        return view('hackathon.register-hackathon-team');
    }
    public function index()
    {
        //
    }
    public function payment (Request $request)
    {  
        $user = Auth::user();
        $hackathonUser = $user->hackathonUser;
        $hackathonTeam = $hackathonUser->hackathonTeam;
    
        return view('hackathon.hackathon-payment', compact('user','hackathonTeam'));
    }

    public function paymentUpdate(Request $request)
    {   $user = Auth::user();
        $hackathonUser = $user->hackathonUser;
        $hackathonTeam = $hackathonUser->hackathonTeam;

        $request->validate([
            'payment_receipt' => 'required|mimes:png,jpg,jpeg,pdf|max:2048'
        ]);
        
        $extension_payment_receipt = $request -> file('payment_receipt')->getClientOriginalExtension();
        $filename_payment_receipt = $hackathonTeam->name.'_'."payment_receipt".'.'.$extension_payment_receipt;
        $request->file('payment_receipt')->storeAs('/public/hackathonTeam/receipt/', $filename_payment_receipt);

        $hackathonTeam->payment_receipt = $filename_payment_receipt;

        
        $hackathonTeam->payment_status = "pending";
        $hackathonTeam->save();
        return redirect()->route('dashboard')->with('success', 'Payment information updated successfully!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHackathonTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function join (Request $request)
    {
        // $user = Auth::user();
        return view('hackathon.join-hackathon-team');
    }
    

    public function storeJoin(Request $request){
      
      
        $teamToken = $request->input('team_token');
        $hackathonTeam = HackathonTeam::where('team_token', $teamToken)->first();
        if(!$hackathonTeam){
            return redirect()->back()->with('error', 'Team with the given code does not exist.');
        } 
        $teamMembers = $hackathonTeam->members;
        $teamMembersCounter = 0;

        foreach($teamMembers as $teamMember){
            $teamMembersCounter++;
        }
         if($teamMembersCounter >= 4){
            return redirect()->back()->with('error', 'Sorry, the team is full!');
         }
         
        $user_id = session('user_id');
        $cv = session('cv');
        $id_card = session('id_card');
        $is_leader = session('is_leader');
        $is_binusian = session('is_binusian');
    
        $request->validate([

            'team_token' => ['required:'.HackathonTeam::class],
            
    
        ]);
 
 
    
 
        $hackathonUser = HackathonUser::create([
            'hackathon_team_id' => $hackathonTeam->id,
            'user_id' => $user_id,
            'cv' => $cv,
            'id_card' => $id_card,
            'is_leader' => $is_leader,
            
        ]);
        
        return redirect()->route('dashboard');
        } 

        public function store(Request $request)
        {
            // $user = Auth::user();

            $user_id = session('user_id');
            $cv = session('cv');
            $id_card = session('id_card');
            $is_leader = session('is_leader');
            $is_binusian = session('is_binusian');

            $teamToken = $this->generateTeamToken();

            while (HackathonTeam::where('team_token', $teamToken)->exists()) {
            $teamToken = $this->generateTeamToken();
            }
        

            $request->validate([
                'name' => ['required', 'unique:'.HackathonTeam::class],
            ]);


            $hackathonTeam = HackathonTeam::create([
                'name'=> $request->name,
                'is_binusian' => $is_binusian,
                'team_token' => $teamToken,
            ]);

            $hackathonUser = HackathonUser::create([
                'hackathon_team_id' => $hackathonTeam->id,
                'user_id' => $user_id,
                'cv' => $cv,
                'id_card' => $id_card,
                'is_leader' => $is_leader,
            ]);

            return redirect()->route('dashboard');
        }



    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HackathonTeam  $hackathonTeam
     * @return \Illuminate\Http\Response
     */
    public function show(HackathonTeam $hackathonTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HackathonTeam  $hackathonTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(HackathonTeam $hackathonTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHackathonTeamRequest  $request
     * @param  \App\Models\HackathonTeam  $hackathonTeam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHackathonTeamRequest $request, HackathonTeam $hackathonTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HackathonTeam  $hackathonTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(HackathonTeam $hackathonTeam)
    {
        //
    }
    private function generateTeamToken()
{
    return Str::random(6);
}
}
