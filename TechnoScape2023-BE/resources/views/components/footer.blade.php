<div class="lg:mx-12 mx-8 ml-7 lg:mt-20 md:mt-16 mt-2 text-cWhite flex flex-col items-center font-YSDarkRegular">
    <hr class="bg-[#808080] opacity-25 w-[90%] lg:mt-20 mt-16" />
    <!-- Before Footer -->
    <div class="flex flex-col-reverse text-center lg:text-left lg:flex-row justify-between my-10 lg:px-14 w-full">
        <!-- Left / Bottom -->
        <div class="flex flex-col md:flex-row lg:justify-start md:justify-evenly justify-start text-left">
            <div class="mb-10 md:mb-0 lg:mr-10 mr-0">
                <p class="mb-4 text-center md:text-left text-xs md:text-base">
                    Organized By
                </p>
                <img src="./assets/logo/bncc-black-bg.png" alt="Bina Nusantara Computer Club"
                    class="mx-auto md:mx-0 lg:w-64 w-24" />
            </div>
            <div
                class="flex lg:justify-start justify-around items-center lg:flex-col lg:w-full md:w-[70%] w-full lg:-ml-4 md:ml-0 ml-0 lg:space-y-8">
                <div class="space-y-3">
                    <p class="lg:w-max w-full text-[9px] md:text-sm lg:text-base text-center">
                        Official Learning Partner of
                    </p>
                    <img src="./assets/logo/gojek-logo.png" alt="Gojek" class="lg:w-2/3 md:w-48 w-32 pt-2" />
                </div>
                <div class="space-y-3">
                    <p class="lg:w-max w-full text-[9px] md:text-sm lg:text-base text-center">
                        Official Empowering Affiliate of
                    </p>
                    <img src="./assets/logo/Tiketcom-logo.png" alt="tiket.com" class="lg:w-2/3 md:w-44 w-32" />
                </div>
            </div>
        </div>
        <!-- Right / Top -->
        <div class="lg:hw-2/5 flex flex-col lg:items-start items-center lg:gap-16 gap-10">
            <div>
                <p class="lg:text-lg text-xs mb-4">
                    Subscribe to <b>TechnoScape</b>
                </p>
                <form action="" method="POST" class="flex justify-center my-1 lg:my-0 lg:justify-end">
                    <input type="email" id="input-email" name="email" placeholder="Masukkan Email Anda"
                        class="bg-cWhite text-[#595959] bsInput text-sm md:text-base py-3 pl-3 pr-7 lg:w-72 md:w-72 w-52 lg:pl-4 lg:pr-3 rounded-l-3xl my-2 shadow-input outline-none" />
                    <div id="subscribe"
                        class="bg-cLinearGradientBtn2 bg-[length:200%_100%] hover:bg-[100%_0] transition-all duration-500 font-YSDarkSemiBold text-cWhite text-xs md:text-base h-fit my-auto lg:py-3 py-[14px] px-6 rounded-r-3xl hover:ease-in-out cursor-pointer">
                        Subscribe
                    </div>
                </form>
            </div>
            <div class="flex justify-center lg:justify-end space-x-6 md:space-x-8 mb-10 lg:mb-0">
                <a href="https://medium.com/technoscape-bncc" target="_blank" rel="noopener noreferrer">
                    <img src="./assets/home/icon-medium.svg" alt="Medium" class="w-8 md:w-10/12" />
                </a>
                <a href="https://www.instagram.com/technoscapebncc/" target="_blank" rel="noopener noreferrer">
                    <img src="./assets/home/icon-instagram.svg" alt="Instagram" class="w-8 md:w-10/12" />
                </a>
                <a href="https://www.facebook.com/bina.nusantara.computer.club/" target="_blank"
                    rel="noopener noreferrer">
                    <img src="./assets/home/icon-facebook.svg" alt="Facebook" class="w-8 md:w-10/12" />
                </a>
                <a href="https://twitter.com/BNCC_Binus?s=20&t=JgmlGRnHpNmuHIxKIVV-Kg" target="_blank"
                    rel="noopener noreferrer">
                    <img src="./assets/home/icon-twitter.svg" alt="Twitter" class="w-8 md:w-10/12" />
                </a>
                <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/mycompany/" target="_blank"
                    rel="noopener noreferrer">
                    <img src="./assets/home/icon-linkedin.svg" alt="LinkedIn" class="w-8 md:w-10/12" />
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer
    class="flex flex-col-reverse sm:flex-row md:flex-row justify-between bg-cBlack3 text-cWhite text-center font-YSDarkMedium px-0 md:px-10 lg:px-20 py-4 lg:mx-10 rounded-t-full text-[0.6rem] lg:text-sm md:text-xs">
    <p>All Rights Reserved BNCC 2023 © Bina Nusantara Computer Club</p>
    <p class="mb-2 md:mb-0">
        <a href="{{ route('privacyPolicy') }}">Privacy Policy</a> &
        <a href="{{ route('termsAndConditions') }}">Terms of Service</a>
    </p>
</footer>
