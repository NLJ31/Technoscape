<?php

namespace App\Http\Controllers\Hackathon;

use App\http\Controllers\Controller;
use App\Models\HackathonTeam;
use App\Models\HackathonUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HackathonUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registration(){
        $user = Auth::user();
        return view('hackathon.register-hackathon-user', compact('user'));
    }

    public function dashboard(){


        $user = Auth::user();
        $arr = [];
        
        $hackathonUser = $user->hackathonUser;
        $hackathonTeam = $hackathonUser->hackathonTeam;
        $teamMembers = $hackathonUser->hackathonTeam->members;
        foreach($teamMembers as $members){
            $teamMembers_id = $members->user_id;
            $userToBeFound = User::find($teamMembers_id);
            $userName = $userToBeFound->name;
            $arr[] = $userName;

        };
     
        
        return view('hackathon.hackathon-dashboard',compact ('user','hackathonUser','hackathonTeam','arr'));
   }

    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        if ($request->input('action') == 'createNewTeam') {
            
        $user = Auth::user();
         
        $request->validate([
            'is_binusian' => ['required'],
            'cv' => ['required', 'mimes:png,jpg,jpeg,pdf'],
            'id_card' => ['mimes:png,jpg,jpeg,pdf']
        ], [
            'cv.required' => 'Please upload your CV',
            'cv.mimes' => 'The CV must be a PNG, JPG, JPEG, or PDF file',

            'id_card.mimes' => 'The ID card or Flazz card must be a PNG, JPG, JPEG, or PDF file'
        ]);

        $extension_cv = $request->file('cv')->getClientOriginalExtension();

        if( $request->input('is_binusian') == '1'){
            
            $extension_id_card= $request -> file('flazz_card')->getClientOriginalExtension();
            $filename_id_card = $user->name.'_'."flazz_card".'.'.$extension_id_card;
            $request->file('flazz_card')->storeAs('/public/hackathonUser/card/', $filename_id_card);

        }
        else{
            $extension_id_card= $request -> file('id_card')->getClientOriginalExtension();
            $filename_id_card = $user->name.'_'."id_card".'.'.$extension_id_card;
            $request->file('id_card')->storeAs('/public/hackathonUser/card/', $filename_id_card);

        }

        $filename_cv = $user->name.'_'."cv".'.'.$extension_cv;
       
        $request->file('cv')->storeAs('/public/hackathonUser/cv/', $filename_cv);
       
      

        $user_id = $user->id;
        $cv = $filename_cv;
        $id_card = $filename_id_card;
        $is_leader = '1';
        $is_binusian = $request->is_binusian;

        // return $is_binusian;
        session([
            'user_id' => $user_id,
            'cv' => $cv,
            'id_card' => $id_card,
            'is_leader' => $is_leader,
            'is_binusian' => $is_binusian,
        ]);
        
        return redirect()->route('hackathonTeamRegistration');
          } 

          //Join team
          else {
            
        
            $user = Auth::user();
         
        $request->validate([
            // 'is_binusian' => ['required'],
            // 'cv' => ['required','mimes:png,jpg,jpeg,pdf'],
            // 'id_card' => ['required'],

        ]);
        $extension_cv = $request->file('cv')->getClientOriginalExtension();

        if( $request->input('is_binusian') == '1'){
            
            $extension_id_card= $request -> file('flazz_card')->getClientOriginalExtension();
            $filename_id_card = $user->name.'_'."flazz_card".'.'.$extension_id_card;
            $request->file('flazz_card')->storeAs('/public/hackathonUser/card/', $filename_id_card);

        }
        else{
            $extension_id_card= $request -> file('id_card')->getClientOriginalExtension();
            $filename_id_card = $user->name.'_'."id_card".'.'.$extension_id_card;
            $request->file('id_card')->storeAs('/public/hackathonUser/card/', $filename_id_card);

        }

        $filename_cv = $user->name.'_'."cv".'.'.$extension_cv;
       
        $request->file('cv')->storeAs('/public/hackathonUser/cv/', $filename_cv);
       
      

        $user_id = $user->id;
        $cv = $filename_cv;
        $id_card = $filename_id_card;
        $is_leader = '0';
        $is_binusian = $request->is_binusian;

        // return $is_binusian;
        session([
            'user_id' => $user_id,
            'cv' => $cv,
            'id_card' => $id_card,
            'is_leader' => $is_leader,
            'is_binusian' => $is_binusian,
        ]);
        
        return redirect()->route('hackathonTeamJoin');
           

            
    }
      
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
    public function joinGroup (Request $request)
        {
        // $user = Auth::user();
        return view('hackathon.hackathon-join-group');
     }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
