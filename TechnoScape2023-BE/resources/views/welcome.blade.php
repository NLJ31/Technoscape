@extends('Template.template')

@section('head')
    {{-- css --}}
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"/>

    <link
    href="https://unpkg.com/aos@2.3.1/dist/aos.css"
    rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}?t={{ env('VERSION_TIME') }}" />
    <link rel="stylesheet" href="{{ asset('css/homepage/index.css') }}?t={{ env('VERSION_TIME') }}" />
    <link rel="stylesheet" href="{{ asset('css/homepage/home.css') }}?t={{ env('VERSION_TIME') }}" />

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script
            async
            src="https://ga.jspm.io/npm:es-module-shims@1.4.3/dist/es-module-shims.js"
        ></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.3.7/dist/js/splide-extension-auto-scroll.min.js"></script>
@endsection

@section('body')


<body class="bg-cBgDark">
    <x-navbar page="home"/>

        <!-- Hero Page -->
        <section
            class="text-cWhite lg:px-[100px] md:px-20 px-6 flex flex-row justify-center items-center lg:gap-10 gap-0"
        >
            <div class="bg-hero"></div>
            <img
                class="browser-float md:block hidden absolute lg:top-48 md:top-40 lg:left-40 md:left-28 lg:w-24 md:w-14 -rotate-[10deg]"
                src="./assets/home/icon-browser.svg"
                alt=""
            />
            <div
                class="flex flex-col md:items-start items-center lg:gap-10 md:gap-7 gap-5 lg:pt-[350px] md:pt-64 pt-44 lg:pr-0 pr-3"
            >
                <div
                    class="flex md:justify-start justify-center items-center lg:gap-10 gap-5"
                >
                    <img
                        class="lg:w-80 md:w-48 w-28"
                        src="./assets/logo/technoscape-logo.svg"
                        alt=""
                    />
                    <img src="./assets/home/icon-x.svg" alt="" />
                    <p
                        class="lg:text-[32px] md:text-2xl text-[10px] font-YSDarkSemiBold"
                    >
                        [Platinum Sponsor]
                    </p>
                </div>
                <h1
                    class="lg:text-[31px] md:text-xl text-xs font-ABigDeal md:text-left text-center md:w-[70%] w-full"
                >
                    unleash the power of technology through innovative creation
                </h1>
                <div
                    class="lg:text-xl md:text-base text-[10px] bg-cLinearGradientBtn2 bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-4 md:pb-5 py-2 rounded-full text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out z-10"
                >
                    <button id="ask-us-button-1">Let's Talk!</button>
                </div>
            </div>
            <div>
                <img
                    class="md:block hidden absolute lg:top-44 md:top-52 lg:right-48 md:right-24"
                    src="./assets/home/small-liquify.svg"
                    alt=""
                />
                <img
                    class="absolute lg:top-56 md:top-72 top-64 right-0 lg:w-auto md:w-[450px] w-60"
                    src="./assets/home/big-liquify.png"
                    alt=""
                />
                <img
                    class="mic-float md:block hidden absolute lg:top-[720px] md:top-[530px] lg:right-[500px] md:right-80 lg:w-24 w-20"
                    src="./assets/home/icon-mic.svg"
                    alt=""
                />
                <img
                    class="gear-float absolute lg:top-[710px] md:top-[540px] top-96 lg:left-40 md:left-20 left-10 lg:w-44 md:w-32 w-20 z-10"
                    src="./assets/home/icon-gear.svg"
                    alt=""
                />
            </div>
            <div>
                <div
                    id="mascot"
                    class="iora absolute lg:top-[340px] md:top-80 top-72 lg:right-20 right-0"
                ></div>
            </div>
        </section>

        <!-- About -->
        <section
            class="about-container relative w-full h-fit lg:px-[100px] md:px-20 px-6 lg:mt-44 md:mt-28 mt-32 flex flex-col justify-center"
        >
            <div
                class="text-cWhite lg:mt-52 md:mt-36 mt-20 flex flex-col lg:gap-10 gap-3"
            >
                <h1 class="font-ABigDeal lg:text-6xl md:text-4xl text-base">
                    ABOUT TECHNOSCAPE
                </h1>
                <div
                    class="font-YSDarkMedium lg:text-2xl md:text-xl text-xs w-[90%]"
                >
                    <p>
                        Welcome to TechnoScape, the premier technology event of
                        the year. Our mission is to bring together innovators,
                        thought leaders, and tech enthusiasts from around the
                        world to explore the latest trends and advances in the
                        industry.
                    </p>
                    <br />
                    <p>
                        At TechnoScape, we believe that technology has the power
                        to transform the world for the better. Our event
                        showcases cutting-edge technologies and features
                        inspiring talks and workshops led by experts in the
                        field. From AI and robotics to cybersecurity and
                        blockchain, TechnoScape covers a wide range of topics
                        that are shaping the future of the tech industry.
                    </p>
                </div>
            </div>
            <div class="flex items-end lg:mt-24 md:mt-10 mt-5">
                <img
                    class="lg:-ml-10 ml-2 lg:w-[70%] md:w-[65%] w-3/5"
                    src="./assets/home/skew-pic-1.png"
                    alt=""
                />
                <img
                    class="relative lg:w-[50%] w-2/5 lg:-left-40 md:-left-20 -left-8 lg:-bottom-14 -bottom-5"
                    src="./assets/home/skew-pic-2.png"
                    alt=""
                />
            </div>
        </section>

        <!-- Number of Participants -->
        <section class="lg:pt-40 pt-20">
            <div class="flex flex-col text-cWhite items-center lg:gap-16 gap-8">
                <h2 class="font-YSDarkBold lg:text-6xl md:text-3xl text-xs">
                    A Whopping Number of
                </h2>
                <h1
                    class="font-ABigDeal lg:text-9xl md:text-8xl text-5xl lg:mt-0 -mt-3"
                >
                    6.000++
                </h1>
                <h3
                    class="font-YSDarkBold lg:text-4xl md:text-2xl text-[10px] -mt-5"
                >
                    People Participated in TechnoScape from 2019 - 2022!
                </h3>
            </div>
            <div
                class="flex flex-col md:flex-row lg:justify-center md:justify-evenly justify-center w-full lg:px-0 md:px-0 px-5 overflow-hidden"
            >
                <div
                    class="flex flex-col justify-end items-end lg:mt-0 md:mt-0 -mt-5"
                >
                    <img
                        class="lg:w-28 w-20 relative lg:right-0 md:right-3 right-2 lg:top-14 md:top-14 top-20 z-10"
                        src="./assets/home/icon-mic.svg"
                        alt=""
                        data-aos="fade-left" data-aos-delay="250"
                    />
                    <div class="participant-card bg-tcLinearGradient" data-aos="fade-left" data-aos-delay="1000">
                        <h3
                            class="font-ABigDeal lg:text-2xl text-lg xl:w-[350px] lg:w-[200px] md:w-[180px] w-64"
                        >
                            TECHNO CONFERENCE
                        </h3>
                        <p class="font-ABigDeal lg:text-7xl md:text-4xl text-4xl">1000<span class="font-YSDarkMedium lg:text-2xl text-xs ml-3">Participants</span></p>
                    </div>
                </div>
                <div
                    class="flex flex-col justify-end items-end lg:mt-0 lg:-mb-[1px] md:mt-0 -mt-20"
                >
                    <img
                        class="lg:w-40 md:w-32 w-28 relative lg:-right-2 right-0 lg:top-20 md:top-14 top-20 z-10"
                        src="./assets/home/participant-gear.svg"
                        alt=""
                        data-aos="fade-left" data-aos-delay="500"
                    />
                    <div class="participant-card bg-taLinearGradient" data-aos="fade-left" data-aos-delay="1250">
                        <h3
                            class="font-ABigDeal lg:text-2xl text-lg xl:w-[350px] lg:w-[200px] md:w-[180px] w-64"
                        >
                            TECHNO ACADEMY
                        </h3>
                        <p class="font-ABigDeal lg:text-7xl md:text-4xl text-4xl">90<span class="font-YSDarkMedium lg:text-2xl text-xs ml-3">Participants</span></p>
                    </div>
                </div>
                <div
                    class="flex flex-col justify-end items-end lg:mt-0 md:mt-0 -mt-[70px]"
                >
                    <img
                        class="lg:w-36 md:w-24 w-28 relative lg:right-8 md:right-0 right-4 lg:top-14 md:top-10 top-20 lg:rotate-0 md:-rotate-3 rotate-12 z-10"
                        src="./assets/home/icon-browser.svg"
                        alt=""
                        data-aos="fade-left" data-aos-delay="750"
                    />
                    <div class="participant-card bg-hackLinearGradient" data-aos="fade-left" data-aos-delay="1500">
                        <h3
                            class="font-ABigDeal lg:text-2xl text-lg xl:w-[350px] lg:w-[200px] md:w-[180px] w-64"
                        >
                            HACKATHON 6.0
                        </h3>
                        <p class="font-ABigDeal lg:text-7xl md:text-4xl text-4xl">160<span class="font-YSDarkMedium lg:text-2xl text-xs ml-3">Participants</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Promotional Video -->
        <section class="body lg:pt-32 md:pt-36 pt-20">
            <div class="text-cWhite flex flex-col justify-center items-center">
                <h1 class="font-ABigDeal lg:text-7xl md:text-5xl text-2xl">
                    PROMOTIONAL VIDEO
                </h1>
                <iframe
                    class="rounded-xl lg:w-[80%] w-[85%] lg:h-[30rem] md:h-[25rem] h-[12rem] mt-14"
                    src="https://www.youtube.com/embed/KAskJvPQk98"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </div>

            <!-- Timeline -->
            <div
                class="text-cWhite flex flex-col justify-center items-center lg:mt-40 md:mt-32 mt-20"
            >
                <h1 class="font-ABigDeal lg:text-7xl md:text-5xl text-2xl">
                    TIMELINE
                </h1>
                <div
                    class="flex flex-col justify-center items-center lg:gap-24 gap-12 lg:mt-14 mt-6"
                >
                    <div class="menu">
                        <ul
                            class="relative flex lg:gap-16 gap-4 bg-cBlack4 rounded-full font-YSDarkBold lg:text-2xl md:text-xl text-[10px] list-none"
                        >
                            <li
                                class="active lg:p-7 md:p-6 p-3 lg:pt-[22px] md:pt-[19px] pt-[12px] z-10 cursor-pointer rounded-r-full"
                            >
                                <a href="#timeline-technoconference"
                                    >Techno Conference</a
                                >
                            </li>
                            <li
                                class="lg:p-7 md:p-6 p-3 lg:pt-[22px] md:pt-[19px] pt-[12px] px-0 z-10 cursor-pointer"
                            >
                                <a href="#timeline-technoacademy"
                                    >Techno Academy</a
                                >
                            </li>
                            <li
                                class="lg:p-7 md:p-6 p-3 lg:pt-[23px] md:pt-5 pt-[12px] z-10 cursor-pointer rounded-l-full"
                            >
                                <a href="#timeline-hackathon">Hackathon 6.0</a>
                            </li>
                            <li class="button-slide"></li>
                        </ul>
                    </div>
                    <!-- Hackathon Timeline -->
                    <div
                        class="timeline text-cWhite lg:ml-[206px] md:ml-56 ml-[125px]"
                        id="timeline-hackathon"
                    >
                        <div
                            class="border-l-[3px] border-cWhite xl:ml-10 md:ml-6 ml-6 mt-1"
                        >
                            <div class="relative">
                                <div
                                    class="absolute -top-1 md:-left-5 -left-4 bg-cLinearGradientBlue md:w-9 w-7 md:h-9 h-7 rounded-full"
                                ></div>
                                <div
                                    class="absolute lg:-top-[6px] md:-top-1 top-[2px] lg:-left-[330px] md:-left-[275px] -left-36"
                                >
                                    <h2
                                        class="w-full lg:text-3xl md:text-2xl text-xs font-YSDarkBold"
                                    >
                                        Jumat, 21 Juli 2023
                                    </h2>
                                </div>
                                <div class="md:pl-20 pl-10 md:pt-0 pt-[2px]">
                                    <h2
                                        class="w-full md:text-xl text-xs font-YSDarkRegular"
                                    >
                                        Hackathon Day - 1
                                    </h2>
                                </div>
                            </div>
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>
                        <div
                            class="border-l-[3px] border-cWhite xl:ml-10 md:ml-6 ml-6 mt-1"
                        >
                            <div class="relative">
                                <div
                                    class="absolute -top-1 md:-left-5 -left-4 bg-cLinearGradientBlue md:w-9 w-7 md:h-9 h-7 rounded-full"
                                ></div>
                                <div
                                    class="absolute lg:-top-[6px] md:-top-1 top-[2px] lg:-left-[330px] md:-left-[275px] -left-36"
                                >
                                    <h2
                                        class="w-full lg:text-3xl md:text-2xl text-xs font-YSDarkBold"
                                    >
                                        Sabtu, 22 Juli 2023
                                    </h2>
                                </div>
                                <div class="md:pl-20 pl-10 md:pt-0 pt-[2px]">
                                    <h2
                                        class="w-full md:text-xl text-xs font-YSDarkRegular"
                                    >
                                        Hackathon Day - 2
                                    </h2>
                                </div>
                            </div>
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>
                        <div
                            class="border-l-[3px] border-cWhite xl:ml-10 md:ml-6 ml-6 mt-1"
                        >
                            <div class="relative">
                                <div
                                    class="absolute -top-1 md:-left-5 -left-4 bg-cLinearGradientBlue md:w-9 w-7 md:h-9 h-7 rounded-full"
                                ></div>
                                <div
                                    class="absolute lg:-top-[6px] md:-top-1 top-[2px] lg:-left-[357px] md:-left-[295px] -left-[153px]"
                                >
                                    <h2
                                        class="w-full lg:text-3xl md:text-2xl text-xs font-YSDarkBold"
                                    >
                                        Minggu, 23 Juli 2023
                                    </h2>
                                </div>
                                <div class="md:pl-20 pl-10 md:pt-0 pt-[2px]">
                                    <h2
                                        class="w-full md:text-xl text-xs font-YSDarkRegular"
                                    >
                                        Hackathon Day - 3
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Techno Academy Timeline -->
                     <div
                        class="timeline text-cWhite lg:ml-[258px] md:ml-[260px] ml-[157px]"
                        id="timeline-technoacademy"
                    >
                        <div
                            class="border-l-[3px] border-cWhite xl:ml-10 md:ml-6 ml-6 mt-1"
                        >
                            <div class="relative">
                                <div
                                    class="absolute md:-top-1 -top-[1px] md:-left-5 -left-4 bg-cLinearGradientBlue md:w-9 w-7 md:h-9 h-7 rounded-full"
                                ></div>
                                <div
                                    class="absolute lg:-top-[6px] md:-top-1 top-[6px] lg:-left-[335px] md:-left-[278px] -left-36"
                                >
                                    <h2
                                        class="w-full lg:text-3xl md:text-2xl text-xs font-YSDarkBold"
                                    >
                                        Senin, 19 Juni 2023
                                    </h2>
                                </div>
                                <div
                                    class="lg:pl-20 md:pl-16 pl-10 pt-0"
                                >
                                    <h2
                                        class="md:w-full w-4/5 md:text-xl text-xs font-YSDarkRegular"
                                    >
                                        Techno Academy Day - 1
                                    </h2>
                                </div>
                            </div>
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>
                        <div
                            class="border-l-[3px] border-cWhite xl:ml-10 md:ml-6 ml-6 md:mt-1 mt-0"
                        >
                            <div class="relative">
                                <div
                                    class="absolute md:-top-1 -top-[1px] md:-left-5 -left-4 bg-cLinearGradientBlue md:w-9 w-7 md:h-9 h-7 rounded-full"
                                ></div>
                                <div
                                    class="absolute lg:-top-[6px] md:-top-1 top-[6px] lg:-left-[350px] md:-left-[290px] -left-[151px]"
                                >
                                    <h2
                                        class="w-full lg:text-3xl md:text-2xl text-xs font-YSDarkBold"
                                    >
                                        Selasa, 20 Juni 2023
                                    </h2>
                                </div>
                                <div
                                    class="lg:pl-20 md:pl-16 pl-10 pt-0"
                                >
                                    <h2
                                        class="md:w-full w-4/5 md:text-xl text-xs font-YSDarkRegular"
                                    >
                                        Techno Academy Day - 2
                                    </h2>
                                </div>
                            </div>
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>
                        <div
                            class="border-l-[3px] border-cWhite xl:ml-10 md:ml-6 ml-6 md:mt-1 mt-0"
                        >
                            <div class="relative">
                                <div
                                    class="absolute md:-top-1 -top-[1px] md:-left-5 -left-4 bg-cLinearGradientBlue md:w-9 w-7 md:h-9 h-7 rounded-full"
                                ></div>
                                <div
                                    class="absolute lg:-top-[6px] md:-top-1 top-[6px] lg:-left-[328px] md:-left-[270px] -left-[142px]"
                                >
                                    <h2
                                        class="w-full lg:text-3xl md:text-2xl text-xs font-YSDarkBold"
                                    >
                                        Rabu, 21 Juni 2023
                                    </h2>
                                </div>
                                <div
                                    class="lg:pl-20 md:pl-16 pl-10 pt-0"
                                >
                                    <h2
                                        class="md:w-full w-4/5 md:text-xl text-xs font-YSDarkRegular"
                                    >
                                        Techno Academy Day - 3
                                    </h2>
                                </div>
                            </div>
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>
                        <div
                            class="border-l-[3px] border-cWhite xl:ml-10 md:ml-6 ml-6 md:mt-1 mt-0"
                        >
                            <div class="relative">
                                <div
                                    class="absolute md:-top-1 top-[6.2px] md:-left-5 -left-4 bg-cLinearGradientBlue md:w-9 w-7 md:h-9 h-7 rounded-full"
                                ></div>
                                <div
                                    class="absolute lg:-top-[6px] md:-top-1 top-[12px] lg:-left-[345px] md:-left-[282px] -left-[149px]"
                                >
                                    <h2
                                        class="w-full lg:text-3xl md:text-2xl text-xs font-YSDarkBold"
                                    >
                                        Kamis, 22 Juni 2023
                                    </h2>
                                </div>
                                <div
                                    class="lg:pl-20 md:pl-16 pl-10 md:pt-0 pt-[2px]"
                                >
                                    <h2
                                        class="md:w-full w-4/5 md:text-xl text-xs font-YSDarkRegular"
                                    >
                                        Techno Academy Day - 4
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Techno Conference Timeline -->
                    <div
                        class="timeline text-cWhite lg:ml-[275px] md:ml-[277px] ml-[167px]"
                        id="timeline-technoconference"
                    >
                        <div
                            class="border-l-[3px] border-cWhite xl:ml-10 md:ml-6 ml-6 mt-1"
                        >
                            <div class="relative">
                                <div
                                    class="absolute md:-top-1 -top-[1px] md:-left-5 -left-4 bg-cLinearGradientBlue md:w-9 w-7 md:h-9 h-7 rounded-full"
                                ></div>
                                <div
                                    class="absolute lg:-top-[6px] md:-top-1 top-[6px] lg:-left-[331px] md:-left-[277px] -left-36"
                                >
                                    <h2
                                        class="w-full lg:text-3xl md:text-2xl text-xs font-YSDarkBold"
                                    >
                                        Senin, 12 Juni 2023
                                    </h2>
                                </div>
                                <div
                                    class="lg:pl-20 md:pl-16 pl-10 pt-0"
                                >
                                    <h2
                                        class="md:w-full w-4/5 md:text-xl text-xs font-YSDarkRegular"
                                    >
                                        Techno Conference Day - 1
                                    </h2>
                                </div>
                            </div>
                            <br />
                            <br />
                            <br />
                            <br />
                        </div>
                        <div
                            class="border-l-[3px] border-cWhite xl:ml-10 md:ml-6 ml-6 md:mt-1 mt-0"
                        >
                            <div class="relative">
                                <div
                                    class="absolute md:-top-1 top-[6.2px] md:-left-5 -left-4 bg-cLinearGradientBlue md:w-9 w-7 md:h-9 h-7 rounded-full"
                                ></div>
                                <div
                                    class="absolute lg:-top-[6px] md:-top-1 top-[12px] lg:-left-[342px] md:-left-[285px] -left-[149px]"
                                >
                                    <h2
                                        class="w-full lg:text-3xl md:text-2xl text-xs font-YSDarkBold"
                                    >
                                        Selasa, 13 Juni 2023
                                    </h2>
                                </div>
                                <div
                                    class="lg:pl-20 md:pl-16 pl-10 md:pt-0 pt-[2px]"
                                >
                                    <h2
                                        class="md:w-full w-4/5 md:text-xl text-xs font-YSDarkRegular"
                                    >
                                        Techno Conference Day - 2
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Articles -->
            <div
                class="flex flex-col justify-center items-center text-cWhite lg:mt-40 md:mt-32 mt-20"
            >
                <h1 class="font-ABigDeal lg:text-7xl md:text-5xl text-2xl">
                    FEATURED ARTICLES
                </h1>
                <div class="text-cTextBlack mt-10">
                    <div
                        class="flex flex-col md:flex-row justify-center items-center lg:mx-20 md:mx-5 mx-10 lg:gap-0 md:gap-5 gap-0"
                    >
                        <!-- Left -->
                        <div
                            class="lg:w-full md:w-3/5 w-full bg-cBlack2 rounded-3xl p-5"
                        >
                            <img
                                src="./assets/home/article-1.jpg"
                                alt="big-article"
                            />
                            <div
                                class="flex md:flex-row flex-col lg:items-end md:items-center items-start justify-between lg:mt-9 mt-5"
                            >
                                <h3
                                    class="font-YSDarkBold lg:text-xl md:text-xs text-sm md:w-[70%] w-full"
                                >
                                    Artificial Intelligence, Teknologi yang Dapat Mengubah Dunia
                                </h3>
                                <div
                                    class="lg:text-base text-[10px] bg-cLinearGradientBtn2 bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-7 px-4 lg:py-2 md:py-1 py-[6px] lg:pb-3 md:pb-[5px] pb-[8px] md:mt-0 mt-4 rounded-full text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer"
                                >
                                    <a target="_blank" href="https://medium.com/technoscape-bncc/artificial-intelligence-teknologi-yang-dapat-mengubah-dunia-5a89c32651bd">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Right -->
                        <div
                            class="space-y-2 flex flex-col justify-center items-center lg:w-full h-1/3 lg:ml-10 mt-8 lg:mt-0 2xl:ml-14 2xl:space-y-3"
                        >
                            <div
                                class="featured-article flex bg-cBlack2 lg:p-6 p-3 rounded-xl w-fit gap-3 md:gap-5 hover:text-cBlue hover:ease-in-out duration-200"
                            >
                                <img
                                    src="./assets/home/article-2.png"
                                    alt="Article-1"
                                    class="lg:w-40 md:w-32 w-24 2xl:w-44 md:h-auto h-16 lg:rounded-none rounded-md"
                                />
                                <div
                                    class="flex flex-col lg:justify-center md:justify-around justify-center"
                                >
                                    <h4
                                        class="font-YSDarkBold lg:text-lg md:text-xs text-[9px] w-full lg:mb-6 mb-5"
                                    >
                                        Apa itu Cyber Security? <br/> Jenis dan Peran Pentingnya
                                    </h4>
                                    <div
                                        class="lg:text-base text-[10px] bg-cLinearGradientBtn2 bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-7 md:px-4 px-4 lg:py-2 md:py-1 py-[6px] lg:pb-3 md:pb-[5px] pb-[8px] rounded-full text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out lg:w-[140px] md:w-[85px] w-[84px] cursor-pointer"
                                    >
                                        <a target="_blank" href="https://medium.com/technoscape-bncc/apa-itu-cyber-security-jenis-dan-peran-pentingnya-708246a3e432">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="featured-article flex bg-cBlack2 lg:p-6 p-3 rounded-xl w-fit gap-3 md:gap-5 hover:text-cBlue hover:ease-in-out duration-200"
                            >
                                <img
                                src="./assets/home/article-2.png"
                                alt="Article-1"
                                class="lg:w-40 md:w-32 w-24 2xl:w-44 md:h-auto h-16 lg:rounded-none rounded-md"
                                />
                                <div
                                    class="flex flex-col lg:justify-center md:justify-around justify-center"
                                >
                                    <h4
                                        class="font-YSDarkBold lg:text-lg md:text-xs text-[9px] w-full lg:mb-6 mb-5"
                                    >
                                        Apa itu Cyber Security? <br/> Jenis dan Peran Pentingnya
                                    </h4>
                                    <div
                                        class="lg:text-base text-[10px] bg-cLinearGradientBtn2 bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-7 md:px-4 px-4 lg:py-2 md:py-1 py-[6px] lg:pb-3 md:pb-[5px] pb-[8px] rounded-full text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out lg:w-[140px] md:w-[85px] w-[84px] cursor-pointer"
                                    >
                                        <a target="_blank" href="https://medium.com/technoscape-bncc/apa-itu-cyber-security-jenis-dan-peran-pentingnya-708246a3e432">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="featured-article flex bg-cBlack2 lg:p-6 p-3 rounded-xl w-fit gap-3 md:gap-5 hover:text-cBlue hover:ease-in-out duration-200"
                            >
                                <img
                                src="./assets/home/article-2.png"
                                alt="Article-1"
                                class="lg:w-40 md:w-32 w-24 2xl:w-44 md:h-auto h-16 lg:rounded-none rounded-md"
                                />
                                <div
                                    class="flex flex-col lg:justify-center md:justify-around justify-center"
                                >
                                    <h4
                                        class="font-YSDarkBold lg:text-lg md:text-xs text-[9px] w-full lg:mb-6 mb-5"
                                    >
                                        Apa itu Cyber Security? <br/> Jenis dan Peran Pentingnya
                                    </h4>
                                    <div
                                        class="lg:text-base text-[10px] bg-cLinearGradientBtn2 bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-7 md:px-4 px-4 lg:py-2 md:py-1 py-[6px] lg:pb-3 md:pb-[5px] pb-[8px] rounded-full text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out lg:w-[140px] md:w-[85px] w-[84px] cursor-pointer"
                                    >
                                        <a target="_blank" href="https://medium.com/technoscape-bncc/apa-itu-cyber-security-jenis-dan-peran-pentingnya-708246a3e432">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sponsor -->
            <div class="lg:mt-40 md:mt-32 mt-20 text-cWhite">
                <h1
                    class="font-ABigDeal lg:text-7xl md:text-5xl text-2xl text-center"
                >
                    SPONSOR
                </h1>
                @include('layouts.sponsor')
            </div>

            <!-- Media Partner -->
            <div class="lg:mt-40 md:mt-32 mt-20 text-cWhite">
                <h1
                    class="font-ABigDeal lg:text-7xl md:text-5xl text-2xl text-center"
                >
                    MEDIA PARTNER
                </h1>
                @include('layouts.media-partner')
            </div>

            <!-- Ask Us -->
            <div class="lg:mx-12 mx-8 ml-7 lg:mt-32 mt-20 text-cWhite font-YSDarkRegular flex justify-center">
                <div
                class="bg-cLinearGradientBg flex text-left rounded-3xl border-2 border-[#FFFFFF33] overflow-hidden"
            >
                <div class="lg:pt-10 pt-6 lg:pb-0 pb-6 lg:pl-10 pl-4">
                    <h2
                        class="font-ABigDeal leading-tight lg:text-5xl md:text-2xl text-base text-cWhite tracking-wide absolute lg:w-[750px] md:w-96 w-64"
                    >
                        Ready to Expand your Knowledge?
                    </h2>
                    <p
                        class="lg:mt-32 md:mt-20 mt-14 text-cWhite font-YSDarkMedium lg:text-2xl md:text-base text-[10px] tracking-wider lg:w-[460px] md:w-80 w-48"
                    >
                        Masih penasaran? Silahkan hubungi kami!
                    </p>
                    <button class="ask-us-button mt-5" id="ask-us-button-2">Ask Us</button>
                </div>
                <img
                    class="rounded-r-3xl lg:w-auto md:w-80 w-40"
                    src="./assets/home/ask-liquify.png"
                    alt="ask-liquify"
                />
            </div>
            <!-- Ask Us Modal -->
            <div
                class="bg-cBlack/70 w-full h-full fixed top-0 z-30 overflow-y-scroll hidden"
                id="ask-us-modal"
            >
                <div
                class="flex flex-col-reverse lg:flex-row justify-center mx-5 my-12 lg:mx-14"
                >
                    <!-- Left / Bot -->
                    <div
                        class="relative bg-cLinearGradientAsk text-cWhite rounded-b-3xl lg:rounded-br-none lg:rounded-l-3xl px-4 md:px-0 py-4 md:py-6 lg:py-16 flex flex-col items-center mx-auto w-full md:w-11/12 lg:w-7/12 xl:w-5/12 justify-between"
                    >
                        <img
                            src="./assets/logo/technoscape-logo.svg"
                            alt="TechnoScape"
                            class="w-40 md:w-52 lg:w-11/12 xl:w-8/12 mt-4 md:mt-0 md:-mb-10 lg:-mb-0"
                        />
                        <img class="absolute top-52 left-10 w-16 -rotate-12 lg:block hidden" src="./assets/home/icon-browser.svg" alt="">
                        <img class="absolute left-0 bottom-0 rounded-bl-3xl" src="./assets/home/ask-modal-liquify.png" alt="">
                        <img class="lg:mb-12 lg:mt-0 md:mt-12 ml-5 z-10" src="./assets/home/ask-mascot.svg" alt="">
                    </div>
                    <!-- Right / Top -->
                    <div
                        class="bg-[#171717] relative rounded-t-3xl lg:rounded-tl-none lg:rounded-r-3xl pl-8 pr-3 md:pl-16 md:pr-4 lg:pl-12 lg:pr-4 mx-auto w-auto md:w-11/12 xl:w-full"
                    >
                        <button
                            type="button"
                            class="flex absolute md:right-10 right-4 mt-4 md:mt-8"
                            id="close-ask-us-modal"
                        >
                            <img
                                src="./assets/home/icon-x.svg"
                                alt="Close"
                                class="w-6 md:w-10 lg:w-12 xl:w-10 ml-auto md:mr-1"
                            />
                        </button>
                        <h1
                            class="text-[.9rem] md:text-[2rem] lg:text-[3rem] font-YSDarkExtraBold xl:leading-tight md:mt-20 mt-14"
                        >
                            Ada yang bisa kami bantu?
                        </h1>
                        <p class="text-[.4rem] md:text-[.9rem] lg:text-xl">
                            Tulis pesanmu dan kami akan menghubungimu segera!
                        </p>
                        <form
                            class="mt-6"
                            action=""
                            method="POST"
                            enctype="application/x-www-form-urlencoded"
                        >
                            <div class="mb-7 lg:mb-9 xl:mb-5">
                                <label
                                    for="username"
                                    class="block text-xs md:text-lg lg:text-[1.4rem] xl:text-lg font-YSDarkSemiBold"
                                    >Nama Lengkap</label
                                >
                                <input
                                    type="text"
                                    name="name"
                                    id="contact-name"
                                    placeholder="Tuliskan nama lengkap anda..."
                                    class="rounded-3xl w-11/12 py-2 pb-3 md:py-3 md:pb-4 lg:py-4 lg:pb-5 xl:py-3 xl:pb-4 pl-5 mt-2 placeholder:text-xs md:placeholder:text-base bg-[#232323] outline-none border-2 border-cRed border-none"
                                />
                                 <p
                                    id="contact-name-validation"
                                    class="font-YSDarkRegular text-sm lg:text-base text-cRed"
                                ></p>
                            </div>
                            <div class="mb-7 lg:mb-9 xl:mb-5">
                                <label
                                    for="email"
                                    class="block text-xs md:text-lg lg:text-[1.4rem] xl:text-lg font-YSDarkSemiBold"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    name="email"
                                    id="contact-email"
                                    placeholder="Tuliskan email anda..."
                                    class="rounded-3xl w-11/12 py-2 pb-3 md:py-3 md:pb-4 lg:py-4 lg:pb-5 xl:py-3 xl:pb-4 pl-5 mt-2 placeholder:text-xs md:placeholder:text-base bg-[#232323] outline-none border-2 border-cRed border-none"
                                />
                                <p
                                    id="contact-email-validation"
                                    class="font-YSDarkRegular text-sm lg:text-base text-cRed"
                                ></p>
                            </div>
                            <div class="mb-4">
                                <label
                                    for="message"
                                    class="block text-xs md:text-lg lg:text-[1.4rem] xl:text-lg font-YSDarkSemiBold"
                                    >Pesan</label
                                >
                                <textarea
                                    name="message"
                                    id="contact-message"
                                    cols="75"
                                    rows="4"
                                    placeholder="Tuliskan pesan anda..."
                                    class="rounded-3xl w-11/12 py-4 pl-5 mt-2 md:h-40 xl:h-32 placeholder:text-xs md:placeholder:text-base resize-none bg-[#232323] outline-none border-2 border-cRed border-none"
                                ></textarea>
                                <p
                                    id="contact-message-validation"
                                    class="font-YSDarkRegular text-sm lg:text-base text-cRed"
                                ></p>
                            </div>
                            <div
                                id="submit"
                                class="bg-cLinearGradientBtn2 bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 text-cWhite flex items-center justify-center py-1 pb-2 md:px-10 lg:px-12 xl:px-10 rounded-3xl font-YSDarkSemiBold ml-auto mr-10 mb-7 lg:mr-16 w-11/12 md:w-1/6 text-xs md:text-base lg:text-lg cursor-pointer"
                            >
                                Submit
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <x-footer/>

        <script>
            AOS.init();
        </script>
        <script src="{{ asset('js/home.js') }}?t={{ env('VERSION_TIME') }}"></script>
        <script type="importmap-shim" src="/js/base/esm-maps.json"></script>
        <script type="module-shim">
            import HaloIora from './js/base/halo-iora.js';

            window.HaloIora = HaloIora;

            var hero = new HaloIora({alpha:true, antialias:true, container:$("#mascot")});

            hero.setPixelRatio(window.devicePixelRatio);

            window.hero = hero;
        </script>
    </body>

@endsection
