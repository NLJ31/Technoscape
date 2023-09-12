@extends('Template.template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
    <script src="{{ asset('js/admin/admin.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection

@section('body')

    <body class="bg-cBgLight relative overflow-x-hidden">
        {{-- Modal --}}
        <div id="modal" class="hidden w-screen h-full bg-[#67676780] flex flex-col items-center justify-center z-10 absolute  overflow-hidden">
            <div class="flex flex-col items-center bg-cWhite rounded-xl p-4 pb-12">
                <img onclick="closeModal()" class="x w-9 float-right cursor-pointer self-end" src="{{asset('assets/admin/participant/x.svg')}}" alt="">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-20 mb-4" src="{{asset('assets/admin/participant/trash.svg')}}" alt="">
                    <div class="font-PJSExtraBold text-cBlack text-2xl tracking-wide mx-16 mb-2">Remove this participant?</div>
                    <div class="font-PJSMedium text-cBlack text-lg tracking-wide mb-8">This action can not be undone</div>
                    <div class="flex flex-row">
                        <button onclick="closeModal()" class="font-PJSSemiBold rounded-2xl
                            cLinearGradientBlue
                            text-transparent bg-clip-text
                            px-8 py-3 mr-10">
                                Cancel
                        </button>
                        <form action="" id="confirmDelete" method="POST">
                            @csrf
                            @method('delete')
                            <button class="font-PJSSemiBold text-cWhite tracking-wider rounded-2xl
                                bg-cLinearGradientBlue drop-shadow-dsBlueDecor
                                px-8 py-2">
                                    Remove
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
                    <a href="{{url('/admin/ta/announcement')}}"
                        class="w-max text-lg text-cText tracking-wide
                        font-PJSMedium flex flex-col px-5
                        hover:bg-cLinearGradientBlue
                        hover:text-transparent hover:bg-clip-text group">
                        <h3>Announcement</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-0 group-hover:opacity-100"></span>
                    </a>

                    <a href="{{url('/admin/ta/participant')}}"
                        class="w-max text-lg text-cText tracking-wide
                        font-PJSMedium flex flex-col px-5
                        hover:bg-cLinearGradientBlue
                        hover:text-transparent hover:bg-clip-text group">
                        <h3>Participant</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-0 group-hover:opacity-100"></span>
                    </a>

                    <a href="{{url('/admin/ta/payment')}}"
                        class="w-max text-lg text-cText tracking-wide
                        font-PJSMedium flex flex-col px-5
                        hover:bg-cLinearGradientBlue
                        hover:text-transparent hover:bg-clip-text group">
                        <h3>Payment</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-0 group-hover:opacity-100"></span>
                    </a>
                </div>

                {{-- Content --}}
                <div class="min-h-[87%] flex flex-col bg-cWhiteS rounded-2xl shadow-bsBox pt-5 px-12">
                    <h1 class="float-left text-3xl font-PJSBold
                    bg-cLinearGradientBlue
                    text-transparent bg-clip-text mb-8">Participant</h1>
                    {{-- Participant --}}
                    <div class="flex flex-col mt-8">
                        {{-- Full Name --}}
                        <div class="w-full flex flex-row items-center bg-cWhiteS shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-4 h-20 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                            </span>
                            <img class="w-7 ml-4 mr-6" src="{{asset('assets/admin/participant/people.svg')}}" alt="">
                            <span class="flex flex-col">
                                <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text">Full Name</div>
                                <div class="font-sans text-cText">{{$user->name}}</div>
                            </span>
                        </div>
                        {{-- Place Of Birth --}}
                        <div class="w-full flex flex-row items-center bg-cWhiteS shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-4 h-20 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                            </span>
                            <img class="w-6 ml-4 mr-6" src="{{asset('assets/admin/participant/location.svg')}}" alt="">
                            <span class="flex flex-col">
                                <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text">Place of Birth</div>
                                <div class="font-sans text-cText">{{$user->place_of_birth}}</div>
                            </span>
                        </div>
                        {{-- Date of Birth --}}
                        <div class="w-full flex flex-row items-center bg-cWhiteS shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-4 h-20 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                            </span>
                            <img class="w-7 ml-4 mr-6" src="{{asset('assets/admin/participant/calendar.svg')}}" alt="">
                            <span class="flex flex-col">
                                <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text">Date Of Birth</div>
                                <div class="font-sans text-cText">{{$user->date_of_birth}}</div>
                            </span>
                        </div>
                        {{-- Gender --}}
                        <div class="w-full flex flex-row items-center bg-cWhiteS shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-4 h-20 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                            </span>
                            <img class="w-6 ml-4 mr-6" src="{{asset('assets/admin/participant/gender.svg')}}" alt="">
                            <span class="flex flex-col">
                                <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text">Gender</div>
                                <div class="font-sans text-cText">{{$user->gender}}</div>
                            </span>
                        </div>
                        {{-- Email --}}
                        <div class="w-full flex flex-row items-center bg-cWhiteS shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-4 h-20 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                            </span>
                            <img class="w-7 ml-4 mr-6" src="{{asset('assets/admin/participant/email.svg')}}" alt="">
                            <span class="flex flex-col">
                                <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text">Email</div>
                                <div class="font-sans text-cText">{{$user->email}}</div>
                            </span>
                        </div>
                        {{-- Status --}}
                        <div class="w-full flex flex-row items-center bg-cWhiteS shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-4 h-20 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                            </span>
                            <img class="w-8 ml-4 mr-6" src="{{asset('assets/admin/participant/status.svg')}}" alt="">
                            <span class="flex flex-col">
                                <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text">Status</div>
                                @if (str_contains(strtolower($user->company), 'binus') || str_contains(strtolower($user->company), 'bina nusantara'))
                                <div class="font-sans text-cText">Binusian</div>
                                @else
                                <div class="font-sans text-cText">Non-Binusian</div>
                                @endif
                            </span>
                        </div>
                        {{-- LINE ID --}}
                        <div class="w-full flex flex-row items-center bg-cWhiteS shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-4 h-20 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                            </span>
                            <img class="w-8 ml-4 mr-6" src="{{asset('assets/admin/participant/line.svg')}}" alt="">
                            <span class="flex flex-col">
                                <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text">LINE ID</div>
                                <div class="font-sans text-cText">{{$user->line_id}}</div>
                            </span>
                        </div>
                        {{-- Whatsapp Number --}}
                        <div class="w-full flex flex-row items-center bg-cWhiteS shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-4 h-20 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                            </span>
                            <img class="w-7 ml-4 mr-6" src="{{asset('assets/admin/participant/whatsapp.svg')}}" alt="">
                            <span class="flex flex-col">
                                <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text">Whatsapp Number</div>
                                <div class="font-sans text-cText">{{$user->whatsapp}}</div>
                            </span>
                        </div>
                        {{-- Company/Institute --}}
                        <div class="w-full flex flex-row items-center bg-cWhiteS shadow-bsBox rounded-2xl pr-8 mb-4">
                            <span class="flex flex-row items-center">
                                <span class="w-4 h-20 rounded-l-2xl
                                bg-cLinearGradientBlue
                                mr-4">
                                </span>
                            </span>
                            <img class="w-7 ml-4 mr-6" src="{{asset('assets/admin/participant/company.svg')}}" alt="">
                            <span class="flex flex-col">
                                <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text">Company/Institute</div>
                                <div class="font-sans text-cText">{{$user->company}}</div>
                            </span>
                        </div>
                        {{-- Buttons --}}
                        <div class="my-8 flex flex-row justify-between">
                            <a href="{{url()->previous()}}" class="font-PJSSemiBold rounded-2xl border border-cBlue
                            bg-cLinearGradientBlue
                            text-transparent bg-clip-text
                            shadow-bsBox px-8 py-3">
                                Back
                            </a>
                            <div class="flex flex-row">
                                <a href="/admin/ta/participant/edit/{{$user->id}}" class="font-PJSSemiBold rounded-2xl border border-cBlue
                                    bg-cLinearGradientBlue
                                    text-transparent bg-clip-text
                                    shadow-bsBox px-8 py-3 mr-6">
                                        Edit
                                </a>
                                <button onclick="openModal({{$user->id}}, 'ta')" class="font-PJSSemiBold rounded-2xl border border-cBlue
                                    bg-cLinearGradientBlue
                                    text-transparent bg-clip-text
                                    shadow-bsBox px-8 py-3">
                                        Remove
                                </button>
                            </div>
                        </div>
                        {{-- END --}}
                    </div>
                </div>
            </section>
        </div>
    </body>

@endsection
