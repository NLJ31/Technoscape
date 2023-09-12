@extends('Template.template')

@section('head')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@endsection

@section('body')

    
    <form method="POST" action="{{ route('storeHackathonUser') }}"  enctype="multipart/form-data">
        @csrf

       <!-- Name -->
       <div>
        <h5 for="name" > Name </h5>
        <input disabled id="name" style="width: 20%"  class="block mt-1 w-full" type="text" name="name" value= "{{$user->name}}" required autofocus autocomplete="name" />
        <h6 :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <h5 for="email" > Email </h5>
        <input disabled id="email" style="width: 20%" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required autocomplete="username" />
        <h6 :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Line id -->
    <div class="mt-4">
        <h5 for="line_id" > Line </h5>
        <input disabbled id="line_id"  style="width: 20%"class="block mt-1 w-full" type="text" name="line_id" value="{{$user->line_id}}" required autocomplete="on" />
        <h6 :messages="$errors->get('line_id')" class="mt-2" />
    </div>

    <!-- Whatsapp -->
    <div class="mt-4">
        <h5 for="whatsapp" > Whatsapp </h5>
        <input disabled id="whatsapp" style="width: 20%" class="block mt-1 w-full" type="number" name="whatsapp" value ="{{$user->whatsapp}}" required autocomplete="on" />
        <h6 :messages="$errors->get('whatsapp')" class="mt-2" />
    </div>

    <!-- Place of Birth -->
    <div class="mt-4">
        <h5 for="place_of_birth" > Place of Birth </h5>
        <input disabled id="place_of_birth" style="width: 20%" class="block mt-1 w-full" type="text" name="place_of_birth" value="{{$user->place_of_birth}}" required autocomplete="on" />
        <h6 :messages="$errors->get('place_of_birth')" class="mt-2" />
    </div>

    <!-- Date of Birth -->
    <div class="mt-4">
        <h5 for="date_of_birth" > Date of Birth </h5>
        <input disabled id="date_of_birth" style="width: 20%" class="block mt-1 w-full" type="date" name="date_of_birth" value="{{$user->date_of_birth}}" required autocomplete="on" />
        <h6 :messages="$errors->get('date_of_birth')" class="mt-2" />
    </div>

     <!-- Gender -->
     <div class="mt-4">
        <h5 for="gender" > Gender </h5>
        <input id="gender"  type="radio" name="gender" value="Male" @if($user->gender == 'Male') checked @endif required autocomplete="on" /> Male
        <input id="gender"  type="radio" name="gender" value="Female" :value="Female" @if($user->gender == 'Female') checked @endif  required autocomplete="on" /> Female
        <h6 :messages="$errors->get('gender')" class="mt-2" />
    </div>


    <!-- Company -->
     <div class="mt-4">
        <h5 for="company" > Company </h5>
        <input disabled id="company" style="width: 20%" class="block mt-1 w-full" type="text" name="company" value="{{$user->company}}" required autocomplete="on" />
        <h6 :messages="$errors->get('company')" class="mt-2" />
    </div>

         <!-- Binusian -->
         <div class="mt-4">
            <h5 for="is_binusian" > Binusian </h5>
          <input  id="is_binusian"  type="radio" name="is_binusian" value = "1" onchange="showFileInput()" :value="1"  required autocomplete="on" /> Binusian
          <input  id="not_binusian"  type="radio" name="is_binusian" value = "0" onchange="hideFileInput()" :value="0"  required autocomplete="on" /> Non-Binusian
          @if ($errors->has('is_binusian'))
            @foreach ($errors->get('is_binusian') as $error)
                <span style="color: red">{{ $error }}</span>
            @endforeach
        @endif
      </div>

        <!-- CV -->
        <div class="mt-4">
            <h5 for="cv" > CV </h5>
          <input id="cv" class="block mt-1 w-full" type="file" name="cv" :value="" required autocomplete="on" />
            @if ($errors->has('cv'))
            @foreach ($errors->get('cv') as $error)
                <span style="color: red">{{ $error }}</span>
            @endforeach
        @endif
      </div>
   
           <!-- ID Card / KTP -->
           <div class="mt-4" id="file-inputs">
            <h5 for="id_card" > ID Card / KTP (*Non-Binusian) </h5> 
            <input id="id_card" class="block mt-1 w-full" type="file" name="id_card" :value=""  required autocomplete="on" />
            @if ($errors->has('id_card'))
                @foreach ($errors->get('id_card') as $error)
                    <span style="color: red">{{ $error }}</span>
                @endforeach
            @endif
        </div>
        

             
             
       <!-- Flazz Card -->
       <div class="mt-4" id="file-input">
        <h5 for="flazz_card" > Flazz Card (*Binusian) </h5>
        <input id="flazz_card" class="block mt-1 w-full" type="file" name="flazz_card" :value=""  required autocomplete="on" />
        @if ($errors->has('id_card'))
        @foreach ($errors->get('id_card') as $error)
            <span style="color: red">{{ $error }}</span>
        @endforeach
    @endif
    </div>
         

    





       
       {{-- Create New Team --}}
        <div >
            <button type="submit" name="action" value="createNewTeam">Create New Team</button>
        </div>

        {{-- Register User --}}
        <div>
            <button type="submit" name="action" value="registerHackathonUser">Join Team</button>
        </div>
    </form>
    <script>

function showFileInput() {
  document.getElementById("file-input").style.display = "block";
  document.getElementById("flazz_card").required = true;
  document.getElementById("file-inputs").style.display = "none";
  document.getElementById("id_card").required = false
}

function hideFileInput() {
  document.getElementById("file-input").style.display = "none";
  document.getElementById("flazz_card").required = false;
  document.getElementById("file-inputs").style.display = "block";
  document.getElementById("id_card").required = true;
}
    </script>
    
@endsection
