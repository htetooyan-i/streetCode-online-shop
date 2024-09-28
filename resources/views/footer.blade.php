<!-- footer -->
<footer id="footer" class="w-full bg-black text-white">
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 pt-10 px-5">
        <div class="links">
            <h6 class="mb-5">Quick link</h6>
            <ul>
                <li class="footer-list-items"><a href="{{url('about')}}">About Us</a></li>
                <li class="footer-list-items"><a href="{{url('help')}}">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="help">
            <h6 class="mb-5">Help</h6>
            <ul>
                <li class="footer-list-items">Payment</li>
                <li class="footer-list-items">Returns & Exchanges</li>
                <li class="footer-list-items">Delivery</li>
            </ul>
        </div>
        <div class="account">
            <h6 class="mb-5">My Account</h6>
            <ul>
                <li class="footer-list-items"><a href="{{ url('user-acc/personal-detail/' . session('userId')) }}">My Personal Information</a></li>
            </ul>
        </div>
        <div class="contact">
            <h6 class="mb-5">Contact Us</h6>
            <ul>
                <li class="footer-list-items flex flex-row items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                    <span class="ms-5">service@streetcode.com</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="max-w-screen-xl mx-auto mt-10">
        <hr>
        <p class="text-[0.7rem] text-gray-300 text-center py-5">@ 2024 StreetCode. All Rights Reserved.</p>
    </div>
</footer>
