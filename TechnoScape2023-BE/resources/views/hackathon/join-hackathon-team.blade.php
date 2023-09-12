@extends('Template.template')

@section('head')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@endsection

@section('body')


    
    <form method="POST" action="{{ route('storeJoinHackathonTeam') }}" enctype="multipart/form-data">
      @csrf
        
    
     
       <!-- Team Code -->
       @if(session('error'))
        
       <h5 for="team_token" > Team Code </h5>
       <input  id="team_token" style="width: 20%" class="block mt-1 w-full" type="text" name="team_token" :value required autofocus autocomplete="name" />
       <span> {{session('error')}}</span>
       <h6 :messages="$errors->get('team_token')" class="mt-2" />
        
 
  
   @else
   <h5 for="team_token" > Team Code </h5>
   <input  id="team_token" style="width: 20%" class="block mt-1 w-full" type="text" name="team_token" :value required autofocus autocomplete="name" />
   <h6 :messages="$errors->get('team_token')" class="mt-2" />
    
    
   @endif
  
        

    <button class="ml-4">
        Register
    </button>

      

        
    </form>
@endsection
