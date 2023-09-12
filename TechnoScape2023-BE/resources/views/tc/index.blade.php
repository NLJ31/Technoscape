@extends('Template.template')

@section('head')
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Splide -->
    <script src="
            https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
            "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
    " rel="stylesheet">
    <script src="
            https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js
            "></script>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <!-- es-module-shims -->
    <script async src="https://ga.jspm.io/npm:es-module-shims@1.4.3/dist/es-module-shims.js"></script>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}?t={{ env('VERSION_TIME') }}" />
    <link rel="stylesheet" href="{{ asset('css/homepage/home.css') }}?t={{ env('VERSION_TIME') }}" />
    <link rel="stylesheet" href="{{ asset('css/techno-conference.css') }}?t={{ env('VERSION_TIME') }}" />
@endsection

@section('body')

    <body class="bg-tcBackground bg-[length:100%_auto]">
        <x-navbar page="tc" />

        <!-- Hero -->
        <div id="hero"
            class="tc-container flex justify-center items-center text-cWhite pt-44 md:pt-56 lg:pt-60 xl:pt-64 pb-32 lg:pb-48 xl:pb-72 2xl:pb-96 relative bg-[url('/public/assets/techno-conference/hero/hero-bg.png')] bg-[length:100%_auto]">
            <div class="flex flex-col items-start justify-center gap-4 lg:gap-6 xl:gap-8 z-[2] w-full">
                <img src="./assets/techno-conference/hero/ts-x-platinum.png" alt="technoscape x platinum sponsor">
                <h1 class="leading-tight font-ABigDeal text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">TECHNO
                    CONFERENCE</h1>
                <p class="tc-subtitle leading-relaxed font-YSDarkRegular">Navigate Digital Changes to Expand Future
                    Opportunities
                </p>
                <a href="/techno-conference/register" class="tc-button-red mt-4">Register
                    Here!</a>
            </div>
            <img src="./assets/techno-conference/hero/red-blob.svg" alt="red blob"
                class="absolute right-0 bottom-0 z-[1] w-[16rem] md:w-[20rem] lg:w-[32rem] xl:w-[40rem] 2xl:w-[48rem] pointer-events-none">
            <div id="mascot-1"
                class="absolute -right-8 sm:-right-4 lg:right-8 xl:right-20 2xl:right-24 -bottom-8 sm:-bottom-6 lg:bottom-4 xl:bottom-16 2xl:bottom-20 object iora h-[250px] sm:h-[300px] lg:h-[350px] xl:h-[400px] 2xl:h-[500px] w-[250px] sm:w-[300px] xl:w-[400px] 2xl:w-[500px] scale-75 lg:scale-[0.8] xl:scale-95 2xl:scale-95 z-10"
                data-value="1"></div>
        </div>

        <!-- About -->
        <div
            class="tc-container flex flex-col items-start justify-center gap-8 text-cWhite pt-32 sm:pt-36 md:pt-40 lg:pt-48 xl:pt-60 2xl:pt-68 pb-16 relative z-[2]">

            <img src="./assets/techno-conference/about/about-bg.png" alt="about-background"
                class="absolute -z-10 top-0 left-0 right-0 mx-auto w-full h-4/5">

            <img src="./assets/techno-conference/about/mic.svg" alt="mic"
                class="absolute -top-6 sm:-top-8 md:-top-10 lg:-top-12 xl:-top-14 2xl:-top-16 left-8 w-24 sm:w-28 md:w-32 lg:w-36 xl:w-40 2xl:w-auto animate-float-slow">

            <div class="flex flex-col justify-center items-start gap-2 lg:gap-4 xl:gap-8">
                <h1 class="tc-title leading-tight text-start">ABOUT US</h1>
                <p class="tc-subtitle leading-relaxed text-justify font-YSDarkRegular">
                    Techno Conference akan memiliki empat seminar dan dua talkshow yang akan diadakan secara hybrid selama
                    dua hari. Techno
                    Conference akan menjadi wadah bagi peserta untuk menemukan ilmu maupun pengalaman baru dari expert
                    perusahaan start-up
                    di Indonesia yang sudah berpengalaman pada bidang teknologi, desain, dan bisnis
                </p>
            </div>
            <!-- Download Guidebook -->
            <a href="./assets/logo/technoscape-logo.svg" class="tc-button-red self-center mt-2"
                download="Guidebook">Guidebook</a>

            <img src="./assets/techno-conference/about/about-image.png" alt="about-image"
                class="self-center mt-2 sm:mt-4 md:mt-5 lg:mt-6 xl:mt-8">

            <div class="flex flex-col justify-center items-center gap-2 text-center self-center">
                <h2 class="font-ABigDeal text-2xl lg:text-3xl xl:text-4xl leading-tight">VIRTUAL CONFERENCE</h2>
                <h3 class="font-YSDarkMedium text-2xl lg:text-3xl xl:text-4xl leading-tight">TechnoScape 2022</h3>
            </div>
        </div>

        <!-- Highlights -->
        <div id="highlight"
            class="tc-container flex justify-center items-center pt-24 md:pt-32 lg:pt-48 xl:pt-64 pb-0 lg:pb-4 xl:pb-8 relative">
            <div
                class="flex flex-col gap-8 lg:gap-10 xl:gap-12 justify-center items-center text-cWhite z-[2] w-full px-4 lg:px-8 xl:px-16">
                <h1 class="leading-tight font-ABigDeal text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl">HIGHLIGHTS
                </h1>
            </div>
        </div>

        <div class="swiper highlightSwiper pb-40">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./assets/techno-conference/highlight/highlight-1.png" alt="highlight-1" />
                </div>
                <div class="swiper-slide">
                    <img src="./assets/techno-conference/highlight/highlight-2.png" alt="highlight-2" />
                </div>
                <div class="swiper-slide">
                    <img src="./assets/techno-conference/highlight/highlight-3.png" alt="highlight-3" />
                </div>
                <div class="swiper-slide">
                    <img src="./assets/techno-conference/highlight/highlight-4.png" alt="highlight-4" />
                </div>
                <div class="swiper-slide">
                    <img src="./assets/techno-conference/highlight/highlight-5.png" alt="highlight-5" />
                </div>
            </div>
            <div id="highlight-swiper-pagination" class="swiper-pagination"></div>

            <div id="highlight-swiper-button-prev" class="swiper-button-prev pointer-events-none opacity-0"></div>
            <div id="highlight-swiper-button-next" class="swiper-button-next pointer-events-none opacity-0"></div>s
        </div>

        <!-- Join -->
        <div id="join"
            class="tc-container flex flex-col justify-center items-center text-cWhite gap-12 lg:gap-16 xl:gap-24 pt-24 md:pt-32 lg:pt-48 xl:pt-64 pb-24">
            <h1 class="tc-title leading-tight">WHY YOU SHOULD <span
                    class="bg-tcLinearGradientWhiteRed bg-clip-text text-[transparent]">JOIN!</span></h1>

            <div class="flex flex-col justify-center items-center gap-16 lg:gap-20 xl:gap-24">
                <div
                    class="flex flex-col md:flex-row justify-center items-center gap-4 sm:gap-6 md:gap-12 lg:gap-16 xl:gap-20 2xl:gap-24">
                    <img src="./assets/techno-conference/join/disc.png" alt="disc" class="w-52 sm:w-64 xl:w-auto">
                    <div class="flex flex-col justify-center items-start gap-4 lg:gap-6 xl:gap-8 w-full 2xl:w-2/5">
                        <h1 class="font-YSDarkBlack text-3xl lg:text-4xl xl:text-5xl text-center md:text-start">Temukan dan
                            Dapatkan
                            Inspirasi dari
                            Pakarnya!
                        </h1>
                        <p class="font-YSDarkRegular text-xl lg:text-2xl xl:text-3xl text-center md:text-start">Kesempatan
                            ini
                            bisa
                            kamu dapatkan untuk
                            membantumu
                            mencapai keunggulan dalam pekerjaan yang kamu impikan.</p>
                    </div>
                </div>

                <div
                    class="flex flex-col md:flex-row justify-center items-center gap-4 sm:gap-6 md:gap-12 lg:gap-16 xl:gap-20 2xl:gap-24">
                    <img src="./assets/techno-conference/join/mic.png" alt="mic"
                        class="md:order-2 w-52 sm:w-64 xl:w-auto">
                    <div class="flex flex-col justify-center items-center gap-4 lg:gap-6 xl:gap-8 w-full 2xl:w-2/5">
                        <h1 class="font-YSDarkBlack text-3xl lg:text-4xl xl:text-5xl text-center md:text-start">Mendapatkan
                            Wawasan Tentang Teknologi yang Relevan
                        </h1>
                        <p class="font-YSDarkRegular text-xl lg:text-2xl xl:text-3xl text-center md:text-start">Kamu dapat
                            memperluas pengetahuan tentang tren dan inovasi terbaru di bidang teknologi melalui pembicara
                            yang
                            berpengalaman.</p>
                    </div>
                </div>

                <div
                    class="flex flex-col md:flex-row justify-center items-center gap-4 sm:gap-6 md:gap-12 lg:gap-16 xl:gap-20 2xl:gap-24">
                    <img src="./assets/techno-conference/join/gameboy.png" alt="gameboy" class="w-52 sm:w-64 xl:w-auto">
                    <div class="flex flex-col justify-center items-center gap-4 lg:gap-6 xl:gap-8 w-full 2xl:w-2/5">
                        <h1 class="font-YSDarkBlack text-3xl lg:text-4xl xl:text-5xl text-center md:text-start">Mendapatkan
                            Jaringan Profesional
                        </h1>
                        </h1>
                        <p class="font-YSDarkRegular text-xl lg:text-2xl xl:text-3xl text-center md:text-start">Kamu akan
                            mendapatkan kesempatan untuk berinteraksi bersama pembicara yang inspiratif dan para peserta
                            lainnya secara
                            virtual.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Speakers -->
        <div id="highlight" class="tc-container flex justify-center items-center pt-24 md:pt-32 lg:pt-48 xl:pt-64">
            <h1 class="tc-title leading-tight text-cWhite">MEET OUR <span
                    class="bg-tcLinearGradientWhiteRed bg-clip-text text-[transparent]">SPEAKERS</span></h1>
        </div>
        <div class="swiper speakerSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="group text-cWhite">
                        <div class="border-4 border-tcRed rounded-t-xl p-8 pb-0 relative">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-28 group-hover:-translate-y-28 sm:group-hover:-translate-y-40 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-1.svg" alt="blob-1">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-32 group-hover:-translate-y-48 sm:group-hover:-translate-y-64 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-2.svg" alt="blob-2">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:translate-x-24 sm:group-hover:translate-x-28 group-hover:-translate-y-40 sm:group-hover:-translate-y-56 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-3.svg" alt="blob-3">
                            <img class="" src="./assets/techno-conference/speaker/speaker-1.png" alt="speaker-1">
                        </div>
                        <div
                            class="flex flex-col justify-center items-center bg-tcRed rounded-b-xl px-4 py-4 lg:py-6 xl:py-8">
                            <h3 class="font-ABigDeal leading-relaxed text-xl lg:text-3xl xl:text-4xl text-center">
                                TBA
                            </h3>
                            <p class="leading-relaxed font-YSDarkReguler text-sm lg:text-base xl:text-lg text-center">
                                To Be Announced
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group text-cWhite">
                        <div class="border-4 border-tcRed rounded-t-xl p-8 pb-0 relative">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-28 group-hover:-translate-y-28 sm:group-hover:-translate-y-40 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-1.svg" alt="blob-1">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-32 group-hover:-translate-y-48 sm:group-hover:-translate-y-64 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-2.svg" alt="blob-2">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:translate-x-24 sm:group-hover:translate-x-28 group-hover:-translate-y-40 sm:group-hover:-translate-y-56 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-3.svg" alt="blob-3">
                            <img class="" src="./assets/techno-conference/speaker/speaker-1.png" alt="speaker-1">
                        </div>
                        <div
                            class="flex flex-col justify-center items-center bg-tcRed rounded-b-xl px-4 py-4 lg:py-6 xl:py-8">
                            <h3 class="font-ABigDeal leading-relaxed text-xl lg:text-3xl xl:text-4xl text-center">
                                TBA
                            </h3>
                            <p class="leading-relaxed font-YSDarkReguler text-sm lg:text-base xl:text-lg text-center">
                                To Be Announced
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group text-cWhite">
                        <div class="border-4 border-tcRed rounded-t-xl p-8 pb-0 relative">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-28 group-hover:-translate-y-28 sm:group-hover:-translate-y-40 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-1.svg" alt="blob-1">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-32 group-hover:-translate-y-48 sm:group-hover:-translate-y-64 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-2.svg" alt="blob-2">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:translate-x-24 sm:group-hover:translate-x-28 group-hover:-translate-y-40 sm:group-hover:-translate-y-56 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-3.svg" alt="blob-3">
                            <img class="" src="./assets/techno-conference/speaker/speaker-1.png" alt="speaker-1">
                        </div>
                        <div
                            class="flex flex-col justify-center items-center bg-tcRed rounded-b-xl px-4 py-4 lg:py-6 xl:py-8">
                            <h3 class="font-ABigDeal leading-relaxed text-xl lg:text-3xl xl:text-4xl text-center">
                                TBA
                            </h3>
                            <p class="leading-relaxed font-YSDarkReguler text-sm lg:text-base xl:text-lg text-center">
                                To Be Announced
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group text-cWhite">
                        <div class="border-4 border-tcRed rounded-t-xl p-8 pb-0 relative">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-28 group-hover:-translate-y-28 sm:group-hover:-translate-y-40 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-1.svg" alt="blob-1">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-32 group-hover:-translate-y-48 sm:group-hover:-translate-y-64 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-2.svg" alt="blob-2">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:translate-x-24 sm:group-hover:translate-x-28 group-hover:-translate-y-40 sm:group-hover:-translate-y-56 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-3.svg" alt="blob-3">
                            <img class="" src="./assets/techno-conference/speaker/speaker-1.png" alt="speaker-1">
                        </div>
                        <div
                            class="flex flex-col justify-center items-center bg-tcRed rounded-b-xl px-4 py-4 lg:py-6 xl:py-8">
                            <h3 class="font-ABigDeal leading-relaxed text-xl lg:text-3xl xl:text-4xl text-center">
                                TBA
                            </h3>
                            <p class="leading-relaxed font-YSDarkReguler text-sm lg:text-base xl:text-lg text-center">
                                To Be Announced
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="group text-cWhite">
                        <div class="border-4 border-tcRed rounded-t-xl p-8 pb-0 relative">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-28 group-hover:-translate-y-28 sm:group-hover:-translate-y-40 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-1.svg" alt="blob-1">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:-translate-x-24 sm:group-hover:-translate-x-32 group-hover:-translate-y-48 sm:group-hover:-translate-y-64 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-2.svg" alt="blob-2">
                            <img class="-z-10 absolute bottom-0 left-0 right-0 mx-auto group-hover:translate-x-24 sm:group-hover:translate-x-28 group-hover:-translate-y-40 sm:group-hover:-translate-y-56 transition-all duration-500"
                                src="./assets/techno-conference/speaker/blob-3.svg" alt="blob-3">
                            <img class="" src="./assets/techno-conference/speaker/speaker-1.png" alt="speaker-1">
                        </div>
                        <div
                            class="flex flex-col justify-center items-center bg-tcRed rounded-b-xl px-4 py-4 lg:py-6 xl:py-8">
                            <h3 class="font-ABigDeal leading-relaxed text-xl lg:text-3xl xl:text-4xl text-center">
                                TBA
                            </h3>
                            <p class="leading-relaxed font-YSDarkReguler text-sm lg:text-base xl:text-lg text-center">
                                To Be Announced
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div id="speaker-swiper-pagination" class="swiper-pagination"></div>

            <div id="speaker-swiper-button-prev"
                class="swiper-button-prev -mt-12 w-8 scale-75 sm:scale-[0.8] md:scale-[0.85] lg:scale-90 xl:scale-95 2xl:scale-100 sm:ml-[15%] md:ml-[20%] lg:ml-[25%] xl:ml-[30%] 2xl:ml-[32%]">
            </div>
            <div id="speaker-swiper-button-next"
                class="swiper-button-next -mt-12 w-4 scale-75 sm:scale-[0.8] md:scale-[0.85] lg:scale-90 xl:scale-95 2xl:scale-100 sm:mr-[15%] md:mr-[20%] lg:mr-[25%] xl:mr-[30%] 2xl:mr-[32%]">
            </div>
        </div>

        <!-- Timeline -->
        <div id="timeline"
            class="tc-container flex flex-col justify-center items-center text-cWhite gap-8 lg:gap-16 xl:gap-20 pt-24 md:pt-32 lg:pt-48 xl:pt-64 mb-16">
            <h1 class="tc-title leading-tight">TIMELINE</h1>
            <img src="./assets/techno-conference/timeline/tc-timeline-vertical.png" alt="timeline" class="lg:hidden">
            <img src="./assets/techno-conference/timeline/tc-timeline-horizontal.png" alt="timeline"
                class="hidden lg:block">
            <!-- Tab -->
            <div
                class="font-YSDarkMedium max-w-[800px] w-full flex justify-center items-center gap-8 lg:gap-12 xl:gap-16 border-b-2 border-[rgba(202,202,202,0.56)] mt-6 sm:mt-8 md:mt-10 lg:mt-12 xl:mt-14 2xl:mt-16">
                <span id="timeline-tab-day-1" class="tc-timeline-tab tc-timeline-tab-active">Day
                    1</span>
                <span id="timeline-tab-day-2" class="tc-timeline-tab">Day
                    2</span>
            </div>
            <!-- Timeline content -->
            <div id="timeline-content">
                <!-- Day 1 -->
                <div id="timeline-content-day-1" class="tc-timeline-content">
                    <div class="tc-timeline-content-item">
                        <div class="w-2 bg-cWhite rounded-full text-cWhite">.</div>
                        <div class="flex flex-col gap-4 md:gap-2">
                            <h3 class="font-YSDarkExtraBold text-xl md:text-2xl">Design Thinking: Does your design
                                solve problems?</h3>
                            <div
                                class="flex flex-col md:flex-row justify-center md:justify-between items-start md:items-stretch gap-4 md:gap-2">
                                <div
                                    class="flex flex-col gap-1 justify-center items-start
                                                    ">
                                    <p class="font-YSDarkReguler text-md md:text-lg">Day 1</p>
                                    <p class="font-YSDarkReguler text-md md:text-lg">UX Researcher at ABC Company</p>
                                </div>
                                <div
                                    class="flex justify-center items-center rounded-xl border-2 border-cWhite py-2 px-6 md:px-8 mt-1 md:mt-2 font-YSDarkBold text-md lg:text-lg">
                                    <p>09:00 - 11:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tc-timeline-content-item">
                        <div class="w-2 bg-cWhite rounded-full text-cWhite">.</div>
                        <div class="flex flex-col gap-4 md:gap-2">
                            <h3 class="font-YSDarkExtraBold text-xl md:text-2xl">Design Thinking: Does your design
                                solve problems?</h3>
                            <div
                                class="flex flex-col md:flex-row justify-center md:justify-between items-start md:items-stretch gap-4 md:gap-2">
                                <div
                                    class="flex flex-col gap-1 justify-center items-start
                                                    ">
                                    <p class="font-YSDarkReguler text-md md:text-lg">Day 1</p>
                                    <p class="font-YSDarkReguler text-md md:text-lg">UX Researcher at ABC Company</p>
                                </div>
                                <div
                                    class="flex justify-center items-center rounded-xl border-2 border-cWhite py-2 px-6 md:px-8 mt-1 md:mt-2 font-YSDarkBold text-md lg:text-lg">
                                    <p>11:00 - 13:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tc-timeline-content-item">
                        <div class="w-2 bg-cWhite rounded-full text-cWhite">.</div>
                        <div class="flex flex-col gap-4 md:gap-2">
                            <h3 class="font-YSDarkExtraBold text-xl md:text-2xl">Design Thinking: Does your design
                                solve problems?</h3>
                            <div
                                class="flex flex-col md:flex-row justify-center md:justify-between items-start md:items-stretch gap-4 md:gap-2">
                                <div
                                    class="flex flex-col gap-1 justify-center items-start
                                                    ">
                                    <p class="font-YSDarkReguler text-md md:text-lg">Day 1</p>
                                    <p class="font-YSDarkReguler text-md md:text-lg">UX Researcher at ABC Company</p>
                                </div>
                                <div
                                    class="flex justify-center items-center rounded-xl border-2 border-cWhite py-2 px-6 md:px-8 mt-1 md:mt-2 font-YSDarkBold text-md lg:text-lg">
                                    <p>13:00 - 15:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Day 2 -->
                <div style="display: none;" id="timeline-content-day-2" class="tc-timeline-content">
                    <div class="tc-timeline-content-item">
                        <div class="w-2 bg-cWhite rounded-full text-cWhite">.</div>
                        <div class="flex flex-col gap-4 md:gap-2">
                            <h3 class="font-YSDarkExtraBold text-xl md:text-2xl">Design Thinking: Does your design
                                solve problems?</h3>
                            <div
                                class="flex flex-col md:flex-row justify-center md:justify-between items-start md:items-stretch gap-4 md:gap-2">
                                <div
                                    class="flex flex-col gap-1 justify-center items-start
                                                                    ">
                                    <p class="font-YSDarkReguler text-md md:text-lg">Day 2</p>
                                    <p class="font-YSDarkReguler text-md md:text-lg">UX Researcher at ABC Company</p>
                                </div>
                                <div
                                    class="flex justify-center items-center rounded-xl border-2 border-cWhite py-2 px-6 md:px-8 mt-1 md:mt-2 font-YSDarkBold text-md lg:text-lg">
                                    <p>09:00 - 11:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tc-timeline-content-item">
                        <div class="w-2 bg-cWhite rounded-full text-cWhite">.</div>
                        <div class="flex flex-col gap-4 md:gap-2">
                            <h3 class="font-YSDarkExtraBold text-xl md:text-2xl">Design Thinking: Does your design
                                solve problems?</h3>
                            <div
                                class="flex flex-col md:flex-row justify-center md:justify-between items-start md:items-stretch gap-4 md:gap-2">
                                <div
                                    class="flex flex-col gap-1 justify-center items-start
                                                                    ">
                                    <p class="font-YSDarkReguler text-md md:text-lg">Day 2</p>
                                    <p class="font-YSDarkReguler text-md md:text-lg">UX Researcher at ABC Company</p>
                                </div>
                                <div
                                    class="flex justify-center items-center rounded-xl border-2 border-cWhite py-2 px-6 md:px-8 mt-1 md:mt-2 font-YSDarkBold text-md lg:text-lg">
                                    <p>11:00 - 13:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tc-timeline-content-item">
                        <div class="w-2 bg-cWhite rounded-full text-cWhite">.</div>
                        <div class="flex flex-col gap-4 md:gap-2">
                            <h3 class="font-YSDarkExtraBold text-xl md:text-2xl">Design Thinking: Does your design
                                solve problems?</h3>
                            <div
                                class="flex flex-col md:flex-row justify-center md:justify-between items-start md:items-stretch gap-4 md:gap-2">
                                <div
                                    class="flex flex-col gap-1 justify-center items-start
                                                                    ">
                                    <p class="font-YSDarkReguler text-md md:text-lg">Day 2</p>
                                    <p class="font-YSDarkReguler text-md md:text-lg">UX Researcher at ABC Company</p>
                                </div>
                                <div
                                    class="flex justify-center items-center rounded-xl border-2 border-cWhite py-2 px-6 md:px-8 mt-1 md:mt-2 font-YSDarkBold text-md lg:text-lg">
                                    <p>13:00 - 15:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ -->
        <div
            class="tc-container flex flex-col xl:flex-row justify-between items-start gap-8 xl:gap-44 py-24 md:py-32 lg:py-48 xl:py-64 text-cWhite">
            <div class="flex flex-col justify-center items-start">
                <img src="./assets/techno-conference/faq/question-mark.svg" alt="question marks"
                    class="w-28 md:w-36 lg:w-44 xl:w-auto">
                <h1 class="tc-title leading-tight">FAQ</h1>
                <h2 class="tc-subtitle leading-tight">Frequently Asked <br>Questions</h2>
            </div>

            <div class="w-full flex flex-col gap-4 lg:gap-8 xl:gap-12">
                <div class="w-full flex flex-col gap-2 xl:gap-4">
                    <div id="faq-1" class="tc-faq-question" data-faq-question="1"
                        onclick="openFaq(this.dataset.faqQuestion)">
                        <h2>
                            Apa saja persyaratan untuk mengikuti Techno Conference?
                        </h2>
                        <img src="./assets/techno-conference/faq/icon-arrow.svg" alt="arrow"
                            class="tc-faq-arrow w-4 sm:w-5 md:w-6 lg:w-7 xl:w-8 transition-all" data-faq-arrow="1">
                    </div>
                    <div class="tc-faq-answer hidden" data-faq-answer="1">
                        <p><span class="font-YSDarkBold">Tidak ada syarat untuk mengikuti Techno Conference</span>. Jadi,
                            siapa saja yang ingin belajar dapat berpartisipasi dalam acara ini.
                        </p>
                    </div>
                </div>

                <div class="w-full flex flex-col gap-2 xl:gap-4">
                    <div id="faq-2" class="tc-faq-question" data-faq-question="2"
                        onclick="openFaq(this.dataset.faqQuestion)">
                        <h2>
                            Kapan batas waktu pendaftaran Techno Conference?
                        </h2>
                        <img src="./assets/techno-conference/faq/icon-arrow.svg" alt="arrow"
                            class="tc-faq-arrow w-4 sm:w-5 md:w-6 lg:w-7 xl:w-8 transition-all" data-faq-arrow="2">
                    </div>
                    <div class="tc-faq-answer hidden" data-faq-answer="2">
                        <p>Batas akhir pendaftaran Techno Conference adalah <span class="font-YSDarkBold">Minggu, 11 Juni
                                2023</span>.
                        </p>
                    </div>
                </div>

                <div class="w-full flex flex-col gap-2 xl:gap-4">
                    <div id="faq-3" class="tc-faq-question" data-faq-question="3"
                        onclick="openFaq(this.dataset.faqQuestion)">
                        <h2>
                            Apa saja benefit yang didapatkan jika saya mengikuti Techno Conference?
                        </h2>
                        <img src="./assets/techno-conference/faq/icon-arrow.svg" alt="arrow"
                            class="tc-faq-arrow w-4 sm:w-5 md:w-6 lg:w-7 xl:w-8 transition-all" data-faq-arrow="3">
                    </div>
                    <div class="tc-faq-answer hidden" data-faq-answer="3">
                        <p>Peserta akan mendapatkan <span class="font-YSDarkBold">wawasan</span> dari pembicara yang sudah
                            ahli di bidangnya dan mendapatkan
                            <span class="font-YSDarkBold">e-certificate</span> serta <span class="font-YSDarkBold">SAT
                                <span class="italis">points</span></span> bagi Binusian.
                        </p>
                    </div>
                </div>

                <div class="w-full flex flex-col gap-2 xl:gap-4">
                    <div id="faq-4" class="tc-faq-question" data-faq-question="4"
                        onclick="openFaq(this.dataset.faqQuestion)">
                        <h2>
                            Apa syarat agar saya mendapatkan e-certificate dan poin SAT untuk Binusian?
                        </h2>
                        <img src="./assets/techno-conference/faq/icon-arrow.svg" alt="arrow"
                            class="tc-faq-arrow w-4 sm:w-5 md:w-6 lg:w-7 xl:w-8 transition-all" data-faq-arrow="4">
                    </div>
                    <div class="tc-faq-answer hidden" data-faq-answer="4">
                        <p>Peserta harus mengikuti <span class="font-YSDarkBold">seluruh rangkaian</span> Techno Conference
                            untuk memenuhi persyaratan mendapatkan e-certificate dan poin SAT bagi Binusian.
                        </p>
                    </div>
                </div>

                <div class="w-full flex flex-col gap-2 xl:gap-4">
                    <div id="faq-5" class="tc-faq-question" data-faq-question="5"
                        onclick="openFaq(this.dataset.faqQuestion)">
                        <h2>
                            Jika saya memiliki pertanyaan, siapa yang dapat saya hubungi?
                        </h2>
                        <img src="./assets/techno-conference/faq/icon-arrow.svg" alt="arrow"
                            class="tc-faq-arrow w-4 sm:w-5 md:w-6 lg:w-7 xl:w-8 transition-all" data-faq-arrow="5">
                    </div>
                    <div class="tc-faq-answer hidden" data-faq-answer="5">
                        <p>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi <span
                                class="font-YSDarkBold italic">contact person</span>
                            kami:<br>
                            <span class="font-YSDarkBold">Hanson</span><br>
                            WA : 081398533025<br>
                            ID LINE : ivanderhanson0105<br>
                            <br>
                            <span class="font-YSDarkBold">Audrey</span><br>
                            WA : 085173171809<br>
                            ID LINE : dreyelvia
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ticket and Share -->
        <div
            class="tc-container w-full flex flex-col md:flex-row justify-between 2xl:justify-center items-stretch text-cWhite font-ABigDeal gap-8 md:gap-0 2xl:gap-32 pb-8">
            <div class="flex flex-col justify-center items-center gap-2">
                <h1 class="text-5xl lg:text-6xl xl:text-7xl">GET YOUR</h1>
                <h1 class="text-6xl lg:text-7xl xl:text-8xl">TICKET!</h1>
                <a href="/techno-conference/register" class="tc-button-red md:w-full mt-1">Get Ticket!</a>
            </div>
            <div class="bg-cWhite h-2 md:h-auto md:w-2 rounded-full"></div>
            <div class="flex flex-col justify-center items-center gap-2">
                <h1 class="text-6xl lg:text-7xl xl:text-8xl">SHARE</h1>
                <h1 class="text-2xl lg:text-3xl xl:text-4xl">TO YOUR FRIENDS!</h1>
                <div class="flex justify-between items-center md:w-full mt-4 lg:mt-5 xl:mt-6 gap-8 md:gap-0">
                    <div class="flex justify-center items-center relative cursor-pointer"
                        onclick="shareLink('instagram', this)" data-link="https://www.instagram.com/technoscapebncc/">
                        <img src="./assets/techno-conference/share/instagram.svg" alt="instagram" class="tc-share-icon">
                        <span class="tc-share-tooltip" id="instagram-tooltip">Link copied!</span>
                    </div>

                    <div class="flex justify-center items-center relative cursor-pointer"
                        onclick="shareLink('facebook', this)"
                        data-link="https://www.facebook.com/bina.nusantara.computer.club/?locale=id_ID">
                        <img src="./assets/techno-conference/share/facebook.svg" alt="facebook" class="tc-share-icon">
                        <span class="tc-share-tooltip" id="facebook-tooltip">Link copied!</span>
                    </div>

                    <div class="flex justify-center items-center relative cursor-pointer"
                        onclick="shareLink('twitter', this)" data-link="https://twitter.com/bncc_binus?lang=en">
                        <img src="./assets/techno-conference/share/twitter.svg" alt="twitter" class="tc-share-icon">
                        <span class="tc-share-tooltip" id="twitter-tooltip">Link copied!</span>
                    </div>

                    <div class="flex justify-center items-center relative cursor-pointer"
                        onclick="shareLink('linkedin', this)"
                        data-link="https://www.linkedin.com/company/bina-nusantara-computer-club/">
                        <img src="./assets/techno-conference/share/linkedin.svg" alt="linkedin" class="tc-share-icon">
                        <span class="tc-share-tooltip" id="linkedin-tooltip">Link copied!</span>
                    </div>

                </div>
            </div>
        </div>

        <!-- Share Popup -->
        <div id="share-popup"
            class="bg-tcLinearGradientWhiteRed w-full -top-32 fixed flex justify-between items-center gap-12 px-8 sm:px-12 md:px-16 lg:px-20 xl:px-24 py-6 z-50 text-cWhite transition-all">
            <p class="font-YSDarkMedium text-md lg:text-lg xl:text-xl">Link telah tersalin! Bagikan kepada
                teman-temanmu!
            </p>
            <img id="share-x-btn" src="./assets/navbar/icon-x.svg" alt="x-button" class="cursor-pointer w-8">
        </div>


        <!-- Sponsors -->
        <div class="lg:mt-40 md:mt-32 mt-20 text-cWhite">
            <h1 class="font-ABigDeal lg:text-7xl md:text-5xl text-2xl text-center">
                SPONSOR
            </h1>
            @include('layouts.sponsor')
        </div>

        <!-- Media Partners -->
        <div class="lg:mt-40 md:mt-32 mt-20 text-cWhite">
            <h1 class="font-ABigDeal lg:text-7xl md:text-5xl text-2xl text-center">
                MEDIA PARTNER
            </h1>
            @include('layouts.media-partner')
        </div>

        <!-- Contact Us + Footer -->
        <div class="bg-cLinearGradientBg">
            <!-- Contact Us -->
            <div id="join-us"
                class="tc-container flex flex-col justify-center items-center text-cWhite gap-8 lg:gap-16 xl:gap-20 py-24 md:py-32 lg:py-48 xl:py-8 xl:pt-48">
                <div
                    class="flex flex-col justify-center items-start gap-4 w-full border-2 border-[#555555] rounded-2xl lg:rounded-3xl bg-[url('/public/assets/techno-conference/contact-us/contact-bg.png')] bg-[length:100%_100%] bg-no-repeat px-8 lg:px-12 xl:px-16 py-12 lg:py-24 xl:py-32">
                    <h1
                        class="font-ABigDeal leading-relaxed text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl xl:w-3/4">
                        JOIN OUR EVENT!</h1>
                    <div class="flex justify-start items-stretch gap-8 flex-wrap mt-2">
                        <a href="/techno-conference/register">
                            <button class="tc-button-red" onclick="openContactPopup()">Register Here</button>
                        </a>
                        <button class="rounded-full bg-gradient-to-l from-[#E2A5A5] to-[#F93636] transition-all duration-500 text-lg lg:text-2xl xl:text-3xl flex items-center justify-center cursor-pointer font-YSDarkMedium text-center hover:shadow-tcBtnRed p-0.5" onclick="openContactPopup()"><div class="flex justify-center items-center bg-[#050505] rounded-full px-10 lg:px-11 xl:px-12 h-full"><span class="mb-1 bg-gradient-to-l from-[#E2A5A5] to-[#F93636] bg-clip-text text-transparent">Guidebook</div></button>
                    </div>
                </div>
            </div>
            <x-footer />
        </div>


        <!-- Scripts -->
        <script src="{{ asset('js/techno-conference.js') }}?t={{ env('VERSION_TIME') }}"></script>
        <script type="importmap-shim" src="./js/base/esm-maps.json"></script>
        <script type="module-shim">
        import HaloIora from './js/base/tc-halo-iora.js';

        window.HaloIora = HaloIora;

        var iora1 = new HaloIora({alpha:true, antialias:true, container:$("#mascot-1")});

        iora1.setPixelRatio(window.devicePixelRatio);

        window.iora1 = iora1;
    </script>
    </body>
@endsection
