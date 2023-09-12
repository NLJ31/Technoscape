@extends('Template.template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
    <script src="{{ asset('js/admin/admin.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection

@section('body')

    <body class="bg-cWhite2">
        <div class="grid grid-cols-4 gap-6 p-10">
            {{-- Side Bar --}}
            @include('admin.components.sidebar')

            {{-- Navbar + Content --}}
            <section class="col-span-3">
                {{-- Navbar --}}
                <div class="flex flex-row items-center bg-cGray2 rounded-2xl shadow-bsBox pt-5 px-12 mb-6">
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
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-0 group-hover:opacity-100"></span>
                    </a>
                </div>

                {{-- Content --}}
                <div class="min-h-[87%] flex flex-col bg-cGray2 rounded-2xl shadow-bsBox pt-5 px-12">
                    <h1 class="float-left text-3xl font-PJSBold
                    bg-cLinearGradientBlue
                    text-transparent bg-clip-text mb-8">Participant</h1>
                    {{-- Participant --}}
                    <form class="flex flex-col mt-8" action="{{route('updateTcParticipant', $user->id )}}" method="post">
                        @csrf
                        @method('patch')
                        {{-- Full Name --}}
                        <div class="w-full flex flex-col bg-cGray2 mb-4">
                            <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text mb-2">Full Name</div>
                            <div class="w-full flex flex-row bg-cGrayInput rounded-2xl py-4">
                                <img class="w-6 ml-6 mr-2" src="{{asset('assets/admin/participant/people.svg')}}" alt="">
                                <input class="w-full sans text-cText bg-cGrayInput border-none focus:ring-0 focus:border-0 focus:outline-none
                                placeholder:text-cPlaceholder" type="text" value="{{$user->name}}" name="name"
                                placeholder="Full Name">
                            </div>
                        </div>
                        {{-- Place Of Birth --}}
                        <div class="w-full flex flex-col bg-cGray2 mb-4">
                            <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text mb-2">Place Of Birth</div>
                            <div class="w-full flex flex-row bg-cGrayInput rounded-2xl py-4">
                                <img class="w-6 ml-6 mr-2" src="{{asset('assets/admin/participant/location.svg')}}" alt="">
                                <input class="w-full sans text-cText bg-cGrayInput border-none focus:ring-0 focus:border-0 focus:outline-none
                                placeholder:text-cPlaceholder" type="text" value="{{$user->place_of_birth}}" name="place_of_birth"
                                placeholder="Place Of Birth">
                            </div>
                        </div>
                        {{-- Date of Birth --}}
                        <div class="w-full flex flex-col bg-cGray2 mb-4">
                            <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text mb-2">Date Of Birth</div>
                            <div class="w-full flex flex-row bg-cGrayInput rounded-2xl py-4">
                                <img class="w-6 ml-6 mr-2" src="{{asset('assets/admin/participant/calendar.svg')}}" alt="">
                                <input class="w-full sans text-cText bg-cGrayInput border-none focus:ring-0 focus:border-0 focus:outline-none
                                placeholder:text-cPlaceholder" type="date" value="{{$user->date_of_birth}}" name="date_of_birth">
                            </div>
                        </div>
                        {{-- Gender --}}
                        <div class="w-full flex flex-col bg-cGray2 mb-4">
                            <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text mb-2">Gender</div>
                            <div class="w-full flex flex-row bg-cGrayInput rounded-2xl py-4">
                                <img class="w-6 ml-6 mr-2" src="{{asset('assets/admin/participant/gender.svg')}}" alt="">
                                <input class="w-full sans text-cText bg-cGrayInput border-none focus:ring-0 focus:border-0 focus:outline-none
                                placeholder:text-cPlaceholder" type="text" value="{{$user->gender}}" name="gender"
                                placeholder="male or female">
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="w-full flex flex-col bg-cGray2 mb-4">
                            <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text mb-2">Email</div>
                            <div class="w-full flex flex-row bg-cGrayInput rounded-2xl py-4">
                                <img class="w-6 ml-6 mr-2" src="{{asset('assets/admin/participant/email.svg')}}" alt="">
                                <input class="w-full sans text-cText bg-cGrayInput border-none focus:ring-0 focus:border-0 focus:outline-none
                                placeholder:text-cPlaceholder" type="email" value="{{$user->email}}" name="email"
                                placeholder="email@gmail.com">
                            </div>
                        </div>
                        {{-- LINE ID --}}
                        <div class="w-full flex flex-col bg-cGray2 mb-4">
                            <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text mb-2">LINE ID</div>
                            <div class="w-full flex flex-row bg-cGrayInput rounded-2xl py-4">
                                <img class="w-6 ml-6 mr-2" src="{{asset('assets/admin/participant/line.svg')}}" alt="">
                                <input class="w-full sans text-cText bg-cGrayInput border-none focus:ring-0 focus:border-0 focus:outline-none
                                placeholder:text-cPlaceholder" type="text" value="{{$user->line_id}}" name="line_id"
                                placeholder="LINE ID">
                            </div>
                        </div>
                        {{-- Whatsapp Number --}}
                        <div class="w-full flex flex-col bg-cGray2 mb-4">
                            <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text mb-2">Whatsapp</div>
                            <div class="w-full flex flex-row bg-cGrayInput rounded-2xl py-4">
                                <img class="w-6 ml-6 mr-2" src="{{asset('assets/admin/participant/whatsapp.svg')}}" alt="">
                                <input class="w-full sans text-cText bg-cGrayInput border-none focus:ring-0 focus:border-0 focus:outline-none
                                placeholder:text-cPlaceholder" type="text" value="{{$user->whatsapp}}" name="whatsapp"
                                placeholder="+6281283529574">
                            </div>
                        </div>
                        {{-- Company/Institute --}}
                        <div class="w-full flex flex-col bg-cGray2 mb-4">
                            <div class="font-PJSSemiBold
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text mb-2">Company</div>
                            <div class="w-full flex flex-row bg-cGrayInput rounded-2xl py-4">
                                <img class="w-6 ml-6 mr-2" src="{{asset('assets/admin/participant/company.svg')}}" alt="">
                                <input class="w-full sans text-cText bg-cGrayInput border-none focus:ring-0 focus:border-0 focus:outline-none
                                placeholder:text-cPlaceholder" type="text" value="{{$user->company}}" name="company"
                                placeholder="Company/Institute">
                            </div>
                        </div>
                        {{-- Buttons --}}
                        <div class="my-8 mb-12 flex flex-row justify-between">
                            <a href="{{url()->previous()}}" class="font-PJSSemiBold rounded-2xl border border-cBlue
                                bg-cLinearGradientBlue
                                text-transparent bg-clip-text
                                shadow-bsBox px-8 py-3 mr-6">
                                    Cancel Edit
                            </a>
                            <button class="font-PJSSemiBold text-cWhite tracking-wider rounded-2xl
                            bg-cLinearGradientBlue drop-shadow-dsBlueDecor
                            px-10 py-3">
                                    Save Changes
                            </button>
                        </div>
                        {{-- END --}}
                    </form>
                </div>
            </section>
        </div>
    </body>


</body>
@endsection
