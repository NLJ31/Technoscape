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
            <div class="flex flex-col items-center bg-cWhite rounded-3xl p-4 px-6 pb-12">
                <img onclick="closeAnnouncementModal()" class="x w-9 float-right cursor-pointer self-end" src="{{asset('assets/admin/participant/x.svg')}}" alt="">
                <form class="flex flex-col" action="{{route('storeHackAnnouncement')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="flex flex-col font-PJSBold bg-cLinearGradientBlue
                    text-transparent bg-clip-text mb-2">Title
                    </label>
                    <input id="title" class="w-[45rem] font-PJSSemiBold text-cBlack
                    bg-cBgInput rounded-2xl border-none focus:ring-0
                    placeholder:text-ctextmodal px-4 mb-4" type="text" placeholder="Type the title of announcement here" name="title">
                    <label for="title" class="font-PJSBold bg-cLinearGradientBlue
                    text-transparent bg-clip-text mb-2">Content
                    </label>
                    <textarea id="announcement" class="h-[15rem] text-base font-sans text-cBlack text-left
                    bg-cBgInput rounded-2xl border-none focus:ring-0
                    no-resize placeholder:text-ctextmodal px-4 mb-8" placeholder="Type the content of announcement here..." name="announcement"></textarea>
                    <input id="event_type" type="hidden" name="event_type" value="ts">
                    <div class="flex flex-row justify-between">
                        <input type="file" id="file" name="file" class="hidden">
                        <label for="file" class="flex flex-row text-base font-PJSSemiBold rounded-2xl border  border-cBlack
                        bg-cLinearGradientBlue cursor-pointer
                        text-transparent bg-clip-text px-6 py-2">Attach File
                            <img class="w-4 ml-2" src="{{asset('assets/admin/attach.svg')}}" alt="">
                        </label>
                        <button class="flex flex-row text-cWhite text-base font-PJSSemiBold tracking-wider
                        bg-cLinearGradientBlue drop-shadow-dsBlueDecorButton
                        rounded-2xl px-9 py-2">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Delete Modal --}}
        <div id="deleteModal" class="hidden w-screen h-full bg-[#67676780] flex flex-col items-center justify-center z-10 absolute  overflow-hidden">
            <div class="flex flex-col items-center bg-cWhite rounded-xl p-4 pb-12">
                <img onclick="closeAnnouncementDeleteModal()" class="x w-9 float-right cursor-pointer self-end" src="{{asset('assets/admin/participant/x.svg')}}" alt="">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-20 mb-4" src="{{asset('assets/admin/participant/trash.svg')}}" alt="">
                    <div class="font-PJSExtraBold text-cBlack text-2xl tracking-wide mx-16 mb-2">Remove this announcement?</div>
                    <div class="font-PJSMedium text-cBlack text-lg tracking-wide mb-8">This action can not be undone</div>
                    <div class="flex flex-row">
                        <button onclick="closeAnnouncementDeleteModal()" class="font-PJSSemiBold rounded-2xl
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
                    <div
                        class="w-max text-lg tracking-wide
                        font-PJSSemiBold flex flex-col px-5
                        bg-cLinearGradientBlue
                        text-transparent bg-clip-text group">
                        <h3>Announcement</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-100"></span>
                    </div>

                    <a href="{{url('/admin/hack/participant')}}"
                        class="w-max text-lg text-cText tracking-wide
                        font-PJSMedium flex flex-col px-5
                        hover:bg-cLinearGradientBlue
                        hover:text-transparent hover:bg-clip-text group">
                        <h3>Participant</h3>
                        <span class="mt-4 w-auto h-1 bg-cLinearGradientBlue rounded-t-full opacity-0 group-hover:opacity-100"></span>
                    </a>

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
                @if ($announcements->isEmpty())
                {{-- No Announcement --}}
                <div class="min-h-[87%] flex flex-col justify-center relative bg-cWhite rounded-2xl shadow-bsBox pt-5 px-12">
                    <h1 class="float-left text-3xl font-PJSBold absolute left-12 top-6
                    bg-cLinearGradientBlue
                    text-transparent bg-clip-text">Announcement</h1>
                    <div class="flex flex-col items-center">
                        <h1 class="text-cDarkerGray text-2xl font-PJSBold tracking-wide mb-2">There is no announcement!</h1>
                        <p class="text-cText text-lg font-PJSMedium tracking-wide mb-8">You haven't created any announcement yet.</p>
                        <button onclick="openAnnouncementModal()" class="text-cWhite text-lg font-PJSSemiBold tracking-wider
                        bg-cLinearGradientBlue drop-shadow-dsBlueDecorButton
                        rounded-2xl px-9 py-3">+ Create New</button>
                    </div>
                </div>

                @else
                {{-- Announcement Exist --}}
                <div class="min-h-[87%] flex flex-col bg-cWhite rounded-3xl shadow-bsBox pt-5 px-12 pb-8">
                    <h1 class="float-left text-3xl font-PJSBold left-12 top-6
                    bg-cLinearGradientBlue
                    text-transparent bg-clip-text mb-8">Announcement</h1>

                    <div class="flex flex-col items-end">
                        <button onclick="openAnnouncementModal()" class="text-cWhite text-lg font-PJSSemiBold tracking-wider
                        bg-cLinearGradientBlue drop-shadow-dsBlueDecorButton
                        rounded-2xl px-9 py-3 mb-4">+ Create New</button>
                        @foreach ($announcements as $announcement)
                        <div class="box w-full bg-cLinearGradientBlue rounded-2xl py-6 pb-4 px-8 mb-4">
                            <div class="flex flex-row justify-between items-center mb-4">
                                <div class="flex flex-col">
                                    <h1 class="text-cWhite text-2xl font-PJSSemiBold">{{$announcement->title}}</h1>
                                    <p class="text-cWhite text-base font-PJSLight">{{$announcement->created_at}}</p>
                                </div>
                                <img class="arrow cursor-pointer transform rotate-180
                                transition motion-reduce:transition-none ease-in-out" src="{{asset('assets/admin/up.svg')}}" alt="" onclick="expandAnnouncement(this)">
                            </div>
                            <div class="content hidden w-full bg-[#FAFAFF1A] rounded-xl py-4 px-4 mb-4">
                                <pre class="w-full text-cWhite text-left font-PJSLight tracking-wide whitespace-pre-line mb-4">
                                    {{$announcement->announcement}}
                                </pre>
                                <div class="flex flex-row justify-between">
                                    @if ($announcement->file !== 'nothing')
                                    <a href="{{ url('storage/announcement/hack/'.$announcement->file) }}" target="blank_" class="flex flex-row items-center bg-cWhite text-cBlue rounded-lg
                                    font-PJSSemiBold tracking-normal cursor-pointer pl-4 py-3">
                                        <span class="bg-cLinearGradientBlue
                                        text-transparent bg-clip-text mr-4">
                                        {{$announcement->file}}
                                        </span>
                                        <img class="bg-[#F3F3FF] pr-4 pl-4" src="{{asset('assets/admin/download.svg')}}" alt="">
                                    </a>
                                    @endif
                                    <button onclick="openAnnouncementDeleteModal({{$announcement->id}}, 'hack')" class="flex flex-row items-center bg-cWhite text-cBlue rounded-lg
                                    font-PJSSemiBold tracking-normal px-6 py-3">
                                        <img class="mr-2" src="{{asset('assets/admin/trash.svg')}}" alt="">
                                        <span class="bg-cLinearGradientBlue
                                        text-transparent bg-clip-text">
                                            Delete
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="font-PJSSemiBold text-cBlack">
                        {{$announcements->links()}}
                    </div>
                </div>
                @endif
            </section>
        </div>
    </body>
    </html>

@endsection
