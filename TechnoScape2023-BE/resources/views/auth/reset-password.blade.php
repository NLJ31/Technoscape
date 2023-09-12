{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('Template.template')
@section('head')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Technoscape 2023</title>
        <link rel="shortcut icon" href="./assets/logo/favicon.png" type="image/x-icon">

        <!-- css -->
        <link rel="stylesheet" href="{{ asset('css/base/base.css') }}?t={{ env('VERSION_TIME') }}">
        <link rel="stylesheet" href="./css/base/build.css">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}?t={{ env('VERSION_TIME') }}">
        <link rel="stylesheet" href="{{ asset('css/ts/forget-password.css') }}?t={{ env('VERSION_TIME') }}">
    </head>
@endsection
@section('body')
<body class="bg-cBgDark min-h-screen flex flex-col justify-around items-center md:justify-around xl:justify-center overflow-x-hidden">
    <!-- Logo Technoscape -->
    <div class="mt-3 md:mt-4 w-full flex justify-center align-middle">
        <a href="/">
            <img src="/assets/logo/technoscape-logo.svg" width="150px" height="34.23px" alt="logo technoscape">
        </a>
    </div>
    <!-- Main Container -->
    <div class="flex flex-col-reverse lg:flex-row gap-3 md:gap-14 lg:gap-2 justify-center items-center mt-3 md:mt-8 lg:mt-16 w-full md:px-32 lg:px-16">
        <!-- Form -->
        <form method="POST" action="{{ route('password.store') }}" class="flex flex-col items-center justify-center bg-cBlack2 w-11/12 rounded-3xl h-4/6 lg:py-3 shadow-bsSignUp md:mb-8 mb-2 px-6 lg:px-0 lg:justify-around max-w-xl xl:py-12 md:py-5 xl:justify-between py-4 gap-4" onsubmit="return checkform()">
            @csrf
                <input type="hidden" name="token" value="{{ old('token', $request->token) }}">
                <input type="hidden" name="email" value="{{ old('email', $request->email) }}">
            <span class="font-YSDarkExtraBold text-cWhite text-2xl text-center w-full md:text-5xl lg:text-3xl lg:mb-3">Reset Your Password</span>
            <!-- Input Group Container -->
            <div class="self-start flex flex-col justify-center items-start gap-3 md:gap-8 md:mt-6 lg:mt-2 w-full lg:gap-6 lg:px-1 lg:self-center lg:w-11/12">
                <!-- Input Group -->
                <div class="w-full flex flex-col justify-center items-start lg:gap-2 lg:mb-2">
                    <div class="relative w-full flex flex-col gap-0">
                        <label for="resetPassword" class="font-YSDarkExtraBold text-cWhite md:text-lg lg:text-base">Kata Sandi Baru</label>
                        <input type="password" id="resetPassword" name="password" class="rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide mt-3" placeholder="" oninput="validatePassword()">
                        <span onclick="showPassword()">
                            <iconify-icon icon="ph:eye-closed" style="color: #f4f4f4;" class="absolute right-8 bottom-4" id="hide1"></iconify-icon>
                            <iconify-icon icon="radix-icons:eye-open" style="color: #f4f4f4;" class="hidden absolute right-8 bottom-4" id="hide2"></iconify-icon>
                        </span>
                    </div>
                    <span style="color: red" id="resetPass" class="hidden w-full font-YSDarkMedium font-error font-medium">Kata sandi harus memiliki huruf besar dan kecil, numerik, serta terdiri atas 8 karakter</span>
                        <span style="color: red" id="PassRequired" class="hidden w-full font-YSDarkMedium  font-error font-medium">Password field is required
                    </span>
                </div>
                <!-- Input Group -->
                <div class="w-full flex flex-col justify-center items-start lg:gap-2 relative lg:mb-6">
                    <div class="relative flex flex-col gap-0 w-full">
                        <label for="confirmPassword" class="font-YSDarkExtraBold text-cWhite md:text-lg lg:text-base">Konfirmasi Sandi Baru</label>
                        <input type="password" id="confirmPassword" name="password_confirmation" class="rounded-md border border-cWhite bg-cBlack2 text-cWhite h-12 w-full py-1 px-4 tracking-wide mt-3" placeholder="" oninput="confirmPass()">
                        <span onclick="showPassword()">
                            <iconify-icon icon="ph:eye-closed" style="color: #f4f4f4;" class=" absolute right-8 bottom-4" id="hide3"></iconify-icon>
                            <iconify-icon icon="radix-icons:eye-open" style="color: #f4f4f4;" class="hidden absolute right-8 bottom-4" id="hide4"></iconify-icon>
                        </span>
                    </div>
                    <span style="color: red" id="invalid2" class="hidden w-full font-YSDarkMedium  font-error font-medium">Password does not match</span>
                    <span style="color: red" id="ConfirmRequired" class="hidden w-full font-YSDarkMedium font-error font-medium"> Confirm Password Field is Required
                    </span>
                </div>
                <!-- Button -->
                <button type="submit" class="bg-cLinearGradientBtn self-center rounded-full tracking-wide w-28 md:w-40 flex justify-center items-center h-10 md:h-12 font-YSBold text-cWhite md:text-xl text-sm mt-3">
                    Submit
                </button>
            </div>
        </form>
        <div class="flex flex-col lg:self-start items-center w-fit lg:w-1/2 max-w-xl width-desktop justify-around lg:gap-14 lg:py-4">
            <div class="flex flex-col">
                <div class="inline-block text-cWhite text-2xl xl:text-6xl font-ABigDeal w-fit text-center md:text-4xl lg:text-5xl lg:self-start">
                    Instruction
                </div>
                <div class="text-cWhite font-ABigDeal w-fit lg:self-start sent-text -mt-3 md:-mt-5">
                    Is Sent
                </div>
            </div>
            <div class="text-xs clear-both md:text-base text-cWhite font-YSDarkBold tracking-wide text-center lg:text-justify max-width lg:self-start lg:text-xl">
                Mohon untuk mengecek email yang berhubungan dengan akunmu untuk mengatur ulang kata sandimu melalui link yang telah diberikan. Jika tidak muncul dalam beberapa menit, mohon untuk mengecek email pada bagian spam.
            </div>
        </div>
    </div>
     <!-- login button -->
     <div class="lg:mt-4 flex justify-center items-center w-full text-sm md:text-lg">
        <span class="text-cWhite">
            Sudah memilik akun?
            <a href="/login" class="colour-gradient-2">Login  disini</a>
        </span>
    </div>
    <script src="{{ asset('js/Forget-password.js') }}?t={{ env('VERSION_TIME') }}"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
@endsection
