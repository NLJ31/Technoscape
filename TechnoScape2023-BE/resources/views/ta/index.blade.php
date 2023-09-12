@extends('Template.template')

@section('head')
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}?t={{ env('VERSION_TIME') }}" />
    <link rel="stylesheet" href="{{ asset('css/homepage/index.css') }}?t={{ env('VERSION_TIME') }}" />
    <link rel="stylesheet" href="{{ asset('css/techno-academy.css') }}?t={{ env('VERSION_TIME') }}" />

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script
            async
            src="https://ga.jspm.io/npm:es-module-shims@1.4.3/dist/es-module-shims.js"
        ></script>
@endsection

@section('body')
    <body class="bg-cBgDark text-cWhite font-PJSMedium">
        <x-navbar page="ta"/>

        <!-- Landing Page -->
        <section
            class="text-cWhite lg:px-[100px] md:px-20 px-6 h-screen flex flex-row items-center lg:gap-10 gap-0"
        >
            <div
                class="flex flex-col md:items-start items-center lg:gap-10 md:gap-7 gap-5 lg:pt-[275px] pt-0 lg:pr-0 pr-3"
            >
                <h1
                    class="lg:w-[90%] md:w-[70%] w-full lg:text-8xl md:text-7xl text-5xl font-ABigDeal md:text-left text-center bg-cLinearGradientYellow text-transparent bg-clip-text"
                >
                    Techno Academy
                </h1>
                <p
                    class="lg:text-[32px] md:text-2xl text-sm font-YSDarkSemiBold text-center"
                >
                    Master The Latest Technologies to Elevate Your Career
                </p>

                <div
                    class="lg:text-xl md:text-base text-xs bg-cLinearGradientBtnYellow bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-4 md:pb-5 py-2 rounded-full text-cBlack font-YSDarkExtraBold tracking-wide hover:shadow-bsYellowBtn ease-in-out cursor-pointer"
                >
                    Coming Soon!
                </div>
            </div>
            <img
                class="gear-float absolute md:top-40 top-32 lg:right-40 md:right-20 right-10 lg:w-72 md:w-52 w-20 z-10"
                src="./assets/techno-academy/icon-gear.svg"
                alt=""
            />
            <img
                class="absolute bottom-0 right-0 w-[500px]"
                src="./assets/techno-academy/img-iora.svg"
                alt=""
            />
            <div>
                <!-- <div
                    id="mascot"
                    class="iora absolute lg:top-[340px] md:top-80 top-72 lg:right-20 right-0"
                ></div> -->
            </div>
        </section>


        <div
        class="bg-cBgDark text-cWhite flex flex-col items-center font-YSDarkRegular"
    >
        <hr class="bg-[#808080] opacity-25 w-[80%]" />
        <!-- Before Footer -->
        <div
            class="w-full flex flex-col-reverse text-center lg:text-left lg:flex-row justify-between my-10 md:px-20 px-10"
        >
                <!-- Left / Bottom -->
                <div class="flex flex-col md:flex-row lg:justify-start md:justify-evenly justify-start text-left">
                    <div class="mb-10 md:mb-0 lg:mr-10 mr-0">
                        <p class="mb-4 text-center md:text-left text-xs md:text-base">
                            Organized By
                        </p>
                        <img src="./assets/logo/bncc-black-bg.png" alt="Bina Nusantara Computer Club"
                            class="mx-auto md:mx-0 lg:w-64 w-24" />
                    </div>
                    <div
                        class="flex justify-around items-center lg:flex-col lg:w-full md:w-[70%] w-full lg:-ml-4 md:ml-0 ml-0 lg:space-y-8">
                        <div class="space-y-3">
                            <p class="lg:w-max w-full text-[9px] md:text-sm lg:text-base text-center">
                                Official Learning Partner of
                            </p>
                            <img src="./assets/logo/gojek-logo.png" alt="Gojek" class="lg:w-2/3 md:w-48 w-32 pt-2" />
                        </div>
                        <div class="space-y-3">
                            <p class="lg:w-max w-full text-[9px] md:text-sm lg:text-base text-center">
                                Official Empowering Affiliate of
                            </p>
                            <img src="./assets/logo/Tiketcom-logo.png" alt="tiket.com" class="lg:w-2/3 md:w-44 w-32 pt-1" />
                        </div>
                    </div>
                </div>
                <!-- Right / Top -->
                <div class="lg:hw-2/5 flex flex-col lg:items-start items-center lg:gap-16 gap-10">
                    <div>
                        <p class="lg:text-lg text-xs mb-4">
                            Subscribe to <b>TechnoScape</b>
                        </p>
                        <form action="" method="POST" class="flex justify-center my-1 lg:my-0 lg:justify-end">
                            <input type="email" name="email" id="input-email" placeholder="Masukkan Email Anda"
                                class="bg-cWhite text-[#595959] bsInput text-sm md:text-base py-3 pl-3 pr-7 lg:w-72 md:w-72 w-52 lg:pl-4 lg:pr-3 rounded-l-3xl my-2 shadow-input" />
                            <div class="bg-tcLinearGradientBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 font-YSDarkSemiBold text-cWhite text-xs md:text-base h-fit my-auto lg:py-3 py-[14px] px-6 rounded-r-3xl hover:ease-in-out cursor-pointer"
                                id="subscribe">
                                Subscribe
                            </div>
                        </form>
                    </div>
                    <div class="flex justify-center items-center lg:justify-end space-x-6 md:space-x-8 mb-10 lg:mb-0">
                        <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                            <img src="./assets/techno-conference/social/medium.svg" alt="medium">
                        </a>
                        <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                            <img src="./assets/techno-conference/social/instagram.svg" alt="instagram">
                        </a>
                        <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                            <img src="./assets/techno-conference/social/facebook.svg" alt="facebook">
                        </a>
                        <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                            <img src="./assets/techno-conference/social/twitter.svg" alt="twiiter">
                        </a>
                        <a href="#" class="filter brightness-0 invert hover:filter-none transition-all">
                            <img src="./assets/techno-conference/social/linkedin.svg" alt="linkedin">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer
            class="flex flex-col-reverse sm:flex-row md:flex-row justify-between bg-cWhite bg-opacity-10 text-cWhite text-center font-YSDarkMedium px-0 md:px-10 lg:px-20 py-4 lg:mx-10 rounded-t-full text-[0.6rem] lg:text-sm md:text-xs">
            <p>All Rights Reserved BNCC 2023 © Bina Nusantara Computer Club</p>
            <p class="mb-2 md:mb-0">
                <a href="{{route('privacyPolicy')}}">Privacy Policy</a> &
                <a href="{{route('termsAndConditions')}}">Terms of Service</a>
            </p>
        </footer>

        <script src="{{ asset('js/techno-academy.js') }}?t={{ env('VERSION_TIME') }}"></script>
        <script type="importmap-shim" src="/js/base/esm-maps.json"></script>
        <script type="module-shim">
            import HaloIora from './js/base/halo-iora.js';

            window.HaloIora = HaloIora;

            var hero = new HaloIora({alpha:true, antialias:true, container:$("#mascot")});

            hero.setPixelRatio(window.devicePixelRatio);

            window.hero = hero;
        </script>


        <body/>
@endsection
