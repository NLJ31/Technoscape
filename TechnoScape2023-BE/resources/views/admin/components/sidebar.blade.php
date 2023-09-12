<section class="h-max bg-cWhiteS col-span-1 rounded-2xl shadow-bsBox">
    <div class="flex flex-col justify-between my-12">
        <div class="w-full flex flex-col mb-32">
            <a href="/" class="w-full mb-12"><img class="w-7/12 mx-auto" src="{{asset('assets/logo/dashboard/Logo.png')}}" alt=""></a>
            <div class="flex flex-col space-y-8 ml-8">

                @if ($title === 'ts')
                <div class="w-full pl-6 py-3 bg-cLinearGradientBlue
                drop-shadow-dsBlueDecor rounded-tl-2xl rounded-bl-2xl">
                    <h3 class="text-lg font-PJSMedium tracking-wider text-cWhite self-start">Technoscape</h3>
                </div>
                @else
                <a href="{{url('/admin/ts/announcement')}}" class="w-full pl-6 py-3 rounded-tl-2xl rounded-bl-2xl">
                    <h3 class="text-lg font-PJSMedium tracking-wider text-cText self-start
                    hover:bg-cLinearGradientBlue
                    hover:text-transparent hover:bg-clip-text group">Technoscape</h3>
                </a>
                @endif


                @if ($title === 'tc')
                <div class="w-full pl-6 py-3 bg-cLinearGradientBlue
                drop-shadow-dsBlueDecor rounded-tl-2xl rounded-bl-2xl">
                    <h3 class="text-lg font-PJSMedium tracking-wider text-cWhite self-start">Techno Conference</h3>
                </div>
                @else
                <a href="{{url('/admin/tc/announcement')}}" class="w-full pl-6 py-3 rounded-tl-2xl rounded-bl-2xl">
                    <h3 class="text-lg font-PJSMedium tracking-wider text-cText self-start
                    hover:bg-cLinearGradientBlue
                    hover:text-transparent hover:bg-clip-text group">Techno Conference</h3>
                </a>
                @endif

                @if ($title === 'ta')
                <div class="w-full pl-6 py-3 bg-cLinearGradientBlue
                drop-shadow-dsBlueDecor rounded-tl-2xl rounded-bl-2xl">
                    <h3 class="text-lg font-PJSMedium tracking-wider text-cWhite self-start">Techno Academy</h3>
                </div>
                @else
                <a href="{{url('/admin/ta/announcement')}}" class="w-full pl-6 py-3 rounded-tl-2xl rounded-bl-2xl">
                    <h3 class="text-lg font-PJSMedium tracking-wider text-cText self-start
                    hover:bg-cLinearGradientBlue
                    hover:text-transparent hover:bg-clip-text group">Techno Academy</h3>
                </a>
                @endif

                @if ($title === 'hack')
                <div class="w-full pl-6 py-3 bg-cLinearGradientBlue
                drop-shadow-dsBlueDecor rounded-tl-2xl rounded-bl-2xl">
                    <h3 class="text-lg font-PJSMedium tracking-wider text-cWhite self-start">Hackathon 6.0</h3>
                </div>
                @else
                <a href="{{url('/admin/hack/announcement')}}" class="w-full pl-6 py-3 rounded-tl-2xl rounded-bl-2xl">
                    <h3 class="text-lg font-PJSMedium tracking-wider text-cText self-start
                    hover:bg-cLinearGradientBlue
                    hover:text-transparent hover:bg-clip-text group">Hackathon 6.0</h3>
                </a>
                @endif

            </div>
        </div>
        <div class="flex flex-col space-y-4 ml-14">
            <span>
                <a href="{{url('/')}}" class="inline-flex text-lg font-PJSMedium tracking-wider text-cText self-start
                hover:bg-cLinearGradientBlue
                hover:text-transparent hover:bg-clip-text group">
                <svg class="mr-6" width="23" height="25" viewBox="0 0 25 25">
                    <path class="group-hover:fill-cGrad2" d="M8.03778 23.1011V19.4064C8.03778 18.4632 8.80796 17.6986 9.75803 17.6986H13.231C13.6872
                    17.6986 14.1248 17.8785 14.4474 18.1988C14.77 18.5191 14.9512 18.9534 14.9512 19.4064V23.1011C14.9484
                    23.4932 15.1032 23.8703 15.3815 24.1485C15.6598 24.4268 16.0385 24.5833 16.4335 24.5833H18.8029C19.9095
                    24.5862 20.9717 24.1518 21.7552 23.376C22.5387 22.6002 22.9791 21.5468 22.9791 20.4482V9.92245C22.9791
                    9.03505 22.5828 8.19331 21.8972 7.62397L13.8369 1.23334C12.4348 0.112843 10.4258 0.149021 9.0656 1.31926L1.18922
                    7.62397C0.471147 8.17652 0.041961 9.02077 0.020752 9.92245V20.4375C0.020752 22.7272 1.8905 24.5833 4.19696
                    24.5833H6.51227C7.33265 24.5833 7.99937 23.9263 8.00532 23.1119L8.03778 23.1011Z" fill="#808080"/>
                </svg>
                Home</a>
            </span>

            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="inline-flex text-lg font-PJSMedium tracking-wider text-cText self-start
                hover:bg-cLinearGradientBlue
                hover:text-transparent hover:bg-clip-text group">
                <svg class="mr-6" width="20" height="29" viewBox="0 0 20 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="group-hover:fill-cGrad2" d="M18.1248 15.7091C17.4566 15.7091 16.9166 16.2505 16.9166 16.9173V21.7507C16.9166 22.4165 16.3752
                    22.959 15.7081 22.959H12.0831V4.83419C12.0831 3.80227 11.4258 2.88033 10.4375 2.53717L10.0797 2.41747H15.7081C16.3752
                    2.41747 16.9166 2.95998 16.9166 3.62594V7.2509C16.9166 7.91775 17.4566 8.45915 18.1248 8.45915C18.793 8.45915 19.3331
                    7.91775 19.3331 7.2509V3.62594C19.3331 1.62739 17.7066 0.000976562 15.7081 0.000976562H2.71872C2.6727 0.000976562 2.6342
                    0.0215529 2.58951 0.0275266C2.53132 0.0226591 2.47579 0.000976562 2.41672 0.000976562C1.0839 0.000976562 0 1.08466 0
                    2.41747V24.1672C0 25.1992 0.657334 26.1211 1.64566 26.4643L8.91749 28.8883C9.16396 28.9644 9.4091 29.0007 9.66664
                    29.0007C10.9994 29.0007 12.0831 27.9168 12.0831 26.584V25.3757H15.7081C17.7066 25.3757 19.3331 23.7493 19.3331
                    21.7507V16.9173C19.3331 16.2505 18.793 15.7091 18.1248 15.7091Z" fill="#808080"/>
                </svg>
                Log out</button>
            </form>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/admin/admin.js')}}?t={{env("VERSION_TIME")}}"></script>
