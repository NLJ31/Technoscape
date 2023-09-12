@extends('Template.template')

@section('head')
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/coming-soon.css') }}?t={{ env('VERSION_TIME') }}">
    <link rel="stylesheet" href="{{ asset('css/base/base.css') }}?t={{ env('VERSION_TIME') }}">
    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script async src="https://ga.jspm.io/npm:es-module-shims@1.4.3/dist/es-module-shims.js"></script>
@endsection

@section('body')

    <body class="bg-cBgDark overflow-hidden">

        <!-- Success Popup Message -->
        <div class="sm:text-lg text-base tracking-wide bg-cLinearGradientBlue w-screen sm:px-10 px-5 py-4 font-YSBold text-cWhite fixed top-0 flex justify-between items-center z-10"
            id="msg-success" style="display:none;">
            <span>Email berhasil dikirim! Kami akan memberikan update TechnoScape 2023 kepadamu!</span>
            <button class="btn-close">
                <img class="w-8" src="./assets/coming-soon/btn-close.svg" alt="Close">
            </button>
        </div>

        <!-- Error Popup Message -->
        <div class="sm:text-lg text-base tracking-wide bg-cLinearGradientRed w-screen sm:px-10 px-5 py-4 font-YSBold text-cWhite fixed top-0 flex flex-row justify-between items-center z-10"
            id="msg-error" style="display:none;">
            <div class="w-full text"></div>
            <button class="btn-close">
                <img class="w-8" src="./assets/coming-soon/btn-close.svg" alt="Close">
            </button>
        </div>

        <div class="object body flex flex-row items-center justify-center lg:py-10 md:py-0 min-h-screen overflow-hidden">
            <!--data-value="2"-->

                <div class="flashlight-container absolute hidden lg:block overflow-hidden">
                    <img class="object big-flashlight w-[625px]" src="./assets/coming-soon/big-flashlight.svg"
                        data-value="-2" alt="">
                    <img class="object small-flashlight" src="./assets/coming-soon/small-flashlight.svg" data-value="-2"
                        alt="">
                    <img class="object big-flashlight-blur absolute top-0 left-0 w-[625px]"
                        src="./assets/coming-soon/big-flashlight-blur.svg" data-value="-2" alt="">
                    <img class="object small-flashlight" src="./assets/coming-soon/small-flashlight-blur.svg"
                        data-value="-2" alt="">
                </div>

                <!-- main-container -->
                <div class="w-full xl:w-9/12 lg:w-9/12 md:9/12 flex flex-col items-center lg:flex-row lg:justify-between">

                    <!-- left-wrapper -->
                    <div class="flex flex-col items-center">
                        <div class="relative flashlight-container z-10">
                            <!-- <div id="mascot" class="iora"></div> -->
                            <div id="mascot" class="object iora" data-value="2"></div>
                        </div>
                    </div>

                    <!-- right-wrapper -->
                    <div>
                        <div
                            class="flex flex-col lg:justify-end md:justify-center justify-center lg:items-end md:items-center items-center lg:px-0 lg:mr-0 mr-10">
                            <div
                                class="flex flex-col lg:gap-4 gap-2 -rotate-[22deg] lg:rotate-0 lg:w-[500px] md:w-[400px] w-[300px] lg:h-[275px] md:h-[225px] sm:h-[175px] h-[125px] lg:justify-end lg:items-end overflow-hidden">
                                <img class="lg:w-56 md:w-56 w-36 object lg:pl-0 md:pl-14 sm:pl-4 pl-14 lg:pt-0 pt-5"
                                    data-value="-2" src="./assets/logo/technoscape-logo.svg" alt="TechnoScape 2023">
                                <div
                                    class="font-ABigDeal tracking-wide text-cWhite lg:flex flex-col lg:skew-x-0 -skew-x-6 lg:text-right lg:m-52 m-0 lg:mt-0 lg:mx-0 leading-none">
                                    <div class="relative object lg:mr-0 md:mr-0 sm:mr-0 mr-14" data-value="-2">
                                        <span
                                            class="slide-coming one lg:text-8xl md:text-7xl sm:text-6xl text-4xl">COMING</span>
                                        <span
                                            class="slide-coming two lg:text-8xl md:text-7xl sm:text-6xl text-4xl">COMING</span>
                                        <span
                                            class="slide-coming three lg:text-8xl md:text-7xl sm:text-6xl text-4xl">COMING</span>
                                        <span
                                            class="slide-coming four lg:text-8xl md:text-7xl sm:text-6xl text-4xl">COMING</span>
                                        <span
                                            class="slide-coming five lg:text-8xl md:text-7xl sm:text-6xl text-4xl">COMING</span>
                                    </div>
                                    <div class="relative object lg:mr-0 md:mr-0 sm:mr-0 mr-14" data-value="-2">
                                        <span
                                            class="slide-soon one lg:text-9xl md:text-8xl sm:text-7xl text-5xl">SOON!</span>
                                        <span
                                            class="slide-soon two lg:text-9xl md:text-8xl sm:text-7xl text-5xl">SOON!</span>
                                        <span
                                            class="slide-soon three lg:text-9xl md:text-8xl sm:text-7xl text-5xl">SOON!</span>
                                        <span
                                            class="slide-soon four lg:text-9xl md:text-8xl sm:text-7xl text-5xl">SOON!</span>
                                        <span
                                            class="slide-soon five lg:text-9xl md:text-8xl sm:text-7xl text-5xl">SOON!</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Background (Mobile) -->
                        <div class="w-full relative lg:hidden block">
                            <img src="./assets/coming-soon/bg-top-mobile.svg" alt="bg-top"
                                class="block lg:hidden md:-mt-36 -mt-16 w-full md:w-[768px]">
                            <img src="./assets/coming-soon/bg-bottom-mobile.svg" alt="bg-bottom"
                                class="block lg:hidden md:-mt-24 -mt-12 w-full md:w-[768px]">
                        </div>

                        <!-- Caption-->
                        <div class="font-YSDarkRegular text-cWhite opacity-80 lg:text-lg md:text-base text-sm tracking-wide text-center lg:text-right leading-normal mt-3 object"
                            data-value="-2">
                            Acara Teknologi Terbesar BNCC akan segera kembali!<br>
                            Masukkan email Anda untuk mendapatkan kabar terbaru dari<br class="lg:block hidden">
                            TechnoScape 2023!
                        </div>

                        <!-- Input Form -->
                        <form action="" method="POST"
                            class="flex flex-col md:justify-center items-center md:flex-row mt-5 object" data-value="-2">
                            <input
                                class="md:w-96 md:text-left text-center sm:w-10/12 w-11/12 sm:text-lg text-base font-YSDarkMedium rounded-full sm:h-14 h-10 sm:py-3 py-1 px-8 tracking-wide"
                                id="input-email" name="Email" type="email" placeholder="Masukkan email anda">

                            <div class="relative mt-4 md:mt-0 overflow-hidden sm:ml-5 ml-0 lg:text-xl text-base bg-cLinearGradientBtn md:w-40 w-52 sm:h-14 h-10 rounded-full text-cWhite tracking-wide hover:shadow-bsBtn transition-all ease-in-out duration-300 cursor-pointer font-YSBold"
                                type="">
                                <!-- notify -->
                                <div class="notify-deactive absolute md:w-40 w-52 sm:py-3 py-1 px-4 top-1/2 left-1/2 hover:pt-2 hover:pb-4 transition-all ease-in-out duration-300 text-center"
                                    id="btn-submit">
                                    Notify Me
                                </div>
                                <!-- paper plane -->
                                <img class="paper-plane-deactive sm:w-auto w-10" id="paper-plane"
                                    src="./assets/coming-soon/paper-plane.svg" alt="TechnoScape 2023">
                                <!-- done -->
                                <div class="status-deactive absolute w-36 py-4 px-3 top-1/2 left-1/2 flex flex-row items-center justify-evenly text-center transition-transform ease-in-out duration-300 opacity-0"
                                    id="done">
                                    <img class="sm:w-7 w-5" id="done-icon" src="./assets/coming-soon/done-icon.svg"
                                        alt="Done">
                                    <span>Done</span>
                                </div>
                                <!-- failed -->
                                <div class="status-deactive absolute bg-cLinearGradientRed md:w-40 w-52 py-4 md:px-3 px-8 top-1/2 left-1/2 flex flex-row items-center justify-evenly text-center transition-transform ease-in-out duration-300 opacity-0"
                                    id="failed">
                                    <img class="sm:w-7 w-5" id="failed-icon" src="./assets/coming-soon/failed-icon.svg"
                                        alt="Failed">
                                    <span>Failed</span>
                                </div>
                            </div>
                        </form>

                        <!-- Social Media -->
                        <div class="flex flex-row items-center justify-center lg:gap-7 md:gap-5 gap-3 lg:justify-end mt-5 object"
                            data-value="-2">
                            <a href="https://www.instagram.com/technoscapebncc/" target="_blank"><img
                                    class="lg:w-12 md:w-16 sm:w-10 w-8 hover:-mt-3 rounded-full hover:shadow-bsBtn transition-all ease-in-out duration-300"
                                    src="./assets/coming-soon/icon-instagram.svg" alt="Instagram"></a>
                            <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/mycompany/"
                                target="_blank"><img
                                    class="lg:w-12 md:w-16 sm:w-10 w-8 hover:-mt-3 rounded-full hover:shadow-bsBtn transition-all ease-in-out duration-300"
                                    src="./assets/coming-soon/icon-linkedin.svg" alt="LinkedIn"></a>
                            <a href="https://www.facebook.com/bina.nusantara.computer.club/" target="_blank"><img
                                    class="lg:w-12 md:w-16 sm:w-10 w-8 hover:-mt-3 rounded-full hover:shadow-bsBtn transition-all ease-in-out duration-300"
                                    src="./assets/coming-soon/icon-facebook.svg" alt="Facebook"></a>
                            <a href="https://www.tiktok.com/@technoscape" target="_blank"><img
                                    class="lg:w-12 md:w-16 sm:w-10 w-8 hover:-mt-3 rounded-full hover:shadow-bsBtn transition-all ease-in-out duration-300"
                                    src="./assets/coming-soon/icon-tiktok.svg" alt="TikTok"></a>
                            <a href="https://twitter.com/BNCC_Binus?s=20&t=JgmlGRnHpNmuHIxKIVV-Kg" target="_blank"><img
                                    class="lg:w-12 md:w-16 sm:w-10 w-8 hover:-mt-3 rounded-full hover:shadow-bsBtn transition-all ease-in-out duration-300"
                                    src="./assets/coming-soon/icon-twitter.svg" alt="Twitter"></a>
                        </div>
                    </div>
                </div>
        </div>

        <script src="{{ asset('js/coming-soon.js') }}?t={{ env('VERSION_TIME') }}"></script>

        <script type="importmap-shim" src="{{asset('js/base/esm-maps.json')}}?t={{env('VERSION_TIME')}}"></script>
        <script type="module-shim" >
            import HaloIora from './js/base/halo-iora.js?t={{env('VERSION_TIME')}}';

            window.HaloIora = HaloIora;

            var hero = new HaloIora({alpha:true, antialias:true, container:$("#mascot")});

            hero.setPixelRatio(window.devicePixelRatio);

            window.hero = hero;
        </script>
    </body>
@endsection
