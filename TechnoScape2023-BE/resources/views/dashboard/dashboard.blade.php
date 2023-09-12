@extends('Template.template')

@section('head')
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}?t={{ env('VERSION_TIME') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}?t={{ env('VERSION_TIME') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-schedule.css') }}?t={{ env('VERSION_TIME') }}">

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection

@section('body')

    <body class="body ">
        {{-- <div> --}}
            <!-- Side Navbar -->
            <x-navbar-dashboard page="announcement" :user="$user"/>

            <!-- Announcement -->
            <section
            class="text-cWhite xl:p-16 lg:p-7 p-5 xl:pl-[335px] lg:pl-[275px] md:pl-32 pl-[5rem]"
        >
                <h1 class="font-ABigDeal lg:text-5xl sm:text-4xl sm:pt-6 pt-3">Announcement</h1>
                <!-- isi content -->
                <div class="grid sm:grid-cols-3 row-span-5 sm:gap-7 md:gap-5 lg:gap-10 mt-8">
                    @if ($announcement->count() == 0)
                        <!-- ini kotak abu2 -->
                        <div class="flex justify-center flex-col items-center bg-[#1D1D1D] sm:col-span-2 sm:row-span-1 lg:row-span-1 rounded-3xl p-4 lg:p-10 sm:min-h-full h-[23rem]" >
                            <!-- <img class="xl:w-[200px] lg:w-[175px] sm:w-[200px] w-[130px] rounded-2xl absolute top-0 right-0 hid" src="./assets/icon/Liquid/liquid_yellowRight.png" src="./assets/icon/Liquid/liquid_yellowRight.png" alt="">
                            <img class="xl:w-[200px] lg:w-[175px] sm:w-[200px] w-[130px] rounded-2xl absolute top-0 left-0" src="./assets/icon/Liquid/liquid_blue.png" alt="">
                            <img  class="xl:w-[200px] lg:w-[175px] sm:w-[200px] w-[130px] rounded-2xl absolute bottom-0 right-0" src="./assets/icon/Liquid/liquid_red.png" alt="">
                            <img class="xl:w-[200px] lg:w-[175px] sm:w-[200px] w-[130px] rounded-2xl absolute bottom-0 left-0" src="./assets/icon/Liquid/liquid_yellowLeft.png" alt=""> -->
                            <img class="xl:w-[250px] lg:w-[175px] md:w-[200px] w-[130px] rounded-2xl" src="./assets/icon/icon-iora.svg" alt="">
                            <p class="font-YSDarkSemiBold xl:text-2xl lg:text-xl sm:text-base text-xs text-center mt-4">Tidak ada pemberitahuan terbaru!</p>
                        </div>
                    @else
                        <div class="bg-[#1D1D1D]  sm:col-span-2 sm:row-span-1 lg:row-span-1 rounded-3xl p-4 pt-8 lg:p-10  sm:min-h-full min-h-[23rem] relative" id="accordion" >
                            @foreach ($announcement as $announcement)
                            <div class="mb-8 flex flex-col content-center lg:border-4 border-cWhite rounded-xl lg:pl-5 lg:py-3 p-2 bg-cBgDark">
                                <div id="drop" onclick="expandAnnouncement(this)">

                                    <div class="flex justify-between flex-row">
                                        <div class="font-ABigDeal text-sm lg:text-2xl">
                                            {{ $announcement->title }}
                                        </div>
                                        <div class="flex flex-row">
                                            <img class="flex lg:w-8" id="arrowAnnounce" src="{{ asset('assets/icon/icon-arrow-back.svg') }}" alt="" >
                                            <img class="lg:w-7" id="dot" src="{{ asset('assets/icon/icon-dot.svg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="content hidden" id="content">
                                    @php
                                        $date = date_format($announcement->created_at, 'd F Y, H:i');
                                    @endphp
                                    <p class="lg:text-sm text-xs" id="date">{{ $date }}</p>
                                    <p class="lg:px-5 lg:pt-5 px-2 pt-2 lg:text-sm text-xs font-YSDarkMediu">
                                        {{ $announcement->announcement }}
                                    </p>
                                    <div class="download-button relative bg-cLinearGradientBtnBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 rounded-lg text-cWhite font-YSDarkMedium tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer ml-4 mt-5 mb-4 flex">
                                        <a
                                            class="flex px-4 py-1 lg:pb-2 md:pb-1 lg:text-base text-[10px]"
                                            href="{{ route('downloadAnnouncement',['id' => $announcement->id])}}" download>
                                            {{$announcement->file}}
                                            <img class="lg:w-5 ml-2" src="{{ asset('assets/icon/icon-download.svg') }}" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
        </div>
        <script src="{{ asset('js/announcement.js') }}"></script>
        <script src="{{ asset('js/dashboard-schedule.js') }}"></script>
    </body>
@endsection
