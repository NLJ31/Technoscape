@extends('Template.template')

@section('head')
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/base/base.css') }}?t={{ env('VERSION_TIME') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}?t={{ env('VERSION_TIME') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}?t={{ env('VERSION_TIME') }}">

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endsection

@section('body')
<body class="body">
                 <!-- Side Navbar -->
                 <x-navbar-dashboard page="profile" :user="$user"/>
<!-- Profile -->
<section
class="text-cWhite xl:p-16 lg:p-7 p-5 xl:pl-[335px] lg:pl-[275px] md:pl-32 pl-24"
>
<h1 class="font-ABigDeal lg:text-5xl md:text-3xl text-3xl mt-7">
    Profile
</h1>
<div
    class="grid lg:grid-cols-3 md:grid-cols-2 gap-10 mt-10"
>
    <div
    class="bg-[#1D1D1D] col-span-2 row-span-3 rounded-3xl md:p-7 p-4"

    >
        <div
        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md"
        {{-- class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5" --}}

        >
            <div
            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"


            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-name.svg')}}"
                    alt=""
                />
                <div>
                    <p
                    class="md:text-xl text-sm font-YSDarkSemiBold text-cWhite"

                    >
                        Full Name
                    </p>
                    <p
                        class="md:text-xl text-left text-sm font-YSDarkLight text-cWhite break-words"
                    >
                       {{$user->name}}
                    </p>
                </div>
            </div>
        </div>
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"
        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"

            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-pob.svg')}}"
                    alt=""
                />
                <div>
                    <p
                                    class="md:text-xl text-sm font-YSDarkSemiBold text-cWhite"

                    >
                        Place of Birth
                    </p>
                    <p
                        class="md:text-xl text-left text-sm font-YSDarkLight text-cWhite break-words"
                    >
                       {{$user->place_of_birth}}
                    </p>
                </div>
            </div>
        </div>
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"
        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"

            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-dob.svg')}}"
                    alt=""
                />
                <div>
                    <p
                                    class="md:text-xl text-sm font-YSDarkSemiBold text-cWhite"

                    >
                        Date of Birth
                    </p>
                    <p
                        class="md:text-xl text-left text-sm font-YSDarkLight text-cWhite break-words"
                    >
                    {{$dateText}}
                    </p>
                </div>
            </div>
        </div>
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"
        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"

            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-gender.svg')}}"
                    alt=""
                />
                <div>
                    <p
                                    class="md:text-xl text-sm font-YSDarkSemiBold text-cWhite"

                    >
                        Gender
                    </p>
                    <p
                        class="md:text-xl text-left text-sm font-YSDarkLight text-cWhite break-words"
                    >
                        {{$user->gender}}
                    </p>
                </div>
            </div>
        </div>
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"

        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"

            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-email.svg')}}"
                    alt=""
                />
                <div>
                    <p
                        class="w-fit md:text-xl text-sm font-YSDarkSemiBold text-cWhite"

                    >
                        Email
                    </p>
                    <p
                        class="w-[80%] md:w-full md:text-xl text-left text-sm font-YSDarkLight text-cWhite break-words"
                    >
                        {{$user->email}}
                    </p>
                </div>
            </div>
        </div>
        @if($hackathonTeam)
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"

        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"

            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-status.svg')}}"
                    alt=""
                />
                <div>
                    <p
                                    class="md:text-xl text-sm font-YSDarkSemiBold text-cWhite"

                    >
                        Status
                    </p>
                    <p
                        class="md:text-xl text-left text-sm font-YSDarkLight text-cWhite break-words"
                    >
                        @if($hackathonTeam->is_binusian == "1")
                        Binusian
                        @else
                        Non-Binusian
                        @endif
                    </p>
                </div>
            </div>
        </div>
        @endif
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"

        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"

            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-whatsapp.svg')}}"
                    alt=""
                />
                <div>
                    <p
                                    class="md:text-xl text-sm font-YSDarkSemiBold text-cWhite"

                    >
                        WhatsApp Number
                    </p>
                    <p
                        class="md:text-xl text-left text-sm font-YSDarkLight text-cWhite break-words"
                    >
                       {{$user->whatsapp}}
                    </p>
                </div>
            </div>
        </div>
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"

        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"

            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-line.svg')}}"
                    alt=""
                />
                <div>
                    <p
                                    class="md:text-xl text-sm font-YSDarkSemiBold text-cWhite"

                    >
                        Line ID
                    </p>
                    <p
                        class="md:text-xl text-left text-sm font-YSDarkLight text-cWhite break-words"
                    >
                        {{$user->line_id}}
                    </p>
                </div>
            </div>
        </div>
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"

        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"

            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-company.svg')}}"
                    alt=""
                />
                <div>
                    <p
                                    class="md:text-xl text-sm font-YSDarkSemiBold text-cWhite"

                    >
                        Institution/Company
                    </p>
                    <p
                        class="md:text-xl text-left text-sm font-YSDarkLight text-cWhite break-words"
                    >
                        {{$user->company}}
                    </p>
                </div>
            </div>
        </div>
        @if($hackathonTeam || $taUser)
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"

        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"

            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-cv.svg')}}"
                    alt=""
                />
                <div class="w-full">
                    <p
                                    class="w-fit md:text-xl text-sm font-YSDarkSemiBold text-cWhite"
                    >
                        CV
                    </p>

                    <div class="flex justify-between items-center">
                        <p
                            class="w-[70%] md:text-xl text-sm font-YSDarkLight text-cWhite break-words"
                        >
                        Download CV
                    </p>
                        @if($hackathonTeam)
                        <a href="{{ route('downloadCv', ['filename' => $hackathonUser->cv]) }}">
                            <img
                            class="md:w-11 w-8 md:h-11 h-8 md:mr-5 mr-2"
                            src="{{asset('assets/icon/profile/profile-download.svg')}}"
                            alt=""
                        />
                        </a>
                        @elseif($taUser)
                        <a href="">
                            <img
                            class="md:w-11 w-8 md:h-11 h-8 md:mr-5 mr-2"
                            src="{{asset('assets/icon/profile/profile-download.svg')}}"
                            alt=""
                        />
                        </a>

                        @endif


                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($hackathonTeam || $taUser)
        <div
                        class="w-full bg-cWhite rounded-2xl shadow-cBlack drop-shadow-md mt-5"
        >
            <div
                            class="md:w-[96%] w-[94%] flex items-center md:gap-5 gap-3 bg-cProfileCard rounded-r-2xl md:p-5 p-3 md:pb-6 pb-4 ml-auto shadow-cBlack drop-shadow-md"
            >
                <img
                    class="md:w-11 w-8 md:h-11 h-8 md:ml-2 ml-1"
                    src="{{asset('assets/icon/profile/profile-flazz.svg')}}"
                    alt=""
                />
                <div class="w-full">
                    <p
                                    class="w-fit md:text-xl text-sm font-YSDarkSemiBold text-cWhite"
                    >

                            @if($hackathonTeam && $hackathonTeam->is_binusian == "0")
                                ID Card
                            @elseif($hackathonTeam && $hackathonTeam->is_binusian == "1")
                                Binusian Flazz Card
                            @else
                                Card
                            @endif
                    </p>
                    <div class="flex justify-between items-center">
                        <p
                            class="w-[70%] md:text-xl text-sm font-YSDarkLight text-cWhite break-words"
                        >

                        @if($hackathonTeam)

                            @if($hackathonTeam->is_binusian == "0")
                                Download ID Card
                            </p>
                            @else
                               Download Flazz Card
                            </p>
                                @endif
                                <a href="{{ route('downloadCard', ['filename' => $hackathonUser->id_card]) }}">
                                    <img
                                    class="md:w-11 w-8 md:h-11 h-8 md:mr-5 mr-2"
                                    src="{{asset('assets/icon/profile/profile-download.svg')}}"
                                    alt=""
                                    />
                                </a>

                        @elseif($taUser)
                                Download Card
                           </p>
                            <a href="">
                                <img
                                class="md:w-11 w-8 md:h-11 h-8 md:mr-5 mr-2"
                                src="{{asset('assets/icon/profile/profile-download.svg')}}"
                                alt=""
                                />
                            </a>
                        @endif


                    </div>

                </div>
            </div>
        </div>
        @endif

    </div>

    <!-- CP -->
                <div
                class="bg-cLinearGradientBg border-2 border-[#2F2F2F] rounded-3xl xl:p-7 lg:p-4 p-7 col-span-2 lg:col-span-1"

                >
                    <h3
                    class="xl:text-2xl lg:text-lg md:text-3xl text-xl font-YSDarkSemiBold text-center"

                    >
                        Contact Person
                    </h3>
                    <p
                    class="xl:text-base lg:text-sm md:text-xl text-sm font-YSDarkMedium mt-3 text-center"

                    >
                        Jika ada pertanyaan, jangan sungkan untuk hubungi kami!
                    </p>
                    <div class="flex flex-col gap-10 mt-8">
                        <div class="flex flex-col items-start gap-5">
                            <div class="flex items-center gap-5">
                                <img
                                    class="lg:w-8 lg:h-8 md:w-10 md:h-10 w-8 h-8"
                                    src="{{asset('assets/icon/profile/cp-user.svg')}}"
                                    alt=""
                                />
                                <p>Clement Nathanael</p>
                            </div>
                            <div class="flex items-center gap-5">
                                <img
                                    class="lg:w-8 lg:h-8 md:w-10 md:h-10 w-8 h-8"
                                    src="{{asset('assets/icon/profile/cp-whatsapp.svg')}}"

                                    alt=""
                                />
                                <p>085890808313</p>
                            </div>
                            <div class="flex items-center gap-5">
                                <img
                                    class="lg:w-8 lg:h-8 md:w-10 md:h-10 w-8 h-8"
                                    src="{{asset('assets/icon/profile/cp-line.svg')}}"

                                    alt=""
                                />
                                <p>clementnat</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-start gap-5">
                            <div class="flex items-center gap-5">
                                <img
                                    class="lg:w-8 lg:h-8 md:w-10 md:h-10 w-8 h-8"
                                    src="{{asset('assets/icon/profile/cp-user.svg')}}"

                                    alt=""
                                />
                                <p>Clement Nathanael</p>
                            </div>
                            <div class="flex items-center gap-5">
                                <img
                                    class="lg:w-8 lg:h-8 md:w-10 md:h-10 w-8 h-8"
                                    src="{{asset('assets/icon/profile/cp-whatsapp.svg')}}"
                                    alt=""
                                />
                                <p>085890808313</p>
                            </div>
                            <div class="flex items-center gap-5">
                                <img
                                    class="lg:w-8 lg:h-8 md:w-10 md:h-10 w-8 h-8"
                                    src="{{asset('assets/icon/profile/cp-line.svg')}}"
                                    alt=""
                                />
                                <p>clementnat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{asset('js/profile.js')}}?t={{ env('VERSION_TIME') }}"></script>
</body>
    @endsection
