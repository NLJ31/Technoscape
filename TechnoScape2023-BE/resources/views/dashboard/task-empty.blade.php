@extends('Template.template')

@section('head')
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/index.css') }}?t={{ env('VERSION_TIME') }}">
  <link rel="stylesheet" href="{{ asset('css/tasks.css') }}?t={{ env('VERSION_TIME') }}">

  <!-- javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection

@section('body')
    <body class="body">
        {{-- Navbar --}}

        <x-navbar-dashboard page="task" :user="$user"/>

        <section
            class="text-cWhite xl:p-16 lg:p-7 p-5 xl:pl-[335px] lg:pl-[275px] md:pl-32 pl-24"
        >
            <h1 class="font-ABigDeal lg:text-5xl md:text-3xl text-3xl mt-7">
                Events
            </h1>
            <div
                class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10 mt-10"
            >
                <!-- Tasks Empty -->
                <div
                    class="bg-[#1D1D1D] col-span-2 row-span-3 rounded-3xl w-full h-screen overflow-hidden relative"
                >
                    <img
                        class="xl:w-[250px] lg:w-[175px] md:w-[250px] w-[120px] absolute top-0 right-0"
                        src="./assets/icon/Liquid/liquid_yellowRight.png"
                        alt=""
                    />
                    <img
                        class="xl:w-[200px] lg:w-[155px] md:w-[230px] w-[100px] absolute top-0 left-0"
                        src="./assets/icon/Liquid/liquid_blue.png"
                        alt=""
                    />
                    <img
                        class="xl:w-[250px] lg:w-[175px] md:w-[250px] w-[120px] absolute bottom-0 right-0"
                        src="./assets/icon/Liquid/liquid_red.png"
                        alt=""
                    />
                    <img
                        class="xl:w-[250px] lg:w-[175px] md:w-[250px] w-[120px] absolute bottom-0 left-0"
                        src="./assets/icon/Liquid/liquid_yellowLeft.png"
                        alt=""
                    />
                    <img
                        class="xl:w-[250px] lg:w-[175px] md:w-[200px] w-[170px] absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 mt-10"
                        src="./assets/icon/icon-iora.svg"
                        alt=""
                    />
                    <p
                        class="relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 font-YSDarkSemiBold xl:text-2xl lg:text-xl text-center lg:mt-16 md:mt-0 mt-10"
                    >
                        Anda belum terdaftar dalam event!
                    </p>
                    <div
                        class="relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[143px] bg-cLinearGradientBtnBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-3 rounded-xl text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer mt-10 flex justify-center items-center"
                    >
                        <a href="{{route("findEvent")}}">Let's Talk!</a>
                    </div>
                </div>

                {{-- Calendar --}}
                <div
                    class="bg-cLinearGradientBg border-2 border-[#2F2F2F] rounded-3xl col-span-2 lg:col-span-1 px-5"
                >
                    @include('layouts.calendar')
                </div>

                {{-- Upcoming Tasks --}}
                <div
                    class="bg-cLinearGradientBg rounded-3xl col-span-2 lg:col-span-1 border-2 border-[#2F2F2F] p-5"
                >
                    @include('layouts.upcoming-task')
                </div>
            </div>
        </section>
          <script src="{{asset('js/tasks.js')}}?t={{ env('VERSION_TIME') }}"></script>
    </body>
@endsection
