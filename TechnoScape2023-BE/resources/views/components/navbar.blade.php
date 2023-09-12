<!-- Navbar for Web -->
<nav
class="bg-[#000000] hidden fixed top-0 w-screen lg:flex items-center justify-between px-[100px] py-[30px] border-b-[1px] border-b-[#FFFFFF66] z-30"
id="web-nav"
>
<a href="/">
    <img
        class="w-20"
        src="./assets/logo/technoscape-logo-notext.svg"
        alt="technoscape-logo"
    />
</a>

<ul class="flex items-center gap-14 font-YSDarkSemiBold text-lg text-cWhite">
    @if($page === "tc")
        <li class="group relative">
            <a href="/techno-conference">
                <span class="-translate-y-2 transition-all duration-300 ease-in-out inline-block">Techno Conference</span>
                <span
                    class="absolute left-0 right-0 mx-auto -bottom-2 h-1 bg-tcLinearGradient transition-all duration-300 ease-in-out w-[70px] rounded-full shadow-[0px_0px_6px_1px_#FF6E6EB3]"></span>
            </a>
        </li>
    @else
        <li class="group relative">
            <a href="/techno-conference">
                <span class="group-hover:-translate-y-2 transition-all duration-300 ease-in-out inline-block">Techno Conference</span>
                <span
                    class="absolute left-0 right-0 mx-auto -bottom-2 w-0 h-1 bg-tcLinearGradient transition-all duration-300 ease-in-out group-hover:w-[70px] rounded-full group-hover:shadow-[0px_0px_6px_1px_#FF6E6EB3]"></span>
            </a>
        </li>
    @endif

    @if($page === "ta")
    <li class="group relative">
        <a href="/techno-academy">
            <span class="-translate-y-2 transition-all duration-300 ease-in-out inline-block">Techno Academy</span>
            <span
                class="absolute left-0 right-0 mx-auto -bottom-2 h-1 bg-taLinearGradient transition-all duration-300 ease-in-out w-[70px] rounded-full shadow-[0px_0px_6px_1px_#FFFD96B3]"></span>
        </a>
    </li>
    @else
        <li class="group relative">
            <a href="/techno-academy">
                <span class="group-hover:-translate-y-2 transition-all duration-300 ease-in-out inline-block">Techno Academy</span>
                <span
                    class="absolute left-0 right-0 mx-auto -bottom-2 w-0 h-1 bg-taLinearGradient transition-all duration-300 ease-in-out group-hover:w-[70px] rounded-full group-hover:shadow-[0px_0px_6px_1px_#FFFD96B3]"></span>
            </a>
        </li>
    @endif

    @if($page === "hack")
    <li class="group relative">
        <a href="/hackathon">
            <span class="-translate-y-2 transition-all duration-300 ease-in-out inline-block">Hackathon 6.0</span>
            <span
                class="absolute left-0 right-0 mx-auto -bottom-2 h-1 bg-hackLinearGradient transition-all duration-300 ease-in-out w-[70px] rounded-full shadow-[0px_0px_6px_1px_#246FFFB3]"></span>
        </a>
    </li>
    @else
        <li class="group relative">
            <a href="/hackathon">
                <span class="group-hover:-translate-y-2 transition-all duration-300 ease-in-out inline-block">Hackathon 6.0</span>
                <span
                    class="absolute left-0 right-0 mx-auto -bottom-2 w-0 h-1 bg-hackLinearGradient transition-all duration-300 ease-in-out group-hover:w-[70px] rounded-full group-hover:shadow-[0px_0px_6px_1px_#246FFFB3]"></span>
            </a>
        </li>
    @endif
</ul>

@guest
<a href="/login"
    class="sign-in-btn font-YSDarkSemiBold text-lg border-2 border-cWhite pt-1 pb-2 px-10 rounded-full transition-colors hover:bg-cWhite hover:text-cBlack text-cWhite"
    >
        Sign In
</a>
@endguest

@auth
    <a href="/dashboard"
        class="sign-in-btn font-YSDarkSemiBold text-lg border-2 border-[#FFFFFF] pt-1 pb-2 px-10 rounded-full transition-colors hover:bg-cWhite hover:text-cBlack text-cWhite"
    >
       Dashboard
</a>
@endauth
</nav>
<!-- Navbar for Mobile -->
<nav
class="flex fixed top-0 w-screen bg-[#000000] z-20 lg:hidden justify-between px-8 py-8 md:px-14 font-YSDarkMedium text-lg text-cWhite border-b-[1px] border-b-[#FFFFFF66]"
id="mob-nav"
>
<a href="/">
    <img
    src="./assets/logo/technoscape-logo-notext.svg"
    alt="technoscape-logo"
    class="md:w-16 w-12"
    />
</a>
<button id="navToggler">
    <img
        src="./assets/home/circle-hamburger.svg"
        class="w-10 md:w-14"
        alt="burger-button"
    />
</button>
<div
    id="navMobile"
    class="navMobile bg-[#000000BF] fixed h-screen right-0 top-0 py-8 md:py-10 px-8 md:px-16 z-30 hidden"
>
    <img
        src="./assets/navbar/icon-x.svg"
        alt="X-Button"
        class="ml-auto w-10 mb-14"
        id="xButtonNav"
    />
    <ul
        class="space-y-12 md:space-y-20 text-sm pr-9 pl-0 md:text-2xl md:pr-20 md:pl-4"
    >
        @if($page === "tc")
        <li class="group relative w-fit">
            <a href="/techno-conference">
                <span>Techno Conference</span>
                <span
                    class="absolute left-0 -bottom-4 w-full h-1 bg-tcLinearGradient transition-all rounded-full shadow-[0px_0px_6px_1px_#FF6E6EB3]"></span>
            </a>
        </li>
        @else
        <li class="group relative w-fit">
            <a href="/techno-conference">
                <span>Techno Conference</span>
            </a>
        </li>
        @endif

        @if($page === "ta")
        <li class="group relative w-fit">
            <a href="/techno-academy">
                <span>Techno Academy</span>
                <span
                    class="absolute left-0 -bottom-4 h-1 bg-taLinearGradient transition-all w-full rounded-full shadow-[0px_0px_6px_1px_#FFFD96B3]"></span>
            </a>
        </li>
        @else
        <li class="group relative w-fit">
            <a href="/techno-academy">
                <span>Techno Academy</span>
            </a>
        </li>
        @endif

        @if($page === "hack")
        <li class="group relative w-fit">
            <a href="/hackathon">
                <span>Hackathon 6.0</span>
                <span
                    class="absolute left-0 -bottom-4 h-1 bg-hackLinearGradient transition-all w-full rounded-full shadow-[0px_0px_6px_1px_#246FFFB3]"></span>
            </a>
        </li>
        @else
        <li class="group relative w-fit">
            <a href="/hackathon">
                <span>Hackathon 6.0</span>
            </a>
        </li>
        @endif
    </ul>
    @guest
    <form action="/login">
        <button
            class="sign-in-btn border py-2 pb-3 px-10 md:py-4 md:pb-5 rounded-3xl md:rounded-full w-full mt-80 md:mt-[30rem] mx-auto text-sm md:text-2xl"
        >
            Sign In
        </button>
    </form>
    @endguest
    @auth
    <form action="/dashboard">
        <button
            class="sign-in-btn border py-2 pb-3 px-10 md:py-4 md:pb-5 rounded-3xl md:rounded-full w-full mt-80 md:mt-[30rem] mx-auto text-sm md:text-2xl"
        >
            Dashboard
        </button>
    </form>
    @endauth
</div>
</nav>
