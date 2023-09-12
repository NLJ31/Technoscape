@extends('Template.template')
@section('head')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Technoscape 2023</title>
        <link rel="shortcut icon" href="./assets/logo/favicon.png" type="image/x-icon">

        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/base/base.css')}}?t={{ env('VERSION_TIME') }}">
        <link rel="stylesheet" href="./css/base/build.css">
        <link rel="stylesheet" href="{{asset('css/login.css')}}?t={{ env('VERSION_TIME') }}">
        <link rel="stylesheet" href="{{asset('css/forget-password.css')}}?t={{ env('VERSION_TIME') }}">
        <!-- Js -->
        <script src="{{asset('js/Forget-password.js')}}?t={{ env('VERSION_TIME') }}"></script>
    </head>
@endsection
@section('body')

    <body class="bg-cBgDark overflow-x-hidden lg:overflow-hidden flex justify-center items-start">
        <!-- Main Container -->
        <div class="flex flex-col lg:flex-row justify-center items-center min-h-screen xl:gap-4 page-height max-w-screen-2xl">
            <!-- Left Wrapper -->
            <div class="w-full flex justify-center items-center lg:h-full  lg:w-96 relative lg:justify-normal lg:items-baseline">
                <img src ="./assets/forget-password/Forget-Password-Mobile.svg" alt=Mascot class="lg:hidden h-48 w-48 md:h-72 md:w-72">
                <img src="./assets/forget-password/Forget-Password.png" alt="Mascot"
                    class="hidden lg:block lg:absolute lg:bottom-0 lg:left-0 lg:w-96 xl:top-1/2 xl:bottom-1/2">
            </div>
            <!-- Right Wrapper -->
            <div class="lg:self-end w-full flex justify-center items-center flex-col gap-4 first-letter md:gap-8  lg:justify-end lg:items-start lg:w-10/12 lg:gap-40 lg:max-w-3xl lg:py-6 xl:self-center">
                <div class="flex flex-col w-full justify-center items-center gap-4 lg:justify-start lg:items-start lg:gap-0">
                    <a href="/">
                        <img src="./assets/logo/technoscape-logo.svg" alt="Logo Technoscape 2023" width="150px" height="34.23px"
                            class="md:w-72 lg:w-40 lg:mb-6">
                    </a>
                    <div class=" font-ABigDeal text-cWhite font-normal text-4xl md:text-7xl sm:text-6xl flex justify-center items-center text-center lg:justify-start lg:text-left lg:items-start h-fit w-fit">
                        FORGET PASSWORD
                    </div>
                    <div class="w-full font-sans text-cWhite font-medium text-sm flex justify-center items-center text-center px-1 lg:text-base md:text-lg md:w-3/5 lg:justify-start lg:text-left lg:items-start lg:w-11/12 lg:mb-6">
                        Masukkan email yang berhubungan dengan akunmu dan kami akan mengirim email serta panduan untuk mengatur
                        ulang kata sandimu
                    </div>
                    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-4 w-full justify-center items-center lg:flex-row lg:justify-start lg:w-11/12"  onsubmit="return checkNotification()">
                        @csrf
                        <div class="flex flex-col w-full justify-center items-center xl:items-start">
                            <input type="email" id="forgetEmail" name="email" placeholder="Masukan e-mail anda..." class="md:w-96 md:text-left text-center sm:w-10/12 w-11/12 sm:text-lg text-base font-YSDarkMedium rounded-full sm:h-14 h-10 sm:py-3 py-1 px-8 tracking-wide lg:x-2/3" oninput="validateEmail()">
                            <span style="color:red" class="mt-2 lg:mt-0 hidden lg:self-start lg:px-8" id="InvalidEmail"> Please enter an email address</span>
                            <span style="color:red" class="mt-2 lg:mt-0 hidden lg:self-start lg:px-8" id="InvalidEmail2"> Email Format is incorrect</span>
                            <span style="color:red" class="mt-2 lg:mt-0 hidden lg:self-start lg:px-8" id="InvalidEmail3"> Email is Invalid</span>
                        </div>
                        <button type="submit" class="lg:ml-8 flex justify-center items-center rounded-full md:w-fit md:px-5 w-52 sm:h-14 h-10 bg-cLinearGradientBlue text-cWhite font-YSDarkBold text-lg lg:w-2/3 lg:self-start xl:w-2/3">Send Instruction</button>
                    </form>
                </div>
                <div class="w-full flex justify-center items-center font-YSDarkBold lg:justify-start lg:w-full px-1 mt-8 lg:mt-0 lg:text-sm">
                    <span class="text-cWhite">
                        Sudah mengetahui sandimu?
                        <a href="{{ route('login') }}" class="colour-gradient-2">Login disini</a>
                    </span>
                </div>
            </div>
        </div>
    </body>
@endsection
