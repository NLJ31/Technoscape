@extends('Template.template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
    <script src="{{ asset('js/admin/admin.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection

@section('body')

    <body class="bg-cWhite relative overflow-x-hidden">
        {{-- Modal --}}
        <div id="paymentModal" class="hidden w-screen h-full bg-[#67676780] flex flex-col items-center justify-center z-10 absolute  overflow-hidden">
            <div class="flex flex-col items-center bg-cWhite rounded-xl p-4 pb-12">
                <img onclick="closePaymentModal()" class="x w-9 float-right cursor-pointer self-end" src="{{asset('assets/admin/participant/x.svg')}}" alt="">
                <div class="flex flex-col items-center justify-center">
                    <div id="paymentImage" class="w-120 max-h-[30rem] flex flex-col items-center mb-4 rounded-2xl">
                    </div>
                    <div class="flex flex-row">
                        <form id="rejectPayment" action="" method="post">
                            @csrf
                            <button class="font-PJSSemiBold rounded-2xl border border-[#F47676]
                                shadow-bsBox text-[#F47676] px-8 py-2 mr-10">
                                    Reject
                            </button>
                        </form>
                        <form id="verifyPayment" action="" method="post">
                            @csrf
                            <button class="font-PJSSemiBold text-cWhite tracking-wider rounded-2xl
                                bg-cLinearGradientBlue drop-shadow-dsBlueDecor
                                px-8 py-2">
                                    Verify
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-6 p-10">
            {{-- Side Bar --}}
            @include('admin.components.sidebar')

            {{-- Navbar + Content --}}
            <section class="col-span-3">
                {{-- Navbar --}}
                <div class="flex flex-row items-center bg-cWhiteS rounded-2xl shadow-bsBox pt-5 px-12 mb-6">
                    <a href="{{url('/admin/tc/announcement')}}"
                        class="w-max text-lg text-cText tracking-wide
                        font-PJSMedium flex flex-col px-5
                        hover:bg-cLinearGradientBlue
                        hover:text-transparent hover:bg-clip-text group">
                        <h3>Announcement</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-0 group-hover:opacity-100"></span>
                    </a>

                    <a href="{{url('/admin/tc/participant')}}"
                        class="w-max text-lg text-cText tracking-wide
                        font-PJSMedium flex flex-col px-5
                        hover:bg-cLinearGradientBlue
                        hover:text-transparent hover:bg-clip-text group">
                        <h3>Participant</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-0 group-hover:opacity-100"></span>
                    </a>

                    <a href="{{url('/admin/tc/payment')}}"
                        class="w-max text-lg text-cText tracking-wide
                        font-PJSMedium flex flex-col px-5
                        hover:bg-cLinearGradientBlue
                        hover:text-transparent hover:bg-clip-text group">
                        <h3>Payment</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-100 group-hover:opacity-100"></span>
                    </a>
                </div>

                {{-- Content --}}
                <div class="min-h-[87%] flex flex-col bg-cWhite rounded-2xl shadow-bsBox pt-5 px-12">
                    <h1 class="float-left text-3xl font-PJSBold
                    bg-cLinearGradientBlue
                    text-transparent bg-clip-text mb-8">Payment</h1>
                    {{-- Search --}}
                    <form class="flex flex-row self-end">
                        {{-- <a href="/admin/ts/participant/export" target="_blank"
                        class="w-max flex flex-row justify-end self-end text-sm border-cBlue border
                        rounded-xl font-PJSMedium bg-clip-text text-transparent bg-cBtnGradientCS py-2 px-6">Export Participant</a>
                        --}}
                        <span class="w-max flex flex-row justify-end self-end
                            border-2 border-[#6767678F] rounded-full pr-4">
                            <input class="border-0 bg-cWhite rounded-l-full
                            border-none focus:ring-0 focus:border-0 focus:outline-none placeholder:text-sm  mx-2 py-2
                            px-2" id="search" name="search" type="search" placeholder="Type here to search...">
                            <button>
                                <img class="w-4" src="{{asset('assets/admin/search.svg')}}" alt="">
                            </button>
                        </span>
                    </form>

                    {{-- Filters --}}
                    <div class="flex flex-row item-center">
                        <a href="{{url('admin/tc/payment')}}">
                            <button class="font-PJSSemiBold text-cWhite
                            tracking-wider rounded-2xl bg-cLinearGradientBlue drop-shadow-dsBlueDecor
                            px-8 py-2 mr-4">All</button>
                        </a>
                        <a href="{{url('admin/tc/payment/paid ')}}">
                            <button class="font-PJSSemiBold text-cWhite
                            tracking-wider rounded-2xl bg-cLinearGradientBlue drop-shadow-dsBlueDecor
                            px-8 py-2 mr-4">Unverified</button>
                        </a>
                        <a href="{{url('admin/tc/payment/accepted')}}">
                            <button class="font-PJSSemiBold text-cWhite
                            tracking-wider rounded-2xl bg-cLinearGradientBlue drop-shadow-dsBlueDecor
                            px-8 py-2 mr-4">Verified</button>
                        </a>
                        <a href="{{url('admin/tc/payment/rejected')}}">
                            <button class="font-PJSSemiBold text-cWhite
                            tracking-wider rounded-2xl bg-cLinearGradientBlue drop-shadow-dsBlueDecor
                            px-8 py-2 mr-4">Rejected</button>
                        </a>
                    </div>
                    {{-- Participant --}}
                    <div class="flex flex-col mt-8 mb-10">
                        {{-- Participant Box --}}
                        @foreach ($users as $user)
                        <div class="w-full flex flex-row justify-between items-center bg-cWhite shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-5 h-16 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                                <div class="flex flex-col mr-12">
                                    <div class="font-PJSSemiBold text-cText text-xl tracking-wide">
                                        {{$user->user->name}}
                                    </div>
                                    <div class="font-PJSLight text-cBlack">
                                        {{$user->payment_type}} -
                                        @if ($user->payment_type == 'general')
                                            Rp30.000
                                        @else
                                            Free
                                        @endif
                                    </div>
                                </div>
                            </span>
                            <div class="w-fit flex flex-row">
                                <div class="mr-8">
                                    @if (str_contains($user->payment_status, 'paid'))
                                    <div class="font-PJSMedium text-">
                                        Unverified
                                    </div>
                                    @elseif (str_contains($user->payment_status, 'accepted'))
                                    <div class="font-PJSMedium text-">
                                        Verified
                                    </div>
                                    @elseif (str_contains($user->payment_status, 'rejected'))
                                    <div class="font-PJSMedium text-">
                                        Rejected
                                    </div>
                                    @endif
                                </div>
                                @if(str_contains($user->payment_receipt, 'zip') || str_contains($user->payment_receipt, 'rar'))
                                <a href="{{asset('/storage/tc-registrationProof/'.$user->payment_receipt)}}" onclick="openPaymentModal('{{asset('/storage/tc-registrationProof/'.$user->payment_receipt)}}', {{$user->user->id}}, 'tc')" download class="cursor-pointer">
                                    <img src="{{asset('assets/admin/arrow.svg')}}" alt="">
                                </a>
                                @else
                                <div class="cursor-pointer">
                                    <img onclick="openPaymentModal('{{asset('/storage/tc-registrationProof/'.$user->payment_receipt)}}', {{$user->user->id}}, 'tc')" src="{{asset('assets/admin/arrow.svg')}}" alt="">
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        {{-- Next Participant --}}
                        <div class="font-PJSSemiBold text-cBlack">
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>

@endsection
