@extends('Template.template')

@section('head')
    {{-- css --}}

    <!-- javascript -->
    <script src="{{ asset('js/admin/admin.js') }}?t={{ env('VERSION_TIME') }}"></script>
@endsection

@section('body')

    <body class="bg-cWhite relative overflow-x-hidden">
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
                            bg-cLinearGradientBlue
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
                <div class="flex flex-row items-center bg-cWhite rounded-2xl shadow-bsBox pt-5 px-12 mb-6">
                    <a href="{{url('/admin/tc/announcement')}}"
                        class="w-max text-lg text-cText tracking-wide
                        font-PJSMedium flex flex-col px-5
                        hover:bg-cLinearGradientBlue
                        hover:text-transparent hover:bg-clip-text group">
                        <h3>Announcement</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-0 group-hover:opacity-100"></span>
                    </a>

                    <div
                        class="w-max text-lg tracking-wide
                        font-PJSSemiBold flex flex-col px-5
                        bg-cLinearGradientBlue
                        text-transparent bg-clip-text group">
                        <h3>Participant</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-100"></span>
                    </div>

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
                <div class="min-h-[87%] flex flex-col bg-cWhite rounded-2xl shadow-bsBox pt-5 px-12">
                    <h1 class="float-left text-3xl font-PJSBold
                    bg-cLinearGradientBlue
                    text-transparent bg-clip-text mb-8">Participant</h1>
                    {{-- Search --}}
                    <form class="flex flex-row justify-between">
                        <a href="/admin/tc/participant/export" target="_blank"
                        class="w-max flex flex-row justify-end self-end text-sm border-cBlack border
                        rounded-xl font-PJSMedium bg-clip-text text-transparent bg-cLinearGradientBlue py-2 px-6">Rahasia Negara</a>
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
                                <div class="text-cText text-xl tracking-wide font-PJSSemiBold">
                                    {{$user->user->name}}
                                </div>
                            </span>
                            <div class="w-fit flex flex-row items-center">
                                <a href="{{route('viewTcParticipantPage', $user->user->id)}}" class="font-PJSSemiBold text-cText hover:text-cBlue mr-12">
                                    View
                                </a>
                                <a href="{{route('editTcParticipantPage', $user->user->id)}}" class="font-PJSSemiBold text-cText hover:text-cBlue mr-12">
                                    Edit
                                </a>
                                <button onclick="openModal({{$user->user->id}}, 'tc')" class="font-PJSSemiBold text-cText hover:text-cBlue">
                                    Remove
                                </button>
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
