<div class="text-center text-xl font-YSDarkBold mb-3">
    Upcoming tasks
</div>
<!-- kotak abu -->

    @if ($statusEvent == "null")
    <div class="flex flex-col rounded-3xl py-4 pb-3 px-6 gap-5">
        <img
            src="./assets/logo/technoscape-logo.svg"
            alt=""
        />
        <a href="/task">
            <div class="bg-cLinearGradientBtnBlue bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 rounded-xl text-center py-1 pb-2 font-YSDarkSemiBold">
                Register Now
            </div>
        </a>
    </div>
    @endif
    @if($tcUser && $tcUser->payment_status == "accepted")
    {{-- TC Tasks --}}
    <div class="flex flex-col rounded-3xl bg-cGrey py-4 px-6 mb-3">
        @php
            $currentDate = \Carbon\Carbon::now()->format('Y-m-d');
            $targetDate1 = '2023-06-12';
            $targetDate2 = '2023-06-13';
        @endphp
        @if($currentDate <= $targetDate1)
        {{-- Sebelum tanggal 13 Juni 2023 --}}
            <div class="flex justify-between items-center">
                <div class="text-xl font-YSDarkMedium">12 June</div>
                <div class="text-base font-YSDarkMedium">14.00-16.00</div>
            </div>
            <div class="text-center text-xl font-YSDarkExtraBold bg-cLinearGradientUpcommingtask text-transparent bg-clip-text">Techno Academy</div>
            <div class="text-xs text-center my-2">Navigate Digital Changes to Expand Future Opportunities</div>
            <a href="">
                <div class="bg-cLinearGradientBtnRed rounded-xl text-center py-1 font-YSDarkSemiBold mt-2">Join Now</div>
            </a>
        @elseif($currentDate == $targetDate2)
        {{-- Tanggal 13 Juni 2023 --}}
            <div class="flex justify-between items-center">
                <div class="text-xl font-YSDarkMedium">13 June</div>
                <div class="text-base font-YSDarkMedium">14.00-16.00</div>
            </div>
            <div class="text-center text-xl font-YSDarkExtraBold bg-cLinearGradientUpcommingtask text-transparent bg-clip-text">Techno Academy</div>
            <div class="text-xs text-center my-2">Navigate Digital Changes to Expand Future Opportunities</div>
            <a href="">
                <div class="bg-cLinearGradientBtnRed rounded-xl text-center py-1 font-YSDarkSemiBold mt-2">Join Now</div>
            </a>
        @elseif($currentDate > $targetDate2)
           {{-- Setelah tanggal 13 Juni 2023--}}
        @endif
    </div>
@endif


    @if($taUser && $taUser->payment_status == "accepted")
    {{-- TA Tasks --}}
    <div class="flex flex-col rounded-3xl bg-cGrey py-4 px-6 mb-3">
        <div class="flex justify-between items-center">
            <div class="text-xl font-YSDarkMedium">21 June</div>
            <div class="text-base font-YSDarkMedium">11/20-13.00</div>
        </div>
        <div class="text-center text-xl font-YSDarkExtraBold bg-cLinearGradientUpcommingtask text-transparent bg-clip-text">Techno Academy</div>
        <div class="text-xs text-center my-2">Navigate Digital Changes to Expand Future Opportunities</div>
        <a href="">
            <div class="bg-cLinearGradientBtnYellow rounded-xl text-center py-1 font-YSDarkSemiBold mt-2">Join Now</div>
        </a>
    </div>
    @endif
    @if($hackathonTeam && $hackathonTeam->payment_status == "accepted")
    {{-- Hackathon Tasks --}}
    <div class="flex flex-col rounded-3xl bg-cGrey py-4 px-6 mb-3">
        <div class="flex justify-between items-center">
            <div class="text-xl font-YSDarkMedium">21 June</div>
            <div class="text-base font-YSDarkMedium">11/20-13.00</div>
        </div>
        <div class="text-center text-xl font-YSDarkExtraBold bg-gradient-to-r from-cBlue2 to-cBlue3 text-transparent bg-clip-text">Hackathon 6.0</div>
        <div class="text-xs text-center my-2">Navigate Digital Changes to Expand Future Opportunities</div>
        <a href="">
            <div class="bg-cLinearGradientBtnBlue rounded-xl text-center py-1 font-YSDarkSemiBold mt-2">Join Now</div>
        </a>
    </div>
    @endif
