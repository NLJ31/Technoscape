@extends('Template.template')

@section('head')
 <!-- css -->
 <link rel="stylesheet" href="{{ asset('css/tasks.css') }}?t={{ env('VERSION_TIME') }}">
 <link rel="stylesheet" href="{{ asset('css/index.css') }}?t={{ env('VERSION_TIME') }}">

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
            <h1 class="font-ABigDeal xl:text-5xl lg:text-4xl md:text-3xl pt-3">Find Events</h1>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10 mt-10">
                <div
                class="bg-[#1D1D1D] col-span-2 row-span-3 rounded-3xl md:p-7 p-4"
            >
                    {{-- Buy Ticket --}}
                    @if(!$user->TCUser)
                    <div
                            class="p-1 bg-gradient-to-r from-cRed3 to-cRed2 rounded-3xl"
                        >
                            <div
                                class="p-[2rem] p-1 pb-0 bg-cLinearGradientBg rounded-3xl"
                            >
                                <h1
                                    class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cRed3 to-cRed2 text-transparent bg-clip-text"
                                >
                                    Techno Conference
                                </h1>
                                <p
                                    class="text-center md:text-[17px] sm:text-[15px] text-[12px] mt-4"
                                >
                                    Techno Conference akan hadir dengan konsep
                                    webinar talkshow secara online selama 3
                                    hari, dengan mengangkat topik seputar
                                    teknologi, bisnis, dan desain. Techno
                                    Conference akan menjadi wadah bagi Tecast
                                    untuk mendapatkan insights dari pembicara
                                    yang pastinya sudah ahli di bidangnya.
                                </p>
                                <div
                                    class="relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:w-[145px] md:w-[130px] w-[130px] mt-[60px] bg-cLinearGradientBtnRed bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-3 rounded-3xl text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsRedBtn ease-in-out cursor-pointer flex justify-center items-center"
                                >
                                <a href="{{ route('auth.tc.register') }}">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (!$user->TAUser)
                    <div
                            class="p-1 bg-gradient-to-r from-cYellow2 to-cYellow3 rounded-3xl mt-10"
                        >
                            <div
                                class="p-[2rem] p-1 pb-0 bg-cLinearGradientBg rounded-3xl"
                            >
                                <h1
                                    class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text"
                                >
                                    Techno Academy
                                </h1>
                                <p
                                    class="text-center md:text-[17px] sm:text-[15px] text-[12px] mt-4"
                                >
                                    Techno Academy merupakan rangkaian
                                    workshop yang dilaksanakan secara online
                                    selama 4 hari dengan membahas topik seputar
                                    intermediate technology melalui trainer
                                    berpengalaman. Acara ini akan menjadi wadah
                                    bagi Tecast untuk belajar dan meraih karir
                                    impian kalian sebagai developer. Tecast akan
                                    mendapatkan banyak wawasan dan pengalaman
                                    terkait topik developer dari para trainer
                                    yang ahli di bidang IT.
                                </p>
                                <div
                                    class="opacity-30 relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:w-[165px] md:w-[150px] w-[150px] mt-[60px] bg-cLinearGradientBtnYellow bg-[length:200%_100%] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-3 rounded-3xl text-cBlack font-YSDarkExtraBold tracking-wide ease-in-out flex justify-center items-center"
                                >
                                    <button disabled>Coming Soon</button>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if(!$user->hackathonUser)
                    <div
                            class="p-1 bg-gradient-to-r from-cBlue2 to-cBlue3 rounded-3xl mt-10"
                        >
                            <div
                                class="p-[2rem] p-1 pb-0 bg-cLinearGradientBg rounded-3xl"
                            >
                                <h1
                                    class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cBlue2 to-cBlue3 text-transparent bg-clip-text"
                                >
                                    Hackathon 6.0
                                </h1>
                                <p
                                    class="text-center md:text-[17px] sm:text-[15px] text-[12px] mt-4"
                                >
                                    Hackathon 6.0 merupakan puncak dari
                                    rangkaian acara TechnoScape berupa kompetisi
                                    coding secara online selama 36 jam, di mana
                                    setiap tim bersaing untuk membuat aplikasi
                                    atau situs web inovatif yang dapat
                                    memecahkan permasalahan di kehidupan nyata.
                                    Peserta berkesempatan untuk berinteraksi
                                    dengan para mentor dalam sesi mentoring
                                    bisnis, teknologi, dan desain.
                                </p>
                                <div
                                    class="opacity-30 relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:w-[165px] md:w-[150px] w-[150px] mt-[60px] bg-cLinearGradientBtnBlue bg-[length:200%_100%] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-3 rounded-3xl text-cWhite font-YSDarkExtraBold tracking-wide ease-in-out flex justify-center items-center"
                                >
                                <button disabled>Coming Soon</button>
                                {{-- <a href="{{ route('hackathonUserRegistration') }}">Buy Ticket</a> --}}
                                </div>
                            </div>
                        </div>
                    @endif

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
        </section>
         <script src="{{asset('js/tasks.js')}}?t={{ env('VERSION_TIME') }}"></script>
    </body>
@endsection
