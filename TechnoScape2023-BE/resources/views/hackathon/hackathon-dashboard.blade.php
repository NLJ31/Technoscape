    @extends('Template.template')

    @section('head')
   
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @endsection
    
    @section('body')
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                          
                        </a>
                    </div>
    
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a href="{{ route('dashboard') }}"> Dashboard </a>
                        <a href="{{ route('hackathonDashboard') }}"> Hackathon </a>
                        <a href="{{ route('profile') }}"> Profile </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>

    <div class="py-12">
        
                    {{ __("Welcome, $user->name!") }}
                    
                    <br>
                    Team Name: {{$hackathonUser->hackathonTeam->name}}
                    <br>
                   Team Members:
                   <br>
                    @foreach ($arr as $members )
                        {{"- $members"}}
                        <br>
                    @endforeach


                    {{-- @foreach ($teamMembers as $member)
                        {{$member}}
                    @endforeach --}}
                    <br>
                    <a href="{{ route('downloadCv', ['filename' => $hackathonUser->cv]) }}">
                        <button type="button" class="button">Download CV</button>
                    </a>
                    
                    <br>
                    @if($hackathonUser->hackathonTeam->is_binusian == "1")
                    <a href="{{ route('downloadCard', ['filename' => $hackathonUser->id_card]) }}">
                        <button type="button" class="button">Download Flazz Card</button>
                    </a>
                    <br>
                    @else
                    <a href="{{ route('downloadCard', ['filename' => $hackathonUser->id_card]) }}">
                        <button type="button" class="button">Download Id Card</button>
                    </a>
                    <br>
                    @endif

                    <br>
                   
                    
                   
                    
               
          
    </div>
    @endsection

