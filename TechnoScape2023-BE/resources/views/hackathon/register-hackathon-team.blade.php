@extends('Template.template')

@section('head')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@endsection

@section('body')


    
    <form method="POST" action="{{ route('storeHackathonTeam') }}" enctype="multipart/form-data">
      @csrf
        <!-- Name -->
      
        <div>
            <h5 for="name" > Name </h5>
            <input  id="name" style="width: 20%" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            <h6 :messages="$errors->get('name')" class="mt-2" />
        </div>

    
    
      

      

        <div>
            <button class="ml-4">
                Register
            </button>
        </div>
    </form>
@endsection
