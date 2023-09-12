@extends('Template.template')

@section('head')
  <!-- css -->
  <link rel="stylesheet" href="{{ asset('css/base/base.css') }}?t={{ env('VERSION_TIME') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}?t={{ env('VERSION_TIME') }}">
  <link rel="stylesheet" href="{{ asset('css/dashboard-schedule.css') }}?t={{ env('VERSION_TIME') }}">

  <!-- javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection

@section('body')
    <body class="body">
        {{-- Navbar --}}

        <x-navbar-dashboard page="schedule" :user="$user"/>

        {{-- Schedule --}}
        <section
            class="text-cWhite xl:p-16 lg:p-7 p-5 xl:pl-[335px] lg:pl-[275px] md:pl-32 pl-[5rem]"
        >
            <h1 class="font-ABigDeal lg:text-5xl sm:text-4xl sm:pt-6 pt-3">Schedule</h1>
            <!-- content -->
            <div class="grid sm:grid-cols-3 row-span-5 sm:gap-7 md:gap-5 lg:gap-10 mt-8">

                    {{-- No Schedule --}}
                    @if ($statusEvent == "null")
                   <div class="flex justify-center flex-col items-center bg-[#1D1D1D] sm:col-span-2 sm:row-span-1 lg:row-span-1 rounded-3xl p-4 lg:p-10 sm:min-h-full h-[23rem]" >
                            <!-- <img class="xl:w-[200px] lg:w-[175px] sm:w-[200px] w-[130px] rounded-2xl absolute top-0 right-0 hid" src="./assets/icon/Liquid/liquid_yellowRight.png" src="./assets/icon/Liquid/liquid_yellowRight.png" alt="">
                            <img class="xl:w-[200px] lg:w-[175px] sm:w-[200px] w-[130px] rounded-2xl absolute top-0 left-0" src="./assets/icon/Liquid/liquid_blue.png" alt="">
                            <img  class="xl:w-[200px] lg:w-[175px] sm:w-[200px] w-[130px] rounded-2xl absolute bottom-0 right-0" src="./assets/icon/Liquid/liquid_red.png" alt="">
                            <img class="xl:w-[200px] lg:w-[175px] sm:w-[200px] w-[130px] rounded-2xl absolute bottom-0 left-0" src="./assets/icon/Liquid/liquid_yellowLeft.png" alt=""> -->
                            <img class="xl:w-[250px] lg:w-[175px] md:w-[200px] w-[130px] rounded-2xl" src="./assets/icon/icon-iora.svg" alt="">
                            <p class="font-YSDarkSemiBold xl:text-2xl lg:text-xl sm:text-base text-xs text-center mt-4">Ayo daftar sekarang!</p>
                            <a href="{{route('findEvent')}}"
                                class="cursor-pointer cursor-pointer sm:w-[10rem] w-full border-color bg-cLinearGradientBlue flex items-center mt-16 sm:mt-24 lg:mt-8  rounded-3xl shadow-md px-8 py-2 sm:py-3 tracking-wide whitespace-nowrap">
                                <div class="z-50 sm:text-base text-[10px] w-full text-center">
                                    Register Here
                                </div>
                            </a>
                        </div>
                    @else

                        <div class="bg-[#1D1D1D] col-span-2 row-span-3 rounded-3xl md:p-7 p-4">
                            @if($tcUser && $tcUser->payment_status == "accepted")
                                @php
                                    $currentDate = \Carbon\Carbon::now()->format('Y-m-d');
                                    $targetDate1 = '2023-06-12';
                                    $targetDate2 = '2023-06-13';
                                @endphp
                            
                            {{-- TC Schedule --}}
                                @if($currentDate <= $targetDate1)
                                {{-- Schedule sebelum tanggal 13 Juni 2023 --}}
                                <div class="p-1 bg-gradient-to-r from-cRed3 to-cRed2 rounded-3xl">
                                    <div class="sm:p-[2rem] p-4 flex flex-col bg-cLinearGradientBg rounded-3xl gap-3 ">
                                        <div class="flex flex-row lg:gap-4 md:gap-3">
                                            <!-- kiri -->
                                            <div class="flex flex-col relative lg:top-[-5px] md:top-[-5px] mr-2">
                                                <p class="font-YSDarkBold lg:text-[2rem] md:text-2xl text-sm">21</p>
                                                <p class="font-YSDarkRegular text-sm sm:text-base">April</p>
                                            </div>
                                            <!-- kanan -->
                                            <div>
                                                <h1 class="font-ABigDeal xl:text-xl md:text-xl text-[8px] sm:text-[17px] bg-cLinearGradientUpcommingtask text-transparent bg-clip-text whitespace-nowrap">Techno Conference</h1>
                                                <p class="text-[8px] sm:text-base font-YSDarkSemiBold bg-cLinearGradientUpcommingtask text-transparent bg-clip-text ">Navigate Digital Changes to Expand Future Opportunities</p>
                                            </div>
                                        </div>

                                        <div class="flex sm:flex-row sm:my-3 flex-col justify-around">
                                            <div class="flex flex-row gap-2 mb-3 sm:mb-0">
                                                <img class="w-4 sm:w-5 " src="./assets/icon/icon-clock.svg" alt="">
                                                <p class="font-YSDarkSemiBold sm:text-base text-[10px]">: 13:00-15:00 PM</p>
                                                </div>
                                            <div class="flex flex-row gap-2">
                                                <img class="w-4 sm:w-5" src="./assets/icon/icon-location.svg" alt="">
                                                <p class="font-YSSemiBold sm:text-base text-[10px]">: Auditorium Binus</p>
                                            </div>
                                        </div>

                                        <a href="" class="cursor-pointer border-color bg-cLinearGradientRed2 flex items-center justify-center rounded-3xl shadow-md sm:px-10 px-6 py-1  tracking-wide">
                                            <div class="z-50 sm:text-xl text-[10px] font-YSDarkExtraBold ">
                                                Join Online
                                            </div>
                                            <img class="lg:w-6 md:w-[2rem] w-4 ml-2" src="./assets/icon/icon-laptop-account.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                @elseif($currentDate == $targetDate2)
                                {{-- Schedule tanggal 13 Juni 2023 --}}
                                <div class="p-1 bg-gradient-to-r from-cRed3 to-cRed2 rounded-3xl">
                                    <div class="sm:p-[2rem] p-4 flex flex-col bg-cLinearGradientBg rounded-3xl gap-3 ">
                                        <div class="flex flex-row lg:gap-4 md:gap-3">
                                            <!-- kiri -->
                                            <div class="flex flex-col relative lg:top-[-5px] md:top-[-5px] mr-2">
                                                <p class="font-YSDarkBold lg:text-[2rem] md:text-2xl text-sm">21</p>
                                                <p class="font-YSDarkRegular text-sm sm:text-base">April</p>
                                            </div>
                                            <!-- kanan -->
                                            <div>
                                                <h1 class="font-ABigDeal xl:text-xl md:text-xl text-[8px] sm:text-[17px] bg-cLinearGradientUpcommingtask text-transparent bg-clip-text whitespace-nowrap">Techno Conference</h1>
                                                <p class="text-[8px] sm:text-base font-YSDarkSemiBold bg-cLinearGradientUpcommingtask text-transparent bg-clip-text ">Navigate Digital Changes to Expand Future Opportunities</p>
                                            </div>
                                        </div>

                                        <div class="flex sm:flex-row sm:my-3 flex-col justify-around">
                                            <div class="flex flex-row gap-2 mb-3 sm:mb-0">
                                                <img class="w-4 sm:w-5 " src="./assets/icon/icon-clock.svg" alt="">
                                                <p class="font-YSDarkSemiBold sm:text-base text-[10px]">: 13:00-15:00 PM</p>
                                                </div>
                                            <div class="flex flex-row gap-2">
                                                <img class="w-4 sm:w-5" src="./assets/icon/icon-location.svg" alt="">
                                                <p class="font-YSSemiBold sm:text-base text-[10px]">: Auditorium Binus</p>
                                            </div>
                                        </div>

                                        <a href="" class="cursor-pointer border-color bg-cLinearGradientRed2 flex items-center justify-center rounded-3xl shadow-md sm:px-10 px-6 py-1  tracking-wide">
                                            <div class="z-50 sm:text-xl text-[10px] font-YSDarkExtraBold ">
                                                Join Online
                                            </div>
                                            <img class="lg:w-6 md:w-[2rem] w-4 ml-2" src="./assets/icon/icon-laptop-account.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                @elseif($currentDate > $targetDate2)
                                {{-- Setelah tanggal 13 juni --}}
                                @endif
                            @endif

                            @if($taUser && $taUser->payment_status == "accepted")
                            <!-- TECHNO ACADEMY  -->
                            <div class="p-1  bg-gradient-to-r from-cYellow2 to-cYellow3 rounded-3xl">
                                <div class="sm:p-[2rem] p-4 flex flex-col bg-cLinearGradientBg rounded-3xl gap-3 ">
                                    <div class="flex flex-row lg:gap-4 md:gap-3">
                                        <!-- kiri -->
                                        <div class="flex flex-col relative lg:top-[-5px] md:top-[-5px] mr-2">
                                            <p class="font-YSDarkBold lg:text-[2rem] md:text-2xl text-sm">21</p>
                                            <p class="font-YSDarkRegular text-sm sm:text-base">April</p>
                                        </div>
                                        <!-- kanan -->
                                        <div>
                                            <h1 class="font-ABigDeal xl:text-xl md:text-xl text-[8px] sm:text-[17px]  bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text whitespace-nowrap">Techno Conference</h1>
                                            <p class="text-[8px] sm:text-base font-YSDarkSemiBold  bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text ">Navigate Digital Changes to Expand Future Opportunities</p>
                                        </div>
                                    </div>

                                    <div class="flex sm:flex-row sm:my-3 flex-col justify-around">
                                        <div class="flex flex-row gap-2 mb-3 sm:mb-0">
                                            <img class="w-4 sm:w-5 " src="./assets/icon/icon-clock.svg" alt="">
                                            <p class="font-YSDarkSemiBold sm:text-base text-[10px]">: 13:00-15:00 PM</p>
                                            </div>
                                        <div class="flex flex-row gap-2">
                                            <img class="w-4 sm:w-5" src="./assets/icon/icon-location.svg" alt="">
                                            <p class="font-YSSemiBold sm:text-base text-[10px]">: Auditorium Binus</p>
                                        </div>
                                    </div>

                                    <a href="" class="cursor-pointer border-color bg-cLinearGradientRed2 flex items-center justify-center rounded-3xl shadow-md sm:px-10 px-6 py-1  tracking-wide">
                                        <div class="z-50 sm:text-xl text-[10px] font-YSDarkExtraBold ">
                                            Join Online
                                        </div>
                                        <img class="lg:w-6 md:w-[2rem] w-4 ml-2" src="./assets/icon/icon-laptop-account.svg" alt="">
                                    </a>
                                </div>
                            </div>

                            @endif

                            @if($hackathonTeam && $hackathonTeam->payment_status == "accepted")
                            <!-- HACKATHON  -->
                            <div class="p-1  bg-gradient-to-r from-cBlue2 to-cBlue3  rounded-3xl">
                                <div class="sm:p-[2rem] p-4 flex flex-col bg-cLinearGradientBg rounded-3xl gap-3 ">
                                    <div class="flex flex-row lg:gap-4 md:gap-3">
                                        <!-- kiri -->
                                        <div class="flex flex-col relative lg:top-[-5px] md:top-[-5px] mr-2">
                                            <p class="font-YSDarkBold lg:text-[2rem] md:text-2xl text-sm">21</p>
                                            <p class="font-YSDarkRegular text-sm sm:text-base">April</p>
                                        </div>
                                        <!-- kanan -->
                                        <div>
                                            <h1 class="font-ABigDeal xl:text-xl md:text-xl text-[8px] sm:text-[17px]  bg-gradient-to-r from-cBlue2 to-cBlue3  text-transparent bg-clip-text whitespace-nowrap">Techno Conference</h1>
                                            <p class="text-[8px] sm:text-base font-YSDarkSemiBold  bg-gradient-to-r from-cBlue2 to-cBlue3  text-transparent bg-clip-text ">Navigate Digital Changes to Expand Future Opportunities</p>
                                        </div>
                                    </div>

                                    <div class="flex sm:flex-row sm:my-3 flex-col justify-around">
                                        <div class="flex flex-row gap-2 mb-3 sm:mb-0">
                                            <img class="w-4 sm:w-5 " src="./assets/icon/icon-clock.svg" alt="">
                                            <p class="font-YSDarkSemiBold sm:text-base text-[10px]">: 13:00-15:00 PM</p>
                                            </div>
                                        <div class="flex flex-row gap-2">
                                            <img class="w-4 sm:w-5" src="./assets/icon/icon-location.svg" alt="">
                                            <p class="font-YSSemiBold sm:text-base text-[10px]">: Auditorium Binus</p>
                                        </div>
                                    </div>

                                    <a href="" class="cursor-pointer border-color bg-cLinearGradientRed2 flex items-center justify-center rounded-3xl shadow-md sm:px-10 px-6 py-1  tracking-wide">
                                        <div class="z-50 sm:text-xl text-[10px] font-YSDarkExtraBold ">
                                            Join Online
                                        </div>
                                        <img class="lg:w-6 md:w-[2rem] w-4 ml-2" src="./assets/icon/icon-laptop-account.svg" alt="">
                                    </a>
                                </div>
                            </div>

                            @endif
                        </div>
                    @endif

                    <div class="sm:col-span-1 mt-5 sm:mt-0 ">
                        {{-- Calendar --}}
                        <div
                            class="bg-cLinearGradientBg border-2 border-[#2F2F2F] rounded-3xl col-span-2 lg:col-span-1 px-2"
                        >
                            @include('layouts.calendar')
                        </div>

                        {{-- Upcoming Tasks --}}
                        <div
                            class="mt-5 bg-cLinearGradientBg rounded-3xl col-span-2 lg:col-span-1 border-2 border-[#2F2F2F] p-5"
                        >
                            @include('layouts.upcoming-task')
                        </div>
                    </div>
            </div>
        </section>
        <script src="{{ asset('js/dashboard-schedule.js') }}"></script>
    </body>
@endsection
