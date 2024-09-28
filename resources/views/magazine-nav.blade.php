<nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 z-50">
  <div class="max-w-screen-xl flex flex-nowrap items-center justify-between mx-auto py-5 px-0 sm:p-5">
    <!-- logo -->
    <div class="grow md:grow-0 min-w-0">
      <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('profile-image/logo.png') }}" class="h-8 rounded-full" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Street Code</span>
      </a>
    </div>
    <!-- sub logo -->
    <div class="flex flex-col justify-center hidden md:block">
        <span class="text-2xl block text-center" style="font-family:'Times New Roman', Times, serif;">The Magazine</span>
        <span class="text-gray-500 block text-center text-[0.8rem]">News and Editorials from StockX</span>
    <!-- buttons -->
    </div>
    <div class="flex flex-row z-10">
        <div class="me-2 search-container">
            <div class="expandable flex flex-row w-[34px] md:w-[58px]">
                <button class="search-btn bg-white border border-black p-2 md:p-4 hover:bg-black hover:text-white expandBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 md:size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </button>
                <input type="text" class="w-full border border-black border-x-0 focus:outline-none focus:ring-0 focus:border-black placeholder:text-[0.8rem]" placeholder="Search for articles, series, etc.">
                <button class="expandBtn border border-black border-s-0 text-bold pe-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 md:size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
        </div>
        
        <button class="border border-black p-2 md:p-4 bg-black text-white hover:bg-white hover:text-black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
  </div>
</nav>