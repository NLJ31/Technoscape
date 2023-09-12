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

        <x-navbar-dashboard page="task" :user="$user"/>

        <section
            class="text-cWhite xl:p-16 lg:p-7 p-5 xl:pl-[335px] lg:pl-[275px] md:pl-32 pl-24"
        >
            <h1 class="font-ABigDeal xl:text-5xl lg:text-4xl md:text-3xl pt-3">Events</h1>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-10 mt-10">
                <div
                    class="bg-[#1D1D1D] col-span-2 row-span-3 rounded-3xl md:p-7 p-4"
                >

                {{-- Techno Conference  --}}
                    @if($user->tcUser)
                    {{-- PENDING --}}
                        @if ($tcUser->payment_status == "paid")
                        <div
                        class="p-1 bg-gradient-to-r from-cRed3 to-cRed2 rounded-3xl"
                    >
                        <div
                            class="p-[2rem] p-1 pb-0 bg-cLinearGradientBg rounded-3xl"
                        >
                            <!-- isi konten -->
                            <h1
                                class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cRed3 to-cRed2 text-transparent bg-clip-text"
                            >
                                Techno Conference
                            </h1>
                            <!-- reject -->
                            <div
                                class="flex flex-row justify-center item-center gap-3 mt-3"
                            >
                                <img
                                    class="w-6"
                                    src="{{asset('assets/icon/icon-stopwatch.svg')}}"
                                    alt=""
                                />
                                <p
                                    class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text"
                                >
                                    Pending
                                </p>
                            </div>
                            <p
                                class="text-center md:text-[17px] text-[14px] mt-4"
                            >
                                Terima kasih atas pendaftarannya, silakan
                                tunggu proses verifikasinya!
                            </p>
                            <div
                                class="relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:w-[216px] md:w-[200px] w-[150px] mt-[60px] bg-cLinearGradientBtnRed bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-[9px] rounded-3xl text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsRedBtn ease-in-out cursor-pointer flex justify-center items-center"
                            >
                                <a
                                    class="md:text-[16px] text-[12px]"
                                    href="/techno-conference/register"
                                    >View Payment Page</a
                                >
                            </div>
                        </div>
                    </div>

                        @elseif ($tcUser->payment_status == "rejected")
                        <div
                            class="p-1 bg-gradient-to-r from-cRed3 to-cRed2 rounded-3xl"
                        >
                            <div
                                class="p-[2rem] p-1 pb-0 bg-cLinearGradientBg rounded-3xl"
                            >
                                <!-- isi konten -->
                                <h1
                                    class="font-ABigDeal text-2xl bg-gradient-to-r from-cRed3 to-cRed2 text-transparent bg-clip-text"

                                >
                                    Techno Conference
                                </h1>
                                <!-- reject -->
                                <div
                                    class="flex flex-row justify-center item-center gap-3 mt-3"
                                >
                                    <img
                                        class="w-6"
                                        src="{{asset('/assets/icon/icon-x.svg')}}"
                                        alt=""
                                    />
                                    <p
                                        class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cRed3 to-cRed2 text-transparent bg-clip-text"

                                    >
                                        Rejected
                                    </p>
                                </div>
                                  <p class="text-center md:text-[17px] text-[14px] mt-4">
                                    Pendaftaran Anda gagal diverifikasi! Tolong
                                    periksa kembali pendaftaranmu!
                                </p>
                                <div
                                class="relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:w-[216px] md:w-[200px] w-[150px] mt-[60px] bg-cLinearGradientBtnRed bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-[9px] rounded-3xl text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsRedBtn ease-in-out cursor-pointer flex justify-center items-center"
                                >
                                    <a
                                    class="md:text-[16px] text-[12px]"
                                    href="{{route('auth.tc.register')}}">View Payment Page</a>
                                </div>
                            </div>
                        </div>

                        @elseif ($tcUser->payment_status == "accepted")
                        <div
                            class="p-1 bg-gradient-to-r from-cRed3 to-cRed2 rounded-3xl"
                        >
                            <div
                                class="p-[2rem] p-1 pb-3 bg-cLinearGradientBg rounded-3xl"
                            >
                                <!-- isi konten -->
                                <h1
                                    class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cRed3 to-cRed2 text-transparent bg-clip-text"
                                >
                                    Techno Conference
                                </h1>
                                <!-- reject -->
                                <div
                                    class="flex flex-row justify-center item-center gap-3 mt-3"
                                >
                                    <img
                                        class="w-6"
                                        src="{{asset('/assets/icon/icon-check.svg')}}"
                                        alt=""
                                    />
                                    <p
                                        class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cGreen3 to-cGreen2 text-transparent bg-clip-text"
                                    >
                                        Verified
                                    </p>
                                </div>
                                <p
                                    class="text-center md:text-[17px] text-[14px] mt-4"
                                >
                                    Pendaftaran Anda berhasil diverifikasi!
                                    <br />
                                    Jangan lupa untuk bergabung ke dalam grup
                                    Whatsapp.
                                </p>
                                <div
                                    class="relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 md:w-[145px] w-[100px] mt-[50px] bg-cLinearGradientBtnRed bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-[17px] pb-[10px] rounded-3xl text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsRedBtn ease-in-out cursor-pointer flex justify-center items-center"
                                    id="join-group-technoconference"

                                >
                                    <a
                                        class="md:text-[16px] text-[12px]"
                                        href="#"
                                        >Join Group</a
                                    >
                                </div>
                            </div>
                        </div>
                        @endif
                    @endif

                {{-- Techno Academy  --}}
                    @if($user->taUser)
                        @if($taUser->payment_status == "unpaid" )
                            Unpaid
                            <a href="{{ route('dashboard') }}"> View Payment Page </a>
                            <a href="{{ route('dashboard') }}"> View CV </a>
                        @elseif ($taUser->payment_status == "paid")
                        <div
                        class="p-1 bg-gradient-to-r from-cYellow2 to-cYellow3 rounded-3xl mt-10"
                    >
                        <div
                            class="p-[2rem] p-1 bg-cLinearGradientBg rounded-3xl"
                        >
                            <h1
                                class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text"
                            >
                                Techno Academy
                            </h1>
                            <!-- reject -->
                            <div
                                class="flex flex-row justify-center item-center gap-3 mt-3"
                            >
                                <img
                                    class="w-6"
                                    src="{{asset('assets/icon/icon-stopwatch.svg')}}"
                                    alt=""
                                />
                                <p
                                    class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text"
                                >
                                    Pending
                                </p>
                            </div>
                            <p
                            class="text-center md:text-[17px] text-[14px] mt-4"
                            >
                                Terima kasih atas pendaftarannya, silakan
                                tunggu proses verifikasinya!
                            </p>
                            <!-- tombol btn -->
                            <div
                                class="flex md:flex-row flex-col items-center gap-4 justify-center relative md:mt-0 mt-12"
                            >
                                <div
                                    class="relative xl:w-[216px] lg:w-[230px] md:w-[195px] w-[150px] mt-0 md:mt-10 bg-cLinearGradientBtnYellow bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-[9px] rounded-3xl text-cBlack font-YSDarkExtraBold tracking-wide hover:shadow-bsYellowBtn ease-in-out cursor-pointer flex justify-center items-center"
                                >
                                    <a
                                        class="w-full md:text-[16px] text-[12px] flex justify-center items-center"
                                        href="#"
                                        >Download Payment</a
                                    >
                                </div>
                                <div
                                    class="relative mt-0 md:mt-10 overflow-hidden lg:text-xl md:text-[16px] text-[12px] bg-cBlack border-2 border-cYellow md:w-[128px] w-[150px] md:h-12 h-[42px] md:py-3 py-3 rounded-3xl text-cYellow font-YSDarkExtraBold tracking-wide hover:shadow-bsYellowBtn ease-in-out cursor-pointer flex justify-center items-center"
                                >
                                    <a
                                        class="lg:text-[17px] md:text-[16px] text-[12px] font-YSDarkExtraBold absolute xl:w-[128px] w-full px-1 sm:py-2 flex text-center items-center justify-center"
                                        href=""
                                    >
                                        Download CV
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                            @elseif ($taUser->payment_status == "rejected")
                            <div
                            class="p-1 bg-gradient-to-r from-cYellow2 to-cYellow3 rounded-3xl mt-10"
                        >
                            <div
                                class="p-[2rem] p-1 bg-cLinearGradientBg rounded-3xl"
                            >
                                <h1
                                    class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text"
                                >
                                    Techno Academy
                                </h1>
                                <!-- reject -->
                                <div
                                    class="flex flex-row justify-center item-center gap-3 mt-3"
                                >
                                    <img
                                        class="w-6"
                                        src="{{asset('/assets/icon/icon-x.svg')}}"
                                        alt=""
                                    />
                                    <p
                                        class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cRed3 to-cRed2 text-transparent bg-clip-text"
                                    >
                                        Rejected
                                    </p>
                                </div>
                                <p
                                    class="text-center md:text-[17px] text-[14px] mt-4"
                                >
                                    Pendaftaran Anda gagal diverifikasi! Tolong
                                    periksa kembali pendaftaranmu!
                                </p>
                                <!-- tombol btn -->
                                <div
                                    class="flex md:flex-row flex-col items-center gap-4 justify-center relative md:mt-0 mt-12"
                                >
                                    <div
                                        class="relative xl:w-[216px] lg:w-[230px] md:w-[195px] w-[150px] mt-0 md:mt-10 bg-cLinearGradientBtnYellow bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-[9px] rounded-3xl text-cBlack font-YSDarkExtraBold tracking-wide hover:shadow-bsYellowBtn ease-in-out cursor-pointer flex justify-center items-center"
                                    >
                                        <a
                                            class="w-full md:text-[16px] text-[12px] flex justify-center items-center"
                                            href="#"
                                            >View Payment Page</a
                                        >
                                    </div>
                                    <div
                                        class="relative mt-0 md:mt-10 overflow-hidden lg:text-xl md:text-[16px] text-[12px] bg-cBlack border-2 border-cYellow md:w-[128px] w-[150px] md:h-12 h-[42px] md:py-3 py-3 rounded-3xl text-cYellow font-YSDarkExtraBold tracking-wide hover:shadow-bsYellowBtn ease-in-out cursor-pointer flex justify-center items-center"
                                    >
                                        <a
                                            class="lg:text-[17px] md:text-[16px] text-[12px] font-YSDarkExtraBold absolute xl:w-[128px] w-full px-1 sm:py-2 flex text-center items-center justify-center"
                                            href=""
                                        >
                                            Download CV
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @elseif ($taUser->payment_status == "accepted")
                            <div
                            class="p-1 bg-gradient-to-r from-cYellow2 to-cYellow3 rounded-3xl mt-10"
                        >
                            <div
                                class="p-[2rem] p-1 bg-cLinearGradientBg rounded-3xl"
                            >
                                <h1
                                    class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text"
                                >
                                    Techno Academy
                                </h1>
                                <!-- reject -->
                                <div
                                    class="flex flex-row justify-center item-center gap-3 mt-3"
                                >
                                    <img
                                        class="w-6"
                                        src="{{asset('/assets/icon/icon-check.svg')}}"
                                        alt=""
                                    />
                                    <p
                                        class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cGreen3 to-cGreen2 text-transparent bg-clip-text"
                                    >
                                        Verified
                                    </p>
                                </div>
                                <p
                                    class="text-center md:text-[17px] text-[14px] mt-4"
                                >
                                    Pendaftaran Anda berhasil diverifikasi!
                                    <br />
                                    Jangan lupa untuk bergabung ke dalam grup
                                    Whatsapp.
                                </p>
                                <!-- tombol btn -->
                                <div
                                    class="flex md:flex-row flex-col items-center gap-4 justify-center relative md:mt-0 mt-12"
                                >
                                    <div
                                        class="relative md:w-[145px] w-[100px] mt-0 md:mt-10 bg-cLinearGradientBtnYellow bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-[9px] rounded-3xl text-cBlack font-YSDarkExtraBold tracking-wide hover:shadow-bsYellowBtn ease-in-out cursor-pointer flex justify-center items-center"
                                        id="join-group-technoacademy"
                                    >
                                        <a
                                            class="w-full md:text-[16px] text-[12px] flex justify-center items-center"
                                            href="#"
                                            >Join Group</a
                                        >
                                    </div>
                                    <div
                                        class="relative mt-0 md:mt-10 overflow-hidden lg:text-xl md:text-[16px] text-[12px] bg-cBlack border-2 border-cYellow md:w-[128px] w-[150px] md:h-12 h-[42px] md:py-3 py-3 rounded-3xl text-cYellow font-YSDarkExtraBold tracking-wide hover:shadow-bsYellowBtn ease-in-out cursor-pointer flex justify-center items-center"
                                    >
                                        <a
                                            class="lg:text-[17px] md:text-[16px] text-[12px] font-YSDarkExtraBold absolute xl:w-[128px] w-full px-1 sm:py-2 flex text-center items-center justify-center"
                                            href="./assets/logo/favicon.png"
                                            download
                                        >
                                            Download CV
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endif

                {{-- Hackathon  --}}
                    @if($user->hackathonUser)
                        @if($hackathonTeam->payment_status == "unpaid" )
                        <div
                        class="p-1 bg-gradient-to-r from-cBlue2 to-cBlue3 rounded-3xl mt-10"
                    >
                        <div
                            class="p-[2rem] p-1 bg-cLinearGradientBg rounded-3xl"
                        >
                            <h1
                                class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cBlue2 to-cBlue3 text-transparent bg-clip-text"
                            >
                                Hackathon 6.0
                            </h1>
                            <!-- reject -->
                            <div
                                class="flex flex-row justify-center item-center gap-3 mt-3"
                            >
                                <img
                                    class="w-6"
                                    src="{{asset('assets/icon/icon-stopwatch.svg')}}"

                                    alt=""
                                />
                                <p
                                    class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text"
                                >
                                    Pending
                                </p>
                            </div>
                            <p
                                class="text-center md:text-[17px] text-[14px] mt-4"
                            >
                                Terima kasih atas pendaftarannya, silakan
                                tunggu proses verifikasinya!
                            </p>
                            <!-- tombol btn -->
                            <div
                                class="flex md:flex-row flex-col items-center gap-4 justify-center relative md:mt-0 mt-12"
                            >
                                <div
                                    class="relative xl:w-[216px] lg:w-[230px] md:w-[195px] w-[150px] mt-0 md:mt-10 bg-cLinearGradientBtnBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-[9px] rounded-3xl text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer flex justify-center items-center"
                                >
                                    <a
                                        class="w-full md:text-[16px] text-[12px] flex justify-center items-center"
                                        href="{{ route('downloadReceipt', ['filename' => $hackathonTeam->payment_receipt]) }}"
                                        >Download Payment</a
                                    >
                                </div>
                                <div
                                    class="relative mt-0 md:mt-10 overflow-hidden lg:text-xl md:text-[16px] text-[12px] bg-cBlack border-2 border-cBlue2 md:w-[128px] w-[150px] md:h-12 h-[42px] py-3 rounded-3xl text-cBlue2 font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer flex justify-center items-center"
                                >
                                    <a
                                        class="lg:text-[17px] md:text-[16px] text-[12px] font-YSDarkExtraBold absolute xl:w-[128px] w-full px-1 sm:py-2 flex text-center items-center justify-center"
                                        href="{{ route('downloadCv',['filename' => $user->hackathonUser->cv])}}"
                                    >
                                        Download CV
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                        @elseif ($hackathonTeam->payment_status == "pending")
                        <div
                        class="p-1 bg-gradient-to-r from-cBlue2 to-cBlue3 rounded-3xl mt-10"
                    >
                        <div
                            class="p-[2rem] p-1 bg-cLinearGradientBg rounded-3xl"
                        >
                            <h1
                                class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cBlue2 to-cBlue3 text-transparent bg-clip-text"
                            >
                                Hackathon 6.0
                            </h1>
                            <!-- reject -->
                            <div
                                class="flex flex-row justify-center item-center gap-3 mt-3"
                            >
                                <img
                                    class="w-6"
                                    src="{{asset('assets/icon/icon-stopwatch.svg')}}"

                                    alt=""
                                />
                                <p
                                    class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cYellow2 to-cYellow3 text-transparent bg-clip-text"
                                >
                                    Pending
                                </p>
                            </div>
                            <p
                                class="text-center md:text-[17px] text-[14px] mt-4"
                            >
                                Terima kasih atas pendaftarannya, silakan
                                tunggu proses verifikasinya!
                            </p>
                            <!-- tombol btn -->
                            <div
                                class="flex md:flex-row flex-col items-center gap-4 justify-center relative md:mt-0 mt-12"
                            >
                                <div
                                    class="relative xl:w-[216px] lg:w-[230px] md:w-[195px] w-[150px] mt-0 md:mt-10 bg-cLinearGradientBtnBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-[9px] rounded-3xl text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer flex justify-center items-center"
                                >
                                    <a
                                        class="w-full md:text-[16px] text-[12px] flex justify-center items-center"
                                        href="{{ route('downloadReceipt', ['filename' => $hackathonTeam->payment_receipt]) }}"
                                        >Download Payment</a
                                    >
                                </div>
                                <div
                                    class="relative mt-0 md:mt-10 overflow-hidden lg:text-xl md:text-[16px] text-[12px] bg-cBlack border-2 border-cBlue2 md:w-[128px] w-[150px] md:h-12 h-[42px] py-3 rounded-3xl text-cBlue2 font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer flex justify-center items-center"
                                >
                                    <a
                                        class="lg:text-[17px] md:text-[16px] text-[12px] font-YSDarkExtraBold absolute xl:w-[128px] w-full px-1 sm:py-2 flex text-center items-center justify-center"
                                        href="{{ route('downloadCv',['filename' => $user->hackathonUser->cv])}}"
                                    >
                                        Download CV
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                            @elseif ($hackathonTeam->payment_status == "rejected")
                            <div
                            class="p-1 bg-gradient-to-r from-cBlue2 to-cBlue3 rounded-3xl mt-10"
                        >
                            <div
                                class="p-[2rem] p-1 bg-cLinearGradientBg rounded-3xl"
                            >
                                <h1
                                    class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cBlue2 to-cBlue3 text-transparent bg-clip-text"
                                >
                                    Hackathon 6.0
                                </h1>
                                <!-- reject -->
                                <div
                                    class="flex flex-row justify-center item-center gap-3 mt-3"
                                >
                                    <img
                                        class="w-6"
                                        src="{{asset('/assets/icon/icon-x.svg')}}"
                                        alt=""
                                    />
                                    <p
                                        class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cRed3 to-cRed2 text-transparent bg-clip-text"
                                    >
                                        Rejected
                                    </p>
                                </div>
                                <p
                                    class="text-center md:text-[17px] text-[14px] mt-4"
                                >
                                    Pendaftaran Anda gagal diverifikasi! Tolong
                                    periksa kembali pendaftaranmu!
                                </p>
                                <!-- tombol btn -->
                                <div
                                    class="flex md:flex-row flex-col items-center gap-4 justify-center relative md:mt-0 mt-12"
                                >
                                    <div
                                        class="relative xl:w-[216px] lg:w-[230px] md:w-[195px] w-[150px] mt-0 md:mt-10 bg-cLinearGradientBtnBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-[9px] rounded-3xl text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer flex justify-center items-center"
                                    >
                                        <a
                                            class="w-full md:text-[16px] text-[12px] flex justify-center items-center"
                                            href="{{route('hackathonTeamPayment')}}"
                                            >View Payment Page</a
                                        >
                                    </div>
                                    <div
                                        class="relative mt-0 md:mt-10 overflow-hidden lg:text-xl md:text-[16px] text-[12px] bg-cBlack border-2 border-cBlue2 md:w-[128px] w-[150px] md:h-12 h-[42px] py-3 rounded-3xl text-cBlue2 font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer flex justify-center items-center"
                                    >
                                        <a
                                            class="lg:text-[17px] md:text-[16px] text-[12px] font-YSDarkExtraBold absolute xl:w-[128px] w-full px-1 sm:py-2 flex text-center items-center justify-center"
                                            href="{{ route('downloadCv',['filename' => $user->hackathonUser->cv])}}"
                                        >
                                            Download CV
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                            @elseif ($hackathonTeam->payment_status == "accepted")
                            <div
                            class="p-1 bg-gradient-to-r from-cBlue2 to-cBlue3 rounded-3xl mt-10"
                        >
                            <div
                                class="p-[2rem] p-1 bg-cLinearGradientBg rounded-3xl"
                            >
                                <h1
                                    class="font-ABigDeal md:text-2xl text-[18px] bg-gradient-to-r from-cBlue2 to-cBlue3 text-transparent bg-clip-text"
                                >
                                    Hackathon 6.0
                                </h1>
                                <!-- reject -->
                                <div
                                    class="flex flex-row justify-center item-center gap-3 mt-3"
                                >
                                    <img
                                        class="w-6"
                                        src="{{asset('/assets/icon/icon-check.svg')}}"
                                        alt=""
                                    />
                                    <p
                                        class="font-YSDarkBold md:text-xl text-[17px] bg-gradient-to-r from-cGreen3 to-cGreen2 text-transparent bg-clip-text"
                                    >
                                        Verified
                                    </p>
                                </div>
                                <p
                                    class="text-center md:text-[17px] text-[14px] mt-4"
                                >
                                    Pendaftaran Anda berhasil diverifikasi!
                                    <br />
                                    Jangan lupa untuk bergabung ke dalam grup
                                    Whatsapp.
                                </p>
                                <!-- tombol btn -->
                                <div
                                    class="flex md:flex-row flex-col items-center gap-4 justify-center relative md:mt-0 mt-12"
                                >
                                    <div
                                        class="relative md:w-[145px] w-[100px] mt-0 md:mt-10 bg-cLinearGradientBtnBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 lg:px-8 md:px-6 px-4 md:py-3 py-2 md:pb-4 pb-[9px] rounded-3xl text-cWhite font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer flex justify-center items-center"
                                        id="join-group-hackathon"
                                    >
                                        <a
                                            class="w-full md:text-[16px] text-[12px] flex justify-center items-center"
                                            href="#"
                                            >Join Group</a
                                        >
                                    </div>
                                    <div
                                        class="relative mt-0 md:mt-10 overflow-hidden lg:text-xl md:text-[16px] text-[12px] bg-cBlack border-2 border-cBlue2 md:w-[128px] w-[150px] md:h-12 h-[42px] py-3 rounded-3xl text-cBlue2 font-YSDarkExtraBold tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer flex justify-center items-center"
                                    >
                                        <a
                                            class="lg:text-[17px] md:text-[16px] text-[12px] font-YSDarkExtraBold absolute xl:w-[128px] w-full px-1 sm:py-2 flex text-center items-center justify-center"
                                            href="{{ route('downloadCv',['filename' => $user->hackathonUser->cv])}}"
                                        >
                                            Download CV
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endif

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
                <!--Tasks Verified Join Group-->
                <!-- TC -->
                <div class="hidden absolute" id="popup-technoconference">
                    <div
                        class="fixed w-screen h-screen top-0 left-0 bg-cBlack bg-opacity-70 z-50 blur"
                    ></div>
                    <div
                        class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 xl:w-[800px] md:w-[550px] w-[250px] xl:h-[650px] md:h-[600px] h-[380px] bg-[#1D1D1D] rounded-3xl z-50"
                    >
                        <div
                            class="absolute md:right-5 right-3 md:top-5 top-4 cursor-pointer font-YSDarkLight"
                            id="popup-close-tc"
                        >
                            <img src="{{asset('assets/icon/icon-red-x.svg')}}" alt="">
                        </div>
                        <h1
                            class="mt-16 text-center xl:text-4xl md:text-4xl text-sm font-YSDarkBold text-cWhite"
                        >
                            Join our WhatsApp group
                        </h1>
                        <p
                            class="mt-5 text-center xl:text-lg md:text-lg text-[10px] text-cWhite"
                        >
                            You have to join <b>this</b> group!
                        </p>
                        <div class="menu-tc">
                                <ul
                                    class="flex justify-center xl:w-3/5 md:w-[90%] w-[90%] rounded-full xl:mt-10 md:mt-10 mt-7 xl:ml-40 md:ml-8 ml-3 bg-[#2B2B2B] shadow-cBlack drop-shadow-xl"
                                >
                                    <li
                                        class="active md:px-8 px-4 md:py-4 md:pb-[22px] py-2 pb-3 xl:text-2xl md:text-2xl text-[11px] font-YSDarkSemiBold cursor-pointer rounded-3xl z-10"
                                    >
                                        <a href="#tc-group-a">Group A</a>
                                    </li>
                                    {{-- <li
                                        class="md:px-8 px-4 md:py-4 md:pb-[22px] py-2 pb-3 xl:text-2xl md:text-2xl text-[11px] font-YSDarkSemiBold cursor-pointer z-10"
                                    >
                                        <a href="#tc-group-b">Group A</a>
                                    </li> --}}
                                    {{-- <li
                                        class="md:px-8 px-[15px] md:py-4 md:pb-[22px] py-2 pb-3 xl:text-2xl md:text-2xl text-[11px] font-YSDarkSemiBold cursor-pointer z-10"
                                    >
                                        <a href="#tc-group-c">Group C</a> --}}
                                    </li>
                                    {{-- <li class="button-slide"></li> --}}
                                </ul>
                        </div>
                        <center>
                            <div class="tc-join-group" id="tc-group-a">
                                <img
                                src="{{asset('assets/qr-code/qr-tc-groupa.jpg')}}"
                                    class="w-[30%] mt-8"
                                    alt=""
                                    style="border-radius: 10px"
                                />
                            </div>
                            {{-- <div class="tc-join-group" id="tc-group-b">
                                <img
                                src="{{asset('assets/qr-code/dummy-qr.png')}}"
                                    class="w-[30%] mt-8"
                                    alt=""
                                />
                            </div>
                            <div class="tc-join-group" id="tc-group-c">
                                <img
                                src="{{asset('assets/qr-code/dummy-qr.png')}}"
                                    class="w-[30%] mt-8"
                                    alt=""
                                />
                            </div> --}}
                        </center>
                        <h1
                            class="text-center mt-2 xl:text-2xl md:text-2xl text-xs font-YSDarkBold bg-cLinearGradientGreen text-transparent bg-clip-text"
                        >
                            Available
                        </h1>
                        <p
                            class="xl:text-2xl md:text-2xl text-xs text-center text-cWhite font-YSDarkLight mt-5"
                        >
                            or
                            <a target="_blank" href="https://bit.ly/TS_TechnoConferenceI" class="text-[#93B7FF] underline"
                                >click here</a
                            >
                        </p>
                    </div>
                </div>

                <!-- TA -->
                <div class="hidden absolute" id="popup-technoacademy">
                    <div
                        class="fixed w-screen h-screen top-0 left-0 bg-cBlack bg-opacity-70 z-50 blur"
                    ></div>
                    <div
                        class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 xl:w-[800px] md:w-[550px] w-[250px] xl:h-[650px] md:h-[600px] h-[380px] bg-[#1D1D1D] rounded-3xl z-50"
                    >
                        <div
                            class="absolute md:right-5 right-3 md:top-5 top-4 cursor-pointer font-YSDarkLight"
                            id="popup-close-ta"
                        >
                        <img src="{{asset('assets/icon/icon-red-x.svg')}}" alt="">

                        </div>
                        <h1
                            class="mt-16 text-center xl:text-4xl md:text-4xl text-sm font-YSDarkBold text-cWhite"
                        >
                            Join our WhatsApp group
                        </h1>
                        <p
                            class="mt-5 text-center xl:text-lg md:text-lg text-[10px] text-cWhite"
                        >
                            You only have to join <b>one</b> group!
                        </p>
                        <div class="menu-ta">
                            <ul
                                class="flex justify-between xl:w-3/5 md:w-[90%] w-[90%] rounded-full xl:mt-10 md:mt-10 mt-7 xl:ml-40 md:ml-8 ml-3 bg-[#2B2B2B] shadow-cBlack drop-shadow-xl"
                            >
                                <li
                                    class="active md:px-8 px-4 md:py-4 md:pb-[22px] py-2 pb-3 xl:text-2xl md:text-2xl text-[11px] font-YSDarkSemiBold cursor-pointer rounded-3xl z-10"
                                >
                                    <a href="#ta-group-a">Group A</a>
                                </li>
                                <li
                                    class="md:px-8 px-4 md:py-4 md:pb-[22px] py-2 pb-3 xl:text-2xl md:text-2xl text-[11px] font-YSDarkSemiBold cursor-pointer z-10"
                                >
                                    <a href="#ta-group-b">Group B</a>
                                </li>
                                <li
                                    class="md:px-8 px-[15px] md:py-4 md:pb-[22px] py-2 pb-3 xl:text-2xl md:text-2xl text-[11px] font-YSDarkSemiBold cursor-pointer z-10"
                                >
                                    <a href="#ta-group-c">Group C</a>
                                </li>
                                <li class="button-slide"></li>
                            </ul>
                        </div>
                        <center>
                            <div class="ta-join-group" id="ta-group-a">
                                <img
                                src="{{asset('assets/qr-code/dummy-qr.png')}}"
                                    class="w-[30%] mt-8"
                                    alt=""
                                />
                            </div>
                            <div class="ta-join-group" id="ta-group-b">
                                <img
                                src="{{asset('assets/qr-code/dummy-qr.png')}}"
                                    class="w-[30%] mt-8"
                                    alt=""
                                />
                            </div>
                            <div class="ta-join-group" id="ta-group-c">
                                <img
                                src="{{asset('assets/qr-code/dummy-qr.png')}}"
                                    class="w-[30%] mt-8"
                                    alt=""
                                />
                            </div>
                        </center>
                        <h1
                            class="text-center mt-2 xl:text-2xl md:text-2xl text-xs font-YSDarkBold bg-cLinearGradientGreen text-transparent bg-clip-text"
                        >
                            Available
                        </h1>
                        <p
                            class="xl:text-2xl md:text-2xl text-xs text-center text-cWhite font-YSDarkLight mt-5"
                        >
                            or
                            <a href="#" class="text-[#93B7FF] underline"
                                >click here</a
                            >
                        </p>
                    </div>
                </div>

                <!-- Hackathon -->
                <div class="hidden absolute" id="popup-hackathon">
                    <div
                        class="fixed w-screen h-screen top-0 left-0 bg-cBlack bg-opacity-70 z-50 blur"
                    ></div>
                    <div
                        class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 xl:w-[800px] md:w-[550px] w-[250px] xl:h-[650px] md:h-[600px] h-[380px] bg-[#1D1D1D] rounded-3xl z-50"
                    >
                        <div
                            class="absolute md:right-5 right-3 md:top-5 top-4 cursor-pointer font-YSDarkLight"
                            id="popup-close-hackathon"
                        >
                        <img src="{{asset('assets/icon/icon-red-x.svg')}}" alt="">

                        </div>
                        <h1
                            class="mt-16 text-center xl:text-4xl md:text-4xl text-sm font-YSDarkBold text-cWhite"
                        >
                            Join our WhatsApp group
                        </h1>
                        <p
                            class="mt-5 text-center xl:text-lg md:text-lg text-[10px] text-cWhite"
                        >
                            You only have to join <b>one</b> group!
                        </p>
                        <div class="menu-hackathon">
                            <ul
                                class="flex justify-between xl:w-3/5 md:w-[90%] w-[90%] rounded-full xl:mt-10 md:mt-10 mt-7 xl:ml-40 md:ml-8 ml-3 bg-[#2B2B2B] shadow-cBlack drop-shadow-xl"
                            >
                                <li
                                    class="active md:px-8 px-4 md:py-4 md:pb-[22px] py-2 pb-3 xl:text-2xl md:text-2xl text-[11px] font-YSDarkSemiBold cursor-pointer rounded-3xl z-10"
                                >
                                    <a href="#hackathon-group-a">Group A</a>
                                </li>
                                <li
                                    class="md:px-8 px-4 md:py-4 md:pb-[22px] py-2 pb-3 xl:text-2xl md:text-2xl text-[11px] font-YSDarkSemiBold cursor-pointer z-10"
                                >
                                    <a href="#hackathon-group-b">Group B</a>
                                </li>
                                <li
                                    class="md:px-8 px-[15px] md:py-4 md:pb-[22px] py-2 pb-3 xl:text-2xl md:text-2xl text-[11px] font-YSDarkSemiBold cursor-pointer z-10"
                                >
                                    <a href="#hackathon-group-c">Group C</a>
                                </li>
                                <li class="button-slide"></li>
                            </ul>
                        </div>
                        <center>
                            <div class="hackathon-join-group" id="hackathon-group-a">
                                <img
                                src="{{asset('assets/qr-code/dummy-qr.png')}}"
                                    class="w-[30%] mt-8"
                                    alt=""
                                />
                            </div>
                            <div class="hackathon-join-group" id="hackathon-group-b">
                                <img
                                src="{{asset('assets/qr-code/dummy-qr.png')}}"
                                    class="w-[30%] mt-8"
                                    alt=""
                                />
                            </div>
                            <div class="hackathon-join-group" id="hackathon-group-c">
                                <img
                                src="{{asset('assets/qr-code/dummy-qr.png')}}"
                                    class="w-[30%] mt-8"
                                    alt=""
                                />
                            </div>
                        </center>
                        <h1
                            class="text-center mt-2 xl:text-2xl md:text-2xl text-xs font-YSDarkBold bg-cLinearGradientGreen text-transparent bg-clip-text"
                        >
                            Available
                        </h1>
                        <p
                            class="xl:text-2xl md:text-2xl text-xs text-center text-cWhite font-YSDarkLight mt-5"
                        >
                            or
                            <a href="#" class="text-[#93B7FF] underline"
                                >click here</a
                            >
                        </p>
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
