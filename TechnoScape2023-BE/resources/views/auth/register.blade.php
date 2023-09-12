@extends('Template.template')

@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape 2023</title>
    <link rel="shortcut icon" href="{{ asset('assets/logo/favicon.png') }}" type="image/x-icon">
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/base/base.css') }}?t={{ env('VERSION_TIME') }}">
    <link rel="stylesheet" href="./css/base/build.css">
    <link rel="stylesheet" href="{{ asset('css/ts/Sign-Up.css') }}?t={{ env('VERSION_TIME') }}">
    <link rel="stylesheet" href="{{ asset('css/ts/Login.css') }}?t={{ env('VERSION_TIME') }}">
    {{-- js --}}
    <script src="{{ asset('js/Sign-Up.js') }}?t={{ env('VERSION_TIME') }}" defer></script>

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js" defer></script>
@endsection

@section('body')

    <body class="bg-cBgDark flex flex-col justify-center items-center gap-3 min-h-screen overflow-x-hidden bg-[url('/public/assets/techno-conference/hero/hero-bg.png')] bg-[length:100%_auto]">
        <!-- Logo technoscape -->
        <div class="flex justify-center items-center w-full mt-4">
            <a href="/">
                <img src="{{ asset('assets/logo/technoscape-logo.svg') }}" width="150px" height="34.23px"
                    alt="logo technoscape">
            </a>
        </div>
        <!-- Form Container -->
        <form method="POST" action="{{ route('register') }}"
            class="flex flex-col items-center justify-center bg-cBlack2 w-11/12 rounded-3xl py-2 sm:py-4 lg:py-2 shadow-bsSignUp mb-8 px-4 md:px-20 xl:py-1 max-width"
            onsubmit="return checkFormStep3()">
            @csrf
            <span class="font-YSDarkExtraBold text-cWhite text-3xl sm:text-4xl lg:text-3xl">Sign Up</span>
            <!-- Step 1 -->
            <div class="hidden tab w-full">
                <div class="flex flex-col justify-center items-center gap-0 mt-3 sm:mt-5 lg:mt-3 xl:mt-3 w-full">
                    <img src="{{ asset('assets/ts/Progress Bar.svg') }}" alt="Progress Bar" class="w-2/3">
                    <!-- Input Group Container -->
                    @error('name', 'email', 'password', 'line_id', 'whatsapp', 'place_of_birth', 'date_of_birth', 'gender',
                        'company')
                        <label for="name" class="font-YSDarkExtraBold text-cWhite">{{ $message }}</label>
                    @enderror
                    <div class="self-start mt-4 flex flex-col gap-0  md:gap-2 justify-center items-start w-full">
                        <div class="flex flex-col gap-0 w-full">
                            <label for="NamaLengkap" class="font-YSDarkExtraBold text-cWhite">Nama Lengkap</label>
                            <input type="text" id="namaLengkap" name="name" value="{{ old('name') }}"
                                class="original rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide focus:border-2 my-2"
                                placeholder="">
                            <span class="font-error hidden" style="color: red" id="nameRequired">Name Field is Required</span>
                        </div>
                        <div class="flex flex-col gap-0 w-full">
                            <label for="tempatLahir" class="font-YSDarkExtraBold text-cWhite mt-1">Tempat Lahir</label>
                            <input type="text" id="tempatLahir" name="place_of_birth" value="{{ old('place_of_birth') }}"
                            class="original my-2 rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide focus:border-2">
                            <span class="font-error hidden" style="color: red" id="tempatRequired">Place of Birth Field is Required</span>
                        </div>
                        <div class="flex flex-col gap-0 w-full">
                            <label for="tanggalLahir" class="font-YSDarkExtraBold text-cWhite mt-1">Tanggal Lahir</label>
                            <input type="date" id="tanggalLahir" name="date_of_birth" value="{{ old('date_of_birth') }}"
                            class="original my-2 rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide focus:border-2"
                            oninput="validateDate()" max="9999-12-31">
                            <span class="font-error hidden" style="color: red" id="dateRequired">Date of Birth Field is Required</span>
                            <span class="font-error hidden" style="color: red" id="dateIncorrect">You must be atleast 17 years old </span>
                        </div>
                        <div class="flex flex-col gap=0 w-full">
                            <label for="radioButton" class="font-YSDarkExtraBold text-cWhite mt-1">Jenis Kelamin</label>
                            <!-- Radio Container -->
                            <div class="flex flex-row gap-10 w-full my-2">
                                <div class="flex flex-row gap-3">
                                    <label class="cursor-pointer text-cWhite font-YSDarkMedium flex flex-row gap-4 md:text-base text-sm">
                                        <input type="radio" id="Male" value="male" name="gender"
                                            @if (old('gender') == 'male') checked="checked" @endif
                                            value="{{ old('gender') }}" class="hidden">
                                        <span
                                            class="flex flex-row justify-center items-center w-5 h-5 after:w-3 after:h-3 md:w-6 md:h-6 border border-cYellow rounded-full md:after:h-4 md:after:w-4 after:bg-cYellow after:block after:rounded-full"></span>
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="flex flex-row gap-3">
                                    <label class="cursor-pointer text-cWhite font-YSDarkMedium flex flex-row gap-4 md:text-base text-sm">
                                        <input type="radio" id="Female" value="female" name="gender"
                                            @if (old('gender') == 'female') checked="checked" @endif
                                            value="{{ old('gender') }}" class="hidden">
                                        <span
                                            class="flex flex-row justify-center items-center w-5 h-5 after:w-3 after:h-3 md:w-6 md:h-6 border border-cYellow rounded-full md:after:h-4 md:after:w-4 after:bg-cYellow after:block after:rounded-full"></span>
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <span class="font-error hidden" style="color: red" id="genderRequired">Gender Field is Required</span>
                        </div>
                        <div class="cursor-pointer self-center flex justify-center items-center rounded-3xl text-cWhite bg-cLinearGradientBlue h-10 w-2/5 md:w-40 md:h-12 font-YSDarkBold mt-4 xl:mt-3"
                            onclick=" return checkFormStep1()">
                            Next
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 2 -->
            <div class="hidden tab w-full">
                <div class="flex flex-col justify-center items-center gap-0 mt-3 sm:mt-5 w-full md:gap-2">
                    <img src="{{ asset('assets/ts/Progress Bar 2.svg') }}" alt="Progress Bar" class="w-2/3">
                    <!-- Input Group Container -->
                    <div class="self-start mt-4 lg:mt-0 flex flex-col justify-center items-start w-full">
                        <div class="flex flex-col w-full gap-0">
                            <label for="email" class="font-YSDarkExtraBold text-cWhite mt-1">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="original my-2 rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide focus:border-2"
                                placeholder="" oninput="validateEmail()">
                            <div style="color: red" class=" font-error hidden err-msg" id="EmailInvalid">
                                A valid email is required
                            </div>
                        </div>
                        <div class=" relative w-full flex flex-col gap-0">
                            <label for="passwordSignUp" class="font-YSDarkExtraBold text-cWhite mt-1">Password</label>
                            <input type="password" id="passwordSignUp" name="password"
                                class="original my-2 rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide focus:border-2"
                                oninput="validatePassword()">
                            <span onclick="showPassword()">
                                <iconify-icon icon="ph:eye-closed" style="color: #f4f4f4;" class=" absolute right-8 bottom-6"
                                    id="hide1"></iconify-icon>
                                <iconify-icon icon="radix-icons:eye-open" style="color: #f4f4f4;" class="hidden absolute right-8 bottom-6"
                                    id="hide2"></iconify-icon>
                            </span>
                        </div>
                        <div style="color: red" class="font-error hidden err-msg" id="invalid1">
                                Password must be atleast 8 characters, consisting of numeric, upper case and lower case characters
                        </div>
                        <div style="color: red" class="font-error hidden err-msg" id="passwordRequired">
                                Password Field is Required
                        </div>
                        <div class="relative w-full flex flex-col gap-0">
                            <label for="confirmPassSignUp" class="font-YSDarkExtraBold text-cWhite mt-1">Confirm
                                Password</label>
                            <input type="password" id="confirmPassSignUp" name="password_confirmation"
                                class="original my-2 rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide focus:border-2"
                                oninput="confirmPassword()">
                            <span onclick="showConfirmPassword()">
                                <iconify-icon icon="ph:eye-closed" style="color: #f4f4f4;" class=" absolute right-8 bottom-6"
                                    id="hide3"></iconify-icon>
                                <iconify-icon icon="radix-icons:eye-open" style="color: #f4f4f4;" class="hidden absolute right-8 bottom-6"
                                    id="hide4"></iconify-icon>
                            </span>
                        </div>
                        <div style="color: red" class="font-error hidden err-msg" id="invalid2">
                                Passwords do not match
                        </div>
                        <div style="color: red" class="font-error hidden err-msg" id="confirmRequired">
                                Comfirm Password Field is Required
                        </div>
                        <div class="flex flex-row justify-between mt-4 w-full lg:mb-4">
                            <div class="cursor-pointer self-center flex justify-center items-center rounded-3xl text-cWhite bg-cLinearGradientBlue w-2/5 h-10 md:w-32 lg:w-40 md:h-12 font-YSDarkBold mt-4"
                                onclick="next_page(-1)">
                                <button type="button">Back</button>
                            </div>
                            <div class="cursor-pointer self-center flex justify-center items-center rounded-3xl text-cWhite bg-cLinearGradientBlue w-2/5 h-10 md:w-32 lg:w-40 md:h-12 font-YSDarkBold mt-4"
                                onclick="return checkFormStep2()">
                                <button type="button">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Step 3 -->
            <div class="hidden tab w-full">
                <div class="flex flex-col justify-center items-center gap-0 mt-3 sm:mt-5 w-full">
                    <img src="{{ asset('assets/ts/Progress Bar 1.svg') }}" alt="Progress Bar" class="w-2/3">
                    <!-- Input Group Container -->
                    <div class="self-start mt-4 flex flex-col justify-center items-start w-full md:gap-2">
                        <div class="flex flex-col w-full gap-0">
                            <label for="Whatsapp" class="font-YSDarkExtraBold text-cWhite mt-1">Whatsapp</label>
                            <input type="number" id="Whatsapp" name="whatsapp" value="{{ old('whatsapp') }}"
                                class="original my-2 rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide focus:border-2"
                                placeholder="" oninput="validateNumber()">
                            <div style="color: red" class=" font-error hidden" id="WhatsappInvalid">
                                Nomor Whatsapp harus terdiri dari 9 nomor
                            </div>
                            <div style="color: red" class=" font-error hidden" id="whatsappRequired">
                                Whatsapp Field is Required
                            </div>
                        </div>
                        <div class="flex flex-col gap-0 w-full">
                            <label for="LINE" class="font-YSDarkExtraBold text-cWhite mt-1">LINE</label>
                            <input type="text" id="LINE" name="line_id" value="{{ old('line_id') }}"
                                class="original my-2 rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide focus:border-2"
                                placeholder="">
                            <div style="color: red" class="font-error hidden" id="LINEInvalid">
                                ID LINE harus unik
                            </div>
                            <div style="color: red" class=" font-error hidden" id="LINERequired">
                                Line Field is Required
                            </div>
                        </div>
                        <div class="flex flex-col gap-0 w-full">
                            <label for="Institution" class="font-YSDarkExtraBold text-cWhite mt-1">Institusi / Perusahaan</label>
                            <input type="text" id="Institution" name="company" value="{{ old('company') }}"
                                class="original my-2 rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide focus:border-2"
                                placeholder="">
                                <div style="color: red" class=" font-error hidden" id="institutionRequired">
                                Institution Field is Required
                            </div>
                        </div>
                        <div class="flex flex-row justify-between mt-4 w-full lg:mb-4">
                            <div class="cursor-pointer self-center flex justify-center items-center rounded-3xl text-cWhite bg-cLinearGradientBlue w-2/5 h-10 md:w-32 lg:w-40 md:h-12 font-YSDarkBold mt-4"
                                onclick="next_page(-1)">
                                <button type="button">Back</button>
                            </div>
                            <button type="submit"
                                class="cursor-pointer self-center flex justify-center items-center rounded-3xl text-cWhite bg-cLinearGradientBlue w-2/5 h-10 md:w-32 lg:w-40 md:h-12 font-YSDarkBold mt-4"
                                >Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login button -->
            <div class="mt-7 mb-2 sm:mb-4 sm:mt-3 lg:mb-1 lg:mt-2 xl:mt-7 md:mt-8">
                <span class="text-cWhite text-sm md:text-sm">
                    Sudah memilik akun?
                    <a href="{{ route('login') }}" class="colour-gradient-2">Login disini</a>
                </span>
            </div>
        </form>
        {{-- <!-- <script src="./js/Sign-Up.js"></script> -->
        <script src="{{ asset('js/ts/Sign-Up.js') }}"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script> --}}
    </body>
