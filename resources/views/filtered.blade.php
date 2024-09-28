@extends('master')
@section('content')
@include('navbar')
<div class="max-w-screen-xl md:mx-auto mb-10 mx-5">
    <div id="bowseName" class="w-full bg-gray-100 px-5 py-8 mt-5">
        <h3 class="font-bold mb-3 capitalize">{{$category}}</h3>
        <span>Buy and Sell items for <span class="capitalize">{{$category}}</span> on StockX. Every item is StockX Verified.</span>
    </div>
    <div id="main-content" class="flex flex-nowrap mt-5 flex-col md:flex-row justify-center">
        <!-- <div class="w-full md:w-[33%]" style="min-width:200px">
            <div id="brand-accodian">
                <button id="brandToggleBtn" type="button" class="flex items-center justify-between w-full py-5 font-medium px-5 transition-transform duration-300 ease-out">
                    <span class="uppercase">Brands</span>      
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 brand-toggle-arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                <div class="brandsAccordion overflow-hidden transition-height duration-300 ease-out" style="height: 0;">
                    <form action="">
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nike</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nike</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nike</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nike</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nike</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nike</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nike</label>
                        </div>
                    </form>
                </div>      
                <span class="w-full border border-gray-200 block"></span>
            </div>
            <div id="activity-accodian">
                <button id="activityToggleBtn" type="button" class="flex items-center justify-between w-full py-5 font-medium px-5 transition-transform duration-300 ease-out">
                    <span class="uppercase">Activity</span>      
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 activity-toggle-arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                <div class="activityAccordion overflow-hidden transition-height duration-300 ease-out" style="height: 0;">
                    <form action="">
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Basketball</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Basketball</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Basketball</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Basketball</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Basketball</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Basketball</label>
                        </div>
                        <div class="flex items-center ps-3">
                            <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-black bg-white border-black">
                            <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Basketball</label>
                        </div>
                    </form>
                </div>      
                <span class="w-full border border-gray-200 block"></span>
            </div>
            <div id="price-accodian">
                <button id="priceToggleBtn" type="button" class="flex items-center justify-between w-full py-5 font-medium px-5 transition-transform duration-300 ease-out">
                    <span class="uppercase">Price</span>      
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 price-toggle-arrow" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                <div class="priceAccordion overflow-hidden transition-height duration-300 ease-out" style="height: 0;">
                    <form action="" class="mb-5 text-center">
                        <label for="min-price">Min price</label>
                        <input type="number" id="min-price" class="p-0 px-2 w-[70px] m-0 appearance-none focus:outline-none focus:ring-0 focus:border-black out-of-range:border-red-500 peer" min="0" max="9999">
                        <span>:</span>
                        <input type="number" id="max-price" class="p-0 px-2 w-[70px] m-0 appearance-none focus:outline-none focus:ring-0 focus:border-black out-of-range:border-red-500 peer" min="1" max="10000">
                        <label for="max-price">Max price</label>
                        <p class="mt-2 invisible peer-out-of-range:visible text-pink-600 text-sm">
                            Pice have to be between 1$ and 100000$
                        </p>
                    </form>
                </div>      
                <span class="w-full border border-gray-200 block"></span>
            </div>
        </div> -->
        <div class="mt-5 md:mt-0 px-5 grow flex flex-col justify-center items-center">
            <div id="header" class="w-full">
                <div class="route flex justify-between relative">
                    <!-- <span class="text-sm md:text-base text-gray-400">Gender / <span class="capitalize">{{$category}}</span></span> -->
                    <div class="sort absolute top-0 right-0 h-auto bg-gray-100 rounded-2xl border border-black">
                        <button class="text-[0.7rem] flex flex-row items-center px-5 py-2 w-full justify-center sort-btn">
                            <span class="me-2">Sort Featured |</span>      
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 sort-arrow-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                        <div class="sort-accordian hidden">
                            <ul>
                                <li class="px-2 py-3 border-b border-black">Featured</li>
                                <li class="px-2 py-3 border-b border-black">Most Popular</li>
                                <li class="px-2 py-3 border-b border-black">New Lowest Asks</li>
                                <li class="px-2 py-3 border-b border-black">New Highest Bids</li>
                                <li class="px-2 py-3 border-b border-black">AverageSale Price</li>
                                <li class="px-2 py-3">New Highest Bids</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($products) > 0)
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 mt-10">
                    @foreach ($products as $product )
                        @foreach ( $product->avaliable_colorway as $color)
                            <div class="max-w-sm bg-white overflow-hidden h-56 border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                <a href="{{url('product-detail/'.$product->id.'/'.$color)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                    </svg>
                                    <div>
                                        <img class="rounded-t-lg object-contain w-full h-40" src="{{ asset('product-images/'.$product->Name.'-'.$color.'.png') }}" alt=""/>
                                    </div>
                                    <div class="ps-5 product-description cursor-text">
                                        <span class="cursor-text">{{$product->Name}}</span><br>
                                        <span class="cursor-text">$ {{$product->Retail_Price}}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <!-- <nav id="pagination" aria-label="Page navigation example" class="mt-10">
                    <ul class="flex items-center -space-x-px h-8 text-sm">
                        <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                        </a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white active-pagination">3</a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                        </a>
                        </li>
                    </ul>
                </nav> -->
            @else
                @include('no-product-display')
            @endif
            
        </div>
    </div>
</div>

@include('footer')
@endsection