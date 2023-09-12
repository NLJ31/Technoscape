@extends('Template.template')

@section('head')
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tc/tc-registration.css') }}?t={{ env('VERSION_TIME') }}" />

    <!-- javascript -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script async src="https://ga.jspm.io/npm:es-module-shims@1.4.3/dist/es-module-shims.js"></script>
@endsection

@section('body')

    <body class="bg-cLinearGradientBg text-cWhite body">
        <section>
            <div class="flex flex-col items-center justify-center min-h-screen px-4 sm:px-0">
                <div class="lg:w-52 sm:w-48 w-28 flex justify-center">
                    <a href="/">
                        <img src="{{ asset('assets/logo/technoscape-logo.svg') }}" alt="TechnoScape 2023" />
                    </a>
                </div>

                <div>
                    <div class="shadow bg-cLinearGradientUpcommingtask text-transparent bg-clip-text font-ABigDeal lg:text-5xl sm:text-[2.5rem]  text-xl text-center lg:leading-[4rem] sm:leading-[3rem] my-3 mb-8 sm:my-4">
                        Techno Conference <br> <span class="text-cWhite shadow-white">TICKETS</span>
                    </div>
                </div>

                <!-- card-start -->
                <form action="{{ route('auth.tc.user') }}" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <div
                        class="border-2 border-cRed sm:mx-auto bg-cBgwhite flex flex-col items-center justify-center md:px-14 px-4 lg:w-[60rem] lg:h-[28rem] sm:w-[36rem] sm:h-[34rem] h-[28rem] md:rounded-2.5rem rounded-3xl drop-shadow-md form-card lg:py-2 md:py-0">
                        @php
                            if ($payment_status == 'paid') {
                                $isHidden = 'hidden';
                            } else {
                                $isHidden = '';
                            }
                        @endphp

                        <!-- step1-start -->
                        <div class="form-card flex {{ $isHidden }} flex-col items-center justify-center lg:w-2/3 py-6"
                            data-form='1'>
                            <!-- progress bar -->
                            <div class="flex items-center lg:mb-14">
                                <div>
                                    <div
                                        class="bg-cLinearGradientRed font-bold rounded-full sm:py-3 sm:px-5 py-2 px-4 sm:text-xl text-xs">
                                        Step 1</div>
                                </div>
                                <div>
                                    <div class="bg-cWhite sm:w-64 w-28 h-1 -z-10"></div>
                                </div>
                                <div>
                                    <div class="bg-cWhite rounded-full p-2"></div>
                                </div>
                            </div>
                            <!-- progress bar end -->

                            <div class="sm:text-2xl whitespace-nowrap text-lg lg:my-0 lg:mb-8  my-5">Persyaratan
                                Tiket Gratis</div>
                            <div class=" rounded-3xl w-full flex flex-col items-center lg:my-5 my-8">
                                <ul
                                    class="list-disc list-outside tracking-wide font-PJSMedium text-cInpGray sm:pl-10 pl-7  opacity-60 lg:text-base sm:text-lg text-[10px]">
                                    <li class="sm:mb-6 mb-3 ">Follow Instagram @technoscapebncc dan @bnccbinus.</li>
                                    <li class="sm:mb-6 mb-3 ">Berikan bukti dengan cara screenshot akun instagram @technoscapebnc dan @bnccbinus yang telah kamu follow!</li>
                                </ul>
                            </div>

                            <div class="flex justify-center lg:mt-4">
                                <div class="cursor-pointer z-0 mr-5 md:mr-8 border-2 border-cRed flex items-center lg:my-0 my-8  rounded-2xl shadow-md md:px-10 px-8 py-1 md:font-PJSBold font-PJSLight tracking-wide back-form"
                                    data-form='1'>
                                    <div class="z-50 md:text-lg text-sm ">
                                    <a href="/task">
                                            Back
                                        </a>
                                        </div>
                                </div>

                                <div class="cursor-pointer bg-cLinearGradientRed flex items-center lg:my-0 my-8 text-white md:text-lg rounded-2xl shadow-md md:px-10 px-9  text-sm text-cWhite md:font-PJSBold font-PJSLight tracking-wide next-form"
                                    data-form='1'>
                                    Next
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        @php
                            if ($payment_status == 'paid' || $payment_status == 'rejected' || $payment_status == null) {
                                $isHidden = 'hidden';
                            } else {
                                $isHidden = '';
                            }
                        @endphp
                        <!-- step2-start -->
                        <div class="form-card {{ $isHidden }} flex flex-col items-center justify-around h-fit w-2/3"
                            data-form='2'>
                            <!-- progress bar -->
                            <div class="flex  items-center relative">
                                <div>
                                    <div class="bg-cLinearGradientRed rounded-full p-2 text-xl"></div>
                                </div>
                                <div>
                                    <div class="bg-cLinearGradientRed sm:w-64 w-28 h-1 -z-10 "></div>
                                </div>
                                <div>
                                    <div
                                        class="bg-cLinearGradientRed font-bold rounded-full sm:py-3 sm:px-5 py-2 px-4 sm:text-xl text-xs whitespace-nowrap">
                                        Step 2</div>
                                </div>
                            </div>
                            <!-- progress bar end -->
                            <div class="sm:text-2xl whitespace-nowrap text-lg lg:my-6 sm:mb-14 lg:mt-10 sm:mt-6  my-5">Bukti
                                Partisipasi</div>
                            <div id="drag-drop"
                                class="w-56 sm:w-96 lg:w-full border-2 border-cRed border-dashed rounded-2xl flex flex-col justify-center items-center py-5">
                                <div id="input-wrap" class="flex flex-col justify-center items-center relative w-full">
                                    <div class="text-[10px] sm:text-lg opacity-100"><span class="opacity-70">File harus
                                            dalam format</span> .pdf <span class="opacity-70">atau</span>.zip</div>
                                    <img class="sm:w-16 w-12 my-4" src="{{asset('assets/tc-registration/UploadFile.svg')}}"
                                        alt="">
                                    <input
                                        class="opacity-0  lg:-top-8 md:-top-14 -top-0 lg:w-[34rem] lg:h-[12rem] w-52 h-28 rounded-xl p-3 font-PJSLight text-cInpGray absolute z-50"
                                        type="file" name="input-proof" id="payment" required
                                        accept="image/jpeg, image/jpg,image/png,application/pdf">
                                    <div class="text-[10px] sm:text-base text-cRed">Klik atau drag & drop filemu di sini.
                                    </div>
                                </div>

                                <div class="inputed-wrapper h-[70%] flex flex-col justify-center items-center py-10 hidden">
                                    <div
                                        class="flex items-center justify-around  lg:w-80 sm:w-64 py-4 h-20 w-48 bg-cWhite rounded-xl mx-auto">
                                        <p
                                            class="sm:text-lg text-xs file-name text-cRed lg:w-[90%] w-[80%] whitespace-nowrap overflow-hidden text-ellipsis">
                                            File name</p>
                                        <img src="{{asset('assets/tc-registration/RemoveFIle.svg')}}" class="remove-file w-3"></img>
                                    </div>
                                </div>

                            </div>
                            <div class="flex justify-center sm:mt-6">
                                <div class="cursor-pointer z-0 mr-5 md:mr-8 border-2 border-cRed flex items-center lg:my-0 my-8  md:rounded-2xl rounded-2xl shadow-md md:px-10 px-8 py-1  md:font-PJSBold font-PJSLight tracking-wide back-form"
                                    data-form='2'>
                                    <div class="z-50 md:text-lg text-sm ">
                                        Back
                                    </div>
                                </div>

                                <button type="submit"
                                    class=" cursor-pointer btn-submit bg-cLinearGradientRed flex items-center lg:my-0 my-8 text-white md:text-lg md:rounded-2xl rounded-2xl shadow-md md:px-8 px-6 text-sm text-cWhite md:font-PJSBold font-PJSLight tracking-wide next-form"
                                    data-form="2">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <!-- end -->

                        @php
                            if ($payment_status == 'paid') {
                                $isHidden = '';
                            } else {
                                $isHidden = 'hidden';
                            }
                        @endphp
                        <!-- step3-start -->
                        <div class="form-card {{ $isHidden }} flex flex-col items-center justify-around lg:w-2/3"
                            data-form='3'>
                            <img class="sm:w-20 w-16 lg:mb-0 lg:mt-6 mb-10" src="{{asset('assets/tc-registration/done-regist.svg')}}"
                                alt="">
                            <div class="text-sm sm:text-3xl lg:text-4xl font-bold my-5">Terima kasih atas partisipasimu!
                            </div>
                            <div
                                class="text-[8px] sm:text-base lg:text-2xl sm:my-5 text-center opacity-80 tracking-widest sm:w-[75%] w-[80%]">
                                Pendaftaranmu telah diterima dan saat ini sedang diproses.</div>


                            <a href="{{ route('task') }}"
                                class="cursor-pointer cursor-pointer border-color bg-cLinearGradientRed2 flex items-center mt-16 sm:mt-24 lg:mt-4  rounded-3xl shadow-md sm:px-16 px-8 py-2 sm:py-3 tracking-wide">
                                <div class="z-50 sm:text-xl text-[10px]">
                                    Go to User Dashboard
                                </div>
                            </a>
                        </div>
                        <!-- end -->
                    </div>


                </form>
                <!--card-end -->
            </div>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
        <script src="{{ asset('js/tc-registration.js') }}?t={{ env('VERSION_TIME') }}"></script>
    </body>
@endsection
