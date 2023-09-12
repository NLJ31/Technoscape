<nav class="fixed top-0 left-0 text-cWhite bg-[#000000] font-YSDarkMedium xl:w-[275px] lg:w-[250px] md:w-[100px] w-[70px] border-r-2 border-[#FFFFFF66] min-h-screen lg:p-8 md:p-5 p-3">
    <img class="w-full lg:p-0 lg:block hidden" src="{{asset('assets/logo/technoscape-logo.svg')}}" alt="" />
    <img class="lg:hidden lg:mt-0 mt-2" src="{{asset('assets/logo/technoscape-logo-notext.svg')}}" alt="" />

    <ul class="w-full flex flex-col xl:gap-5 lg:gap-2 gap-5 xl:text-xl lg:text-lg md:text-base lg:mt-20 md:mt-32 mt-14">
        <a href="{{ url('/') }}">
            <li class="hover:bg-cGrey hover:rounded-2xl transition-all duration-300 ease-in-out cursor-pointer" >
                <img class="lg:w-8 lg:h-8 md:w-10 md:h-10" src="{{asset('assets/icon/icon-home.svg')}}" alt=""/>
                <span class="hidden lg:block">Home</span>
            </li>
        </a>
        <a href="{{route('dashboard')}}">
            @if($page === "announcement")
            <li class="bg-cGrey rounded-2xl cursor-pointer"  >
            @else
            <li class="hover:bg-cGrey hover:rounded-2xl transition-all duration-300 ease-in-out cursor-pointer" >
            @endif
                <img class="lg:w-8 lg:h-8 md:w-10 md:h-10" src="{{asset('assets/icon/icon-announcement.svg')}}" alt="" />
                <span class="hidden lg:block" >Announcement</span>
            </li>
        </a>
        <a href="{{route('schedule')}}">
            @if($page === "schedule")
            <li class="bg-cGrey rounded-2xl cursor-pointer" >
            @else
            <li class="hover:bg-cGrey hover:rounded-2xl transition-all duration-300 ease-in-out cursor-pointer" >
            @endif
                <img class="lg:w-8 lg:h-8 md:w-10 md:h-10" src="{{asset('assets/icon/icon-schedule.svg')}}" alt="" />
                <span class="hidden lg:block" >Schedule</span>
            </li>
        </a>
        <a href="{{route('task')}}">
            @if($page === "task")
            <li class="bg-cGrey rounded-2xl cursor-pointer" >
            @else
            <li class="hover:bg-cGrey hover:rounded-2xl transition-all duration-300 ease-in-out cursor-pointer" >
            @endif
                <img class="lg:w-8 lg:h-8 md:w-10 md:h-10" src="{{asset('assets/icon/icon-tasks.svg')}}" alt="" />
                <span class="hidden lg:block" >Tasks</span>
            </li>
        </a>
    </ul>

    <div class="absolute md:w-[72%] w-[70%] lg:bottom-9 md:bottom-16 bottom-14 flex flex-col items-center md:gap-5 gap-3">
        <div class="w-full flex lg:justify-between justify-center items-center lg:gap-5 gap-0 cursor-pointer" id="accordion">
            <img class="lg:w-8 lg:h-8 md:w-10 md:h-10" src="{{asset('assets/icon/icon-user.svg')}}"alt=""/>
            <p class="font-YSDarkSemiBold xl:text-xl lg:text-lg md:text-base hidden lg:inline-block whitespace-nowrap overflow-hidden text-ellipsis">
                {{$user->name}}
            </p>
            <img
                class="lg:w-5 lg:h-5 w-3 h-3 hidden lg:block"
                id="arrow"
                src="{{asset('assets/icon/icon-arrow.svg')}}"
                alt=""
            />
        </div>
        <ul class="w-full flex flex-col xl:gap-5 lg:gap-2 xl:text-xl lg:text-lg md:text-base hidden" id="user-profile">
            <a href="{{route("profile")}}">
                @if($page === "profile")
            <li class="bg-cGrey rounded-2xl cursor-pointer lg:justify-start justify-center" >
            @else
            <li class="hover:bg-cGrey hover:rounded-2xl cursor-pointer lg:justify-start justify-center">
            @endif
                    <img class="lg:w-8 lg:h-8 md:w-10 md:h-10" src="./assets/icon/icon-profile.svg" alt="" />
                    <span class="hidden lg:block">Profile</span>
                </li>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full" type="submit">
                <li
                class="xl:mt-3 lg:mt-2 md:mt-4 -ml-1 lg:pb-3 md:pb-5 hover:bg-cGrey hover:rounded-2xl transition-all duration-300 ease-in-out cursor-pointer lg:justify-start justify-center"
                >
                    <img class="lg:w-8 lg:h-8 md:w-10 md:h-10" src="{{asset('assets/icon/icon-logout.svg')}}" alt="" />
                    <span class="ml-1 -mt-1 hidden lg:block"
                        >Logout</span
                    >
                </li>
                </button>
            </a>
        </ul>
    </div>
</nav>
