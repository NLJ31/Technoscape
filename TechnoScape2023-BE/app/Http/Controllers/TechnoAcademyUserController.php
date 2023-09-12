<?php

namespace App\Http\Controllers;

use App\Models\TechnoAcademyUser;
use App\Http\Requests\StoreTechnoAcademyUserRequest;
use App\Http\Requests\UpdateTechnoAcademyUserRequest;

class TechnoAcademyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function disabled()
    {
        return back()->with('status', 'This feature is disabled for now.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ta.index');
    }

    /**
     * Display a listing of the Register Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function RegisterPage()
    {
        return view('ta.register');
    }

    /**
     * Display a listing of the resource.
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
     * @param  \App\Http\Requests\StoreTechnoAcademyUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTechnoAcademyUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TechnoAcademyUser  $technoAcademyUser
     * @return \Illuminate\Http\Response
     */
    public function show(TechnoAcademyUser $technoAcademyUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TechnoAcademyUser  $technoAcademyUser
     * @return \Illuminate\Http\Response
     */
    public function edit(TechnoAcademyUser $technoAcademyUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTechnoAcademyUserRequest  $request
     * @param  \App\Models\TechnoAcademyUser  $technoAcademyUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTechnoAcademyUserRequest $request, TechnoAcademyUser $technoAcademyUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TechnoAcademyUser  $technoAcademyUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(TechnoAcademyUser $technoAcademyUser)
    {
        //
    }
}
