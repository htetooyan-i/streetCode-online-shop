<nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 z-40">
  <div class="max-w-screen-xl flex flex-wrap md:flex-nowrap items-center justify-between mx-auto py-5 px-0 sm:p-5">
    <!-- logo -->
    <div class="order-2 md:order-1 grow md:grow-0">
      <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('profile-image/logo.png') }}" class="h-8 rounded-full" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Street Code</span>
      </a>
    </div>
    <!-- search bar at laptop and larger size-->
    <div class="order-1 md:order-2 md:grow min-w-5 mx-5">
          <div class="small-search-icon block md:hidden" id="openButton">
              <svg id="searchIconOpen" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          <div class="search-box hidden md:block">   
              <form class="" method="post">
                @csrf
                  <div class="relative">
                      <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                          </svg>
                      </div>
                      <input type="text" name="searchProduct" id="searchProducts" class="grow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for brand, color, etc.">
                  </div>
              </form>
          </div>
    </div>
    <!-- profile and buttons -->
    <div class="flex items-center order-2 md:order-4 space-x-3 md:space-x-0 rtl:space-x-reverse">
        @if (session('email'))
          <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
            <span class="sr-only">Open user menu</span>
            @if (session('profile'))
              <img class="w-8 h-8 rounded-full" src="{{asset('storage/AccImages/'.session('profile'))}}" alt="user photo">
            @else
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 bg-white rounded-full">
                <path stroke-linecap="round" class="rounded-full" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>
            @endif
          </button>
        @else
          <a href="{{url('userControl/signup')}}" class="min-[480px]:block hidden px-3 py-1 border border-gray-900 rounded-2xl hover:text-white hover:bg-gray-900 transition-all duration-300">Login/SignUp</a>
          <a  href="{{url('userControl/signup')}}" class="hidden max-[480px]:block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </a>
        @endif
        <!-- Dropdown menu -->
        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">{{session('firstname')}} {{session('lastname')}}</span>
            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{session('email')}}</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="{{ url('user-acc/personal-detail/' . session('userId')) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Account</a>
            </li>
            <li>
              <a href="{{url('user-acc/logout')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <!-- navigation list -->
    <div class="items-center justify-between hidden w-full md:flex md:w-auto order-3 md:order-3 me-3" id="navbar-user">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-5 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
          <a href="{{url('news')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:font-extrabold dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">News</a>
        </li>
        <li>
          <a href="{{url('about')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:font-extrabold dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
          <a href="{{url('help')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:font-extrabold dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Help</a>
        </li>
        <li>
          <a href="{{url('sell')}}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:font-extrabold dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sell</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- search bar at phone and taplet size -->
  <div class="fixed top-0 w-full h-screen bg-gray-900 bg-opacity-50 hidden" id="small-screen-searchbox">
      <!-- search box -->
      <div class="w-full bg-white h-16 p-2">
        <form action="" class="flex justify-between items-center" method="post">
          @csrf
          <button>
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
            </svg>
          </button>
          <input type="text" name="searchProduct" class="border-0 border-b-2 border-black w-btn ms-4 focus:outline-none focus:ring-0 focus:border-black">
          <span id="closeButton">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
            </svg>
          </span>
        </form>
      </div>
  </div>
  <!-- categories list -->
  <div class="bg-gray-100 h-12 overflow-auto">
    <ul class="category-list flex flex-row justify-center items-center h-full rtl:space-x-reverse space-x-5 px-5">
      <li class="font-bold cursor-pointer hover:category-items">
        <a href="{{url('browse/jeans')}}">Jeans</a>
      </li>
      <li class="font-bold cursor-pointer hover:category-items">
        <a href="{{url('browse/hoodies')}}">Hoodies</a>
      </li>
      <li class="font-bold cursor-pointer hover:category-items">
        <a href="{{url('browse/sweatpants')}}">Sweatpants</a>
      </li>
      <li class="font-bold cursor-pointer hover:category-items">
        <a href="{{url('browse/Sneakers')}}">Sneakers</a>
      </li>
      <li class="font-bold cursor-pointer hover:category-items">
        <a href="{{url('browse/Men')}}">Men</a>
      </li>
      <li class="font-bold cursor-pointer hover:category-items">
        <a href="{{url('browse/Men')}}">Women</a>
      </li>
      <li class="font-bold cursor-pointer hover:category-items">
        <a href="{{url('browse/Kids')}}">Kids</a>
      </li>
    </ul>
  </div>
</nav>



