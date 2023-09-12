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
                    <div class="font-PJSExtraBold text-cBlack text-2xl tracking-wide mx-16 mb-2">Remove this Team?</div>
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
                    <a href="{{url('/admin/hack/announcement')}}"
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

                    <a href="{{url('/admin/hack/payment')}}"
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
                    text-transparent bg-clip-text mb-8">Team Participant</h1>
                    {{-- Search --}}
                    <form class="flex flex-row justify-between">
                        <a href="/admin/hack/participant/export" target="_blank"
                        class="w-max flex flex-row justify-end self-end text-sm border-cBlack border
                        rounded-xl font-PJSMedium bg-clip-text text-transparent bg-cLinearGradientBlue py-2 px-6">1 Klik 1 Doa untuk Rifian</a>
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
                                    {{$user->name}}
                                </div>
                            </span>
                            <div class="w-fit flex flex-row items-center">
                                {{-- <form method="post" class="mr-12">
                                    @csrf
                                    <button>
                                        <svg class="group cursor-pointer" width="24" height="24" viewBox="0 0 24 24">
                                            <path class="group-hover:fill-cBlue" d="M9 2H18C19.1 2 20 2.9 20 4V20C20 21.1 19.1 22 18 22H9C7.9 22 7 21.1 7 20V19C7
                                            18.7348 7.10536 18.4804 7.29289 18.2929C7.48043 18.1054 7.73478 18 8 18C8.26522 18 8.51957
                                            18.1054 8.70711 18.2929C8.89464 18.4804 9 18.7348 9 19V20H18V4H9V5C9 5.26522 8.89464 5.51957
                                            8.70711 5.70711C8.51957 5.89464 8.26522 6 8 6C7.73478 6 7.48043 5.89464 7.29289 5.70711C7.10536
                                            5.51957 7 5.26522 7 5V4C7 2.9 7.9 2 9 2Z" fill="#676767"/>
                                            <path class="group-hover:fill-cBlue" d="M10.795 16.2951C11.185 16.6851 11.815 16.6851 12.205 16.2951L15.793 12.7071C15.9805
                                            12.5196 16.0858 12.2653 16.0858 12.0001C16.0858 11.735 15.9805 11.4807 15.793 11.2931L12.205
                                            7.70513C12.0149 7.53332 11.7661 7.44112 11.5099 7.44758C11.2538 7.45405 11.0099 7.55869 10.8287
                                            7.73987C10.6476 7.92104 10.5429 8.16491 10.5365 8.42106C10.53 8.6772 10.6222 8.92604 10.794
                                            9.11613L12.67 11.0001H4C3.73478 11.0001 3.48043 11.1055 3.29289 11.293C3.10536 11.4806 3 11.7349
                                            3 12.0001C3 12.2653 3.10536 12.5197 3.29289 12.7072C3.48043 12.8948 3.73478 13.0001 4 13.0001H12.67L10.794
                                            14.8841C10.6073 15.0715 10.5026 15.3253 10.5028 15.5898C10.503 15.8543 10.6081 16.108 10.795 16.2951Z" fill="#676767"/>
                                        </svg>
                                    </button>
                                </form> --}}
                                <a href="/admin/hack/participant/view/{{$user->id}}" class="font-PJSSemiBold text-cText hover:text-cBlue mr-12">
                                    View
                                </a>
                                <button onclick="openModal({{$user->id}}, 'hackTeam')" class="font-PJSSemiBold text-cText hover:text-cBlue">
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
    </html>

@endsection
