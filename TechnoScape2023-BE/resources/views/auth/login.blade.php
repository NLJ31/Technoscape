@extends('Template.template')

@section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape 2023</title>
    <link rel="shortcut icon" href="{{asset('assets/logo/favicon.png')}}" type="image/x-icon">
{{-- js --}}
<script src="{{asset('js/login.js')}}?t={{ env('VERSION_TIME') }}"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

<!-- css -->
    <link rel="stylesheet" href="{{ asset('css/base/base.css') }}?t={{ env('VERSION_TIME') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}?t={{ env('VERSION_TIME') }}">

@endsection

@section('body')


<body class="bg-cBgDark overflow-x-hidden">
 <!-- Main Container -->
    <div class="w-full flex flex-col min-h-screen xl:gap-6 object justify-around xl:justify-center items-center md:justify-around md:py-3">
        <!-- Main Content -->
        <div class="flex flex-col-reverse mx-3 lg:flex-row lg:mx-5 xl:mt-0 md:mx-1 lg:mt-6 xl:mx-20 md:flex-col-reverse md:mt-1 lg:w-11/12 justify-center items-center">
            <!-- Left Wrapper -->
            <div class="flex flex-col gap-4 justify-center items-center xl:mr-30 lg:mr-0 w-10/12 self-center md:self-center md:mt-0 xl:mt-5 md:w-full lg:w-fit">
                <div class="mt-4 w-full flex justify-center align-middle lg:mt-2">
                <a href="/">
                    <img src="./assets/logo/technoscape-logo.svg" width="150px" height="34.23px" alt="logo technoscape">
                </a>
                </div>
                <div class="flex flex-col justify-center items-center w-full">
                    <div class="font-ABigDeal text-cWhite md:text-8xl sm:text-6xl text-5xl">
                        <span>WELCOME!</span>
                    </div>
                    <div class="text-cWhite font-YSDarkRegular font-bold md:text-5xl sm:text-3xl colour-gradient-1 w-fit basis-2 pb-4 text-2xl -mt-3 Lg:-mt-6">
                        <span>Let's log you back in...</span>
                    </div>
                </div>
                <form  class="mt-0 flex flex-col justify-center items-center gap-5 w-full sm:px-20 lg:px-0 lg:pr-0 md:mt-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <input class="cursor-pointer  h-10 md:h-16 bg-cWhite rounded-full text-left w-full sm:text-lg font-YSDarkRegular py-0 px-8 tracking-wide text-base md:py-1"
                    id="email"  type="email" name="email" value="{{old('email')}}"  placeholder="Masukan email anda..."/>
                    @foreach ($errors->get('email') as $message)
                    <span style="color: red" class="self-center -mt-5 lg:self-end lg:mr-4">{{ $message }}</span>
                    @endforeach
                    <!-- Password -->
                    <div class="relative w-full">
                        <input class="cursor-pointer h-10 md:h-16 bg-cWhite rounded-full text-left w-full md:text-lg text-base font-YSDarkRegular md:py-1 px-8 tracking-wide py-0"
                        id="password"  class="block mt-1 w-full" type="password" name="password" placeholder="Masukan password anda...">
                        <span onclick="showPassword()" >
                            <iconify-icon icon="ph:eye-closed-thin" id="hide1" class="absolute bottom-3 right-4 md:right-10 md:bottom-6"></iconify-icon>
                            <iconify-icon icon="radix-icons:eye-open" class="hidden absolute bottom-3.5 right-4 md:right-10 md:bottom-6" id="hide2"></iconify-icon>
                        </span>
                    </div>
                    @foreach ($errors->get('password') as $message)
                        <span style="color: red" class="self-center -mt-5 lg:self-end lg:mr-4">{{ $message }}</span>
                    @endforeach
                        <span class="font-YSDarkRegular text-cWhite underline decoration-1 text-base lg:mr-6 self-center xl:self-end sm:self-end lg:self-end sm:mr-4 lg:-mt-5"><a href="{{route('password.request')}}">Forget Password ?</a></span>

                        <button type="submit"
                    class="lg:text-xl md:text-base bg-cLinearGradientBtnBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 h-14 w-32 md:w-52 text-lg overflow-hidden self-center rounded-full font-bold font-YSDarkRegular text-cWhite text-center tracking-wide hover:shadow-bsBlueBtn ease-in-out cursor-pointer "
                >
                    Login
                </button>
            </div>
             <!-- Right Wrapper -->
            <div class="flex items-center self-center width-desktop w-full h-full justify-center md:h-fit md:-mt-12">
                <img src="{{asset('assets/login/Mascot TS 2022 (1) 3.svg')}}" alt="Mascot Technoscape 2023" class=" width-desktop lg:w-96 lg:h-full w-6/12 self-center">
            </div>
        </div>
        <!-- Registration Section -->
        <div class="flex w-full justify-center items-center mt-4 xl:mt-6 h-100 font-YSDarkBoldb">
            <span class="text-cWhite">
                    Belum memiliki akun?
                <a href="{{route('register')}}"class="colour-gradient-2">Registrasi disini</a>
            </span>
        </div>
    </div>
</body>
@endsection
