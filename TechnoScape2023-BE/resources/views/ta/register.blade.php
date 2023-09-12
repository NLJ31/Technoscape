@extends('Template.template')

@section('head')
    <!-- css -->
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css" />
    <link rel="stylesheet" href="{{ asset('css/tc/tc-registration.css') }}" />

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script async src="https://ga.jspm.io/npm:es-module-shims@1.4.3/dist/es-module-shims.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="{{ asset('js/tc-registration.js') }}"></script>
@endsection

@section('body')

    <body>
        <div class="text-cWhite relative">
            <div class="flex flex-col items-center justify-center min-h-screen relative bg-cLinearGradientBg">
                <!-- main-container -->
                <div class="w-full overflow-hidden">
                    <!-- content left -->
                    <div
                        class="z-40 lg:w-4/12 lg:h-screen w-screen lg:fixed left-0 lg:pb-44 py-5 flex flex-col items-center justify-around bg-cLinearGradientRed2 lg:rounded-bl-none lg:rounded-r-[2.5rem] rounded-b-[2.5rem] top-0">
                        <div class="lg:w-56 w-48 flex justify-center">
                            <a href="http://technoscape.id/"><img src="{{ asset('assets/logo/tswhite.png') }}"
                                    alt="TechnoScape 2023" /></a>
                        </div>
                        <div id="model" class="xl:h-96 lg:h-72 w-full h-36"></div>
                    </div>
                    <!-- content right -->
                    <div
                        class="content-right bg-cBgwhite overflow-hidden flex flex-col justify-center items-center lg:mt-0 mt-20 lg:mb-0 mb-44">
                        <div
                            class="lg:text-5xl md:text-5xl sm:text-4xl text-3xl font-ABigDeal lg:text-left text-center lg:my-4 my-7 tracking-wider">
                            Techno Conference <br />
                            Ticket
                        </div>
                        <form action="{{ route('auth.tc.user') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-container flex flex-col items-center md:w-[40rem] sm:w-[33rem] lg:h-[34rem] min-h-[34rem] rounded-[2.5rem] form-card mb-5"
                                data-form="1">
                                <!-- steps -->
                                <div class="steps-container w-11/12 sm:text-base text-sm mx-auto bg-cLinearGradientRed2 rounded-xl flex flex-row justify-center mt-7 h-12 overflow-hidden mb-10"
                                    style="border: 1px solid transparent">
                                    <div class="step w-4/12 flex justify-center items-center relative z-30 current">
                                        <div class="absolute z-30 text">
                                            Step 1
                                        </div>
                                    </div>
                                    <div class="step w-4/12 flex justify-center items-center relative z-20">
                                        <div class="absolute z-30 text">
                                            Step 2
                                        </div>
                                        <div class="white-cover w-full bg-[#FAFAFF] absolute z-0 h-full left-0"></div>
                                    </div>
                                    <div class="step w-4/12 flex justify-center items-center relative z-10">
                                        <div class="absolute z-30 text">
                                            Step 3
                                        </div>
                                        <div class="white-cover w-full bg-[#FAFAFF] absolute z-0 h-full left-0"></div>
                                    </div>
                                </div>
                                <div class="main-wrapper w-full relative">
                                    <!-- Event Pass -->
                                    <div
                                        class="absolute wrapper-section event-pass sm:w-10/12 w-11/12 transform left-1/2 -translate-x-1/2">

                                        @if ($errors->has('info-regist'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('info-regist') }}
                                            </div>
                                        @endif



                                        <div class="font-YSDarkSemiBold text-xl -mt-4 mb-7 text-left">
                                            Pilih jenis tiketmu!
                                        </div>
                                        <!-- free -->
                                        <div
                                            class="ticket-container free-ticket-container border-2 border-cWhite rounded-2xl flex flex-row items-center w-full h-28 mb-5 cursor-pointer">
                                            <div class="w-4/12 sm:px-5 px-3 text-center">
                                                <div class="sm:text-xl text-lg font-YSDarkBold mb-2">
                                                    Early Bird
                                                </div>
                                                <div class="font-YSDarkSemiBold sm:text-base text-sm mb-10">
                                                    GRATIS
                                                </div>
                                                <input type="radio" id="ticket-free" name="ticket" value="early"
                                                    checked="" />
                                                <span class="checkmark-free"></span>
                                            </div>
                                            <div style="width: 1px" class="h-full bg-cWhite"></div>
                                            <div class="w-8/12 sm:px-5 px-3 font-YSDarkMedium sm:text-base text-sm">
                                                <div class="mb-1">
                                                    All Event Pass
                                                </div>
                                                <div class="font-YSDarkBold mb-1">
                                                    Periode Pendaftaran:
                                                </div>
                                                <div class="mb-1">
                                                    May 21 - 23, 2022
                                                </div>
                                            </div>
                                        </div>
                                        <!-- pay -->
                                        <div
                                            class="ticket-container paid-ticket-container border-2 border-cWhite rounded-2xl flex flex-row items-center w-full h-28 cursor-pointer">
                                            <div class="w-4/12 sm:px-5 px-3 text-center">
                                                <div class="sm:text-xl text-lg font-YSDarkBold mb-2">
                                                    General
                                                </div>
                                                <div class="font-YSDarkSemiBold sm:text-base text-sm mb-10">
                                                    Rp 30.000
                                                </div>
                                                <input type="radio" id="ticket-paid" name="ticket" value="general"
                                                    checked="" />
                                                <span class="checkmark-pay"></span>
                                            </div>
                                            <div style="width: 1px" class="h-full bg-cWhite"></div>
                                            <div class="w-8/12 sm:px-5 px-3 font-YSDarkSemiBold sm:text-base text-sm">
                                                <div class="mb-1">
                                                    All Event Pass
                                                </div>
                                                <div class="font-YSDarkBold mb-1">
                                                    Periode Pendaftaran:
                                                </div>
                                                <div class="mb-1">
                                                    May 21 - 23, 2022
                                                </div>
                                            </div>
                                        </div>
                                        <!-- next button -->
                                        <div
                                            class="next-btn checkout-btn cursor-pointer bg-cLinearGradientRed2 lg:text-xl text-lg text-cWhite font-YSDarkSemiBold w-36 text-center mx-auto lg:py-3 lg:pb-4 py-2 pb-3 rounded-xl hover:shadow-bsBtnTC duration-300 transition ease-in-out hover:shadow-lg mt-16">
                                            Checkout
                                        </div>
                                    </div>
                                    <!-- requirement -->
                                    <div
                                        class="lg:absolute relative wrapper-section requirements w-10/12 transform left-1/2 -translate-x-1/2 hidden">
                                        <!-- free -->
                                        <div class="free-title font-YSDarkSemiBold text-xl mb-5 text-center hidden">
                                            Free Ticket Requirement
                                        </div>
                                        <!-- pay -->
                                        <div class="paid-title font-YSDarkSemiBold text-xl mb-5 text-left">
                                            Informasi Pembayaran
                                        </div>
                                        <div class="relative">
                                            <!-- free -->
                                            <ul style="
                                                    list-style-position: inside;
                                                "
                                                class="free-requirements list-disc lg:h-52 w-full overflow-x-clip lg:overflow-y-scroll hidden">
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Follow Instagram
                                                    @technoscapebncc and
                                                    @bnccbinus.
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Subscribe YouTube Bina
                                                    Nusantara Computer Club.
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Diperlukan partisipasi di
                                                    challenge TechnoScape
                                                    Twibbon 2021. Harap melihat
                                                    post Instagram
                                                    @technoscapebncc tentang
                                                    TechnoScape Twibbon
                                                    Challenge 2021 untuk
                                                    informasi lebih lanjut.
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Peserta mengunggah file
                                                    bukti dengan batas maksimum
                                                    5 MB dalam bentuk .JPG,
                                                    .JPEG, .PNG, atau .PDF
                                                    melalui button di bawah.
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Calon peserta yang telah
                                                    mengupload bukti akan
                                                    memiliki status Pending dan
                                                    akan diverifikasi oleh
                                                    panitia dalam rentang waktu
                                                    24 jam. Apabila calon
                                                    peserta belum diverifikasi
                                                    dalam rentang waktu
                                                    tersebut, calon peserta
                                                    dapat menghubungi panitia
                                                    melalui Contact Person.
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Pendaftar yang telah
                                                    terverifikasi akan secara
                                                    resmi terdaftar sebagai
                                                    peserta Virtual Conference.
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Setelah terverifikasi,
                                                    peserta dapat melihat link
                                                    Zoom Virtual Conference di
                                                    Dashboard - Schedule (link
                                                    zoom akan keluar saat H-1
                                                    Virtual Conference).
                                                </li>
                                            </ul>
                                            <!-- pay -->
                                            <ul style="
                                                    list-style-position: inside;
                                                "
                                                class="paid-requirements list-disc lg:h-72 w-full overflow-x-clip lg:overflow-y-scroll">
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Periode Pembayaran : 19 Mei
                                                    hingga 02 Juni 2022 Pukul
                                                    23.59 WIB
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Lakukan pembayaran biaya
                                                    pendaftaran melalui QR code
                                                    atau ke nomor rekening
                                                    berikut:
                                                </li>
                                                <div class="flex sm:flex-row flex-col gap-5 items-center ml-3 mb-3">
                                                    <div class="flex flex-col items-center border-tc p-5">
                                                        <img class="w-36"
                                                            src="./assets/vc-registrations/requirements-qr-payment.svg"
                                                            alt="" />
                                                        <div class="font-YSDarkSemiBold">
                                                            Scan for Account
                                                            Code
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex-col flex justify-around h-full sm:text-left text-center">
                                                        <div class="text-xl font-YSDarkSemiBold mb-3">
                                                            Bank Central Asia
                                                            (BCA)
                                                        </div>
                                                        <div class="mb-3">
                                                            Account Number
                                                        </div>
                                                        <div class="font-YSDarkSemiBold mb-3">
                                                            5215169771
                                                        </div>
                                                        <div class="mb-3">
                                                            Account's Holder
                                                            Name
                                                        </div>
                                                        <div class="font-YSDarkSemiBold mb-3">
                                                            BERTRAND
                                                        </div>
                                                    </div>
                                                </div>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Peserta mengunggah file
                                                    bukti pembayaran dengan
                                                    batas maksimum 5 mb dalam
                                                    bentuk .JPG, .JPEG, .PNG,
                                                    atau .PDF.
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Calon peserta yang telah
                                                    mengupload bukti pembayaran
                                                    akan memiliki status pending
                                                    dan akan diverifikasi oleh
                                                    panitia dalam rentang waktu
                                                    24 jam. Apabila calon
                                                    peserta belum diverifikasi
                                                    dalam rentang waktu
                                                    tersebut, calon peserta
                                                    dapat menghubungi panitia
                                                    melalui contact person.
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Pendaftar yang telah
                                                    diverifikasi secara resmi
                                                    telah terdaftar sebagai
                                                    peserta Virtual Conference.
                                                </li>
                                                <li style="
                                                        text-indent: -20px;
                                                        padding-left: 20px;
                                                    "
                                                    class="pr-3 mb-3 text-sm">
                                                    Setelah itu, peserta dapat
                                                    melihat link Zoom Virtual
                                                    Conference di Dashboard -
                                                    Schedule pada H-1 Virtual
                                                    Conference.
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- next button -->
                                        <div
                                            class="button-wrapper flex w-full justify-around items-center sm:flex-row flex-col sm:mt-7 mt-10 lg:mb-0 mb-10">
                                            <div
                                                class="prev-btn cursor-pointer border-tc rounded-xl sm:text-xl text-lg font-YSDarkSemiBold sm:w-36 min-w-36 w-8/12 text-center mx-auto sm:mb-0 mb-3 lg:py-2 lg:pb-3 py-1 pb-2 hover:shadow-bsBtnTC duration-300 transition ease-in-out hover:shadow-lg">
                                                <span>Back</span>
                                            </div>
                                            <div
                                                class="next-btn cursor-pointer bg-cLinearGradientRed2 sm:text-xl text-lg text-cWhite font-YSDarkSemiBold sm:w-36 min-w-36 w-8/12 text-center mx-auto lg:py-2 lg:pb-3 py-1 pb-2 rounded-xl hover:shadow-bsBtnTC duration-300 transition ease-in-out hover:shadow-lg">
                                                Next
                                            </div>
                                        </div>
                                    </div>
                                    <!-- proof -->
                                    <div
                                        class="lg:absolute relative wrapper-section proof w-10/12 transform left-1/2 -translate-x-1/2 hidden">
                                        <div class="font-YSDarkSemiBold text-xl mb-5 text-center">
                                            Participation Proof
                                        </div>
                                        <div class="w-full h-72 rounded-lg py-3"
                                            style="
                                                border: 1px solid
                                                    rgba(128, 128, 128, 0.3);
                                            ">
                                            <div class="input-wrapper h-full flex flex-col justify-around items-center">
                                                <div class="font-YSDarkSemiBold text-2xl">
                                                    Upload your file
                                                </div>
                                                <div class="font-YSDarkSemiBold text-sm">
                                                    File should be in .PDF
                                                    format
                                                </div>
                                                <img class="w-16" src="./assets/vc-registrations/proof-file-icon.svg"
                                                    alt="" />
                                                <div
                                                    class="cursor-pointer border-tc sm:text-lg text-base font-YSDarkSemiBold w-36 text-center mx-auto lg:py-2 lg:pb-3 py-1 pb-2 hover:shadow-bsVCColored duration-300 transition ease-in-out hover:shadow-lg">
                                                    <span>Choose File</span>
                                                    <input type="file"
                                                        class="absolute top-0 left-1/2 translate-x-[-50%] cursor-pointer w-36 opacity-0"
                                                        style="
                                                            height: 46px;
                                                            cursor: pointer;
                                                        "
                                                        id="input-proof" accept="application/pdf, image/*"
                                                        name="input-proof" />>
                                                </div>
                                                <div class="font-YSDarkSemiBold text-xs">
                                                    or drag & drop your file
                                                    here
                                                </div>
                                            </div>
                                            <div
                                                class="inputed-wrapper h-5/6 flex flex-col justify-center items-center hidden">
                                                <div class="font-YSDarkSemiBold text-2xl mb-10">
                                                    File has been uploaded.
                                                </div>
                                                <div
                                                    class="flex items-center justify-around w-64 h-24 shadow-bsVCMain rounded-xl mx-auto">
                                                    <div class="font-YSDarkSemiBold text-lg file-name max-w-[200px] overflow-hidden"
                                                        style="
                                                            color: rgba(
                                                                103,
                                                                103,
                                                                103,
                                                                0.6
                                                            );
                                                        ">
                                                        File name
                                                    </div>
                                                    <img class="remove-file cursor-pointer w-5"
                                                        src="./assets/vc-registrations/close-icon.svg" />
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="button-wrapper flex w-full justify-around items-center sm:flex-row flex-col sm:mt-7 mt-10 lg:mb-0 mb-10">
                                            <div
                                                class="prev-btn cursor-pointer border-tc sm:text-xl text-lg font-YSDarkSemiBold sm:w-36 min-w-36 w-8/12 text-center mx-auto sm:mb-0 mb-3 lg:py-2 lg:pb-3 py-1 pb-2 hover:shadow-bsBtnTC duration-300 transition ease-in-out hover:shadow-lg">
                                                <span>Back</span>
                                            </div>
                                            <div
                                                class="next-btn submit-btn cursor-pointer bg-cLinearGradientRed2 sm:text-xl text-lg text-cWhite font-YSDarkSemiBold sm:w-36 min-w-36 w-8/12 text-center mx-auto lg:py-2 lg:pb-3 py-1 pb-2 rounded-xl hover:shadow-bsBtnTC duration-300 transition ease-in-out hover:shadow-lg">
                                                Next
                                            </div>
                                        </div>
                                    </div>
                                    <!-- thank you -->
                                    <div
                                        class="absolute wrapper-section thank-you w-10/12 transform left-1/2 -translate-x-1/2 flex flex-col items-center hidden">
                                        <div class="sm:text-3xl text-xl font-YSDarkBold text-center mb-4">
                                            Terima kasih atas partisipasimu!
                                        </div>
                                        <div class="sm:text-lg text-sm text-center">
                                            Pendaftaranmu telah diterima dan
                                            saat<br />ini sedang diproses!
                                        </div>
                                        <img class="sm:w-64 w-52" src="./assets/vc-registrations/thankyou-hourglass.svg"
                                            alt="" />
                                        <div
                                            class="border-tc cursor-pointer sm:text-xl text-base font-YSDarkSemiBold sm:w-68 w-10/12 text-center mx-auto sm:mb-0 mb-3 lg:py-2 lg:pb-3 py-1 pb-2 hover:shadow-bsVCColored duration-300 transition ease-in-out hover:shadow-lg">
                                            <span>Go to User Dashboard</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="importmap-shim" src="./js/base/esm-maps.json"></script>
        <script type="module-shim">
            import Iora from './js/base/Iora.js';
            window.Iora = Iora;

            var iora = new Iora({alpha:true, antialias:true, container:$("#model")});
            iora.setPixelRatio(window.devicePixelRatio);
            window.iora = iora;

            iora.camera.position.set(0, -200, 110);

            iora.scene.addEventListener("iora_loaded", () => {
                $("body").unbind()
                var model = iora.scene.getObjectByName("iora")
                var deg = 0;
                model.children[0].rotation.set(0, deg * Math.PI / 180, 0);
            })
        </script>
    </body>
@endsection
