    @extends('Template.template')

    @section('head')
   
   
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

                   
                    
                 JOIN GROUP LINK

                 <a href=""> Join Group </a>
               
          
    </div>
    @endsection

