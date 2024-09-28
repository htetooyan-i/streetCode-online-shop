@extends('master')
@section('content')
@include('navbar')
<div id="main-content" class="max-w-screen-xl md:mx-auto mb-10 mx-5">
    <span class="block text-[0.8rem] mt-5">Home / {{$product->Category}} / {{$product->Brand}}  / {{$product->Name}}</span>
    <div class="product-detail-container grid grid-cols-1 md:grid-cols-2 px-3">
        <div class="order-3 md:order-2 col-span-2 product-name mb-5 text-[30px] text-gray-600">
            {{$product->serie}}
        </div>
        <div class="order-2 md:order-1 col-span-2 brand-name text-[40px] jordan-font uppercase tracking-widest">
            {{$product->Name}}
        </div>
        <div class="order-1 md:order-3">
            <img src="{{ asset('product-images/'.$product->Name.'-'.$color.'.png') }}" alt=""/>
        </div>
        <div id="purchasing" class="relative order-4 md:order-4 lg:w-3/4 mx-auto w-full overflow-hidden">
            
            <div class="price-display">
                <div class=" mt-5 w-full p-4 size-list border border-gray-400 rounded-lg">
                    <p class="text-[0.8rem] font-semibold">There are no Asks at this time but you can still place a Bid and wait for a new seller to match your price</p>
                    @if ($InvalidResellProduct)
                        <button class="buy block text-center border border-red-500 text-white bg-red-500 py-2 w-full mt-3 rounded-full transition duration-200 font-extrabold">
                            There is no resell product
                        </button>
                    @else
                        <a href="{{url('product-detail/'.$product->id.'/'.$color.'/buy')}}" class="buy block text-center border border-black text-white bg-black hover:text-black hover:bg-white py-2 w-full mt-3 rounded-full transition duration-200 font-extrabold">
                            Place Bid
                        </a>
                    @endif
                    <span class="w-full mt-4 border border-gray-200 block"></span>
                    <div class="market-price mt-3 flex flex-row justify-between">
                        <span class="text-[0.8rem] text-gray-600">Last Sale: $128</span>
                        <button id="view-market-data" class="text-[0.8rem] font-bold text-red-600 underline" type="button">View Market Data</button>
                    </div>
                </div>
                
            </div>
            <div class="policy">
                <div id="purchasing-policy my-2">
                    <button type="button" class="policy-btn flex items-center justify-between w-full py-5 font-medium">
                            <div>
                                <span>Worry Free Purchasing</span>
                                <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">New</span>
                            </div>
                            
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                    </button>
                    <div class="policy-accordian overflow-hidden" style="height: 0;">
                        <p class="text-[0.8rem]">StockX is a live marketplace that provides the following options so you can purchase confidently</p>
                        <div class="flex flex-rows justify-start my-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>
                            <p class="font-bold ms-2">
                                <span class="block">No Fee Resale</span>
                                <span class="text-[0.8rem] font-normal">
                                    Don’t love it? Resell your purchase without any fees within 90 days of delivery.
                                    <a href="{{url('help')}}" class="underline text-red-700">Learn More</a>
                                </span>
                            </p>
                        </div>
                        <div class="flex flex-rows justify-start my-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                            </svg>
                            <p class="font-bold ms-2">
                                <span class="block">Our Promise</span>
                                <span class="text-[0.8rem] font-normal">
                                    We strive to earn and keep your trust. If we make a mistake, we'll make it right.
                                    <a href="{{url('help')}}" class="underline text-red-700">Learn More</a>
                                </span>
                            </p>
                        </div>
                    </div>      
                    <span class="w-full border border-gray-200 block"></span>
                </div>
                <div id="streetCode-policy my-2">
                    <button type="button" class="policy-btn flex items-center justify-between w-full py-5 font-medium">
                            <div class="flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                </svg>
                                <span class="ms-2">StreetCode Verified</span>
                            </div>
                            <div class="flex flex-row items-center">
                                <span class="text-[0.8rem] text-gray-500 me-3">Condition: New</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </div>
                    </button>
                    <div class="policy-accordian overflow-hidden" style="height: 0;">
                        <p class="text-[0.8rem] mb-2">
                            StockX Verified is our own designation and means that we inspect every item, every time.
                            <a href="{{url('help')}}" class="underline text-red-700">Learn More</a>
                        </p>
                    </div>
                    
                    <span class="w-full border border-gray-200 block mb-3"></span>
                </div>
            </div>
        </div>
    </div>
    <span class="w-full border border-gray-200 block"></span>
    <h3 class=" my-3">Product Details</h3>
    <div class="toggle-read-opacity toggle-product-details">
    </div>
    <div class="product-details-container grid grid-cols-1 md:grid-cols-3 overflow-hidden opacity-100" style="height: 120px;">
            <div class="detail-contents">
                <div class="grid grid-cols-3 mb-3">
                    <span class="text-[0.8rem]">Style</span>
                    <span class="text-[0.8rem] col-span-2 font-semibold">BB550LN1</span>
                </div>
                <div class="grid grid-cols-3 mb-3">
                    <span class="text-[0.8rem]">Colorway</span>
                    <span class="text-[0.8rem] col-span-2 font-semibold">{{$color}}</span>
                </div>
                <div class="grid grid-cols-3 mb-3">
                    <span class="text-[0.8rem]">Retail Price</span>
                    <span class="text-[0.8rem] col-span-2 font-semibold">{{$product->Retail_Price}}</span>
                </div>
                <div class="grid grid-cols-3 mb-3">
                    <span class="text-[0.8rem]">Release Date</span>
                    <span class="text-[0.8rem] col-span-2 font-semibold">{{$product->Product_Detail['release_date']}}</span>
                </div>
                <div class="grid grid-cols-3 mb-3">
                    <span class="text-[0.8rem]">Material</span>
                    <span class="text-[0.8rem] col-span-2 font-semibold">{{$product->Product_Detail['material']}}</span>
                </div>
            </div>
            <div class="detail-description col-span-2">
                <span class="font-semibold">Product Description</span>
                <p class="text-[0.8rem]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, vero molestias. Voluptates illum dolores libero maiores, provident aliquid ea aut est corporis quidem, delectus tempore accusamus. Qui optio aliquid suscipit?
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, in laudantium quae, tempore repellendus rem dolorem aspernatur amet quas temporibus fuga voluptate fugit tenetur obcaecati, esse ipsum possimus a eos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, in laudantium quae, tempore repellendus rem dolorem aspernatur amet quas temporibus fuga voluptate fugit tenetur obcaecati, esse ipsum possimus a eos.
                    <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis delectus repellendus totam dicta accusamus excepturi esse maiores? Eveniet quos perferendis eius molestiae rerum iste deleniti totam atque aliquam, voluptates pariatur!
                </p>
            </div>
    </div>
    <div class="my-3">
        <button class="toggle-product-description flex flex-row justify-center items-center hover:bg-black hover:text-white transition duration-300 w-[125px] mx-auto py-2">
            <span class="read-toggle me-2">Read More</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 product-display-toggle-down-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 product-display-toggle-up-icon hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>

        </button>
    </div>
    <span class="w-full border border-gray-200 block"></span>
    <h3 class="my-3">Related Products</h3>
    <div class="w-full overflow-x-auto">
        <div class="flex gap-2 mt-7">
            @foreach ($relatedProducts as $product )
                @foreach ( $product->avaliable_colorway as $color)
                    <div class="shrink-0 w-[202px] bg-white overflow-hidden h-56 border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 relative">
                        <a href="{{url('product-detail/'.$product->id.'/'.$color)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                            <div class="w-52 h-44">
                                <img class="rounded-t-lg object-contain w-full h-40" src="{{ asset('product-images/'.$product->Name.'-'.$color.'.png') }}" alt=""/>
                            </div>
                            <div class="ps-5 product-description">
                                {{$product->Name}} <br>
                                {{$product->Retail_Price}}
                            </div>
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    <span class="w-full border border-gray-200 block"></span>
    <h3 class="my-3">Price History</h3>
    <div class="my-3 grid grid-rows-1 md:grid-cols-2 gap-4">
        <div class="w-full bg-gray-300 rounded-lg p-4">
            <p class="font-bold text-[1.3rem]">$33 - $241</p>
            <span>12-Month Trade Range</span>
        </div>
        <div class="w-full bg-gray-300 rounded-lg p-4">
            <p class="font-bold text-[1.3rem]">$42 - $91</p>
            <span>All-Time Trade Range</span>
        </div>
        <div class="w-full bg-gray-300 rounded-lg p-4">
            <p class="font-bold text-[1.3rem]">38%</p>
            <span>Volatility</span>
        </div>
        <div class="w-full bg-gray-300 rounded-lg p-4">
            <p class="font-bold text-[1.3rem]">310</p>
            <span>Number of Sales</span>
        </div>
        <div class="w-full bg-gray-300 rounded-lg p-4">
            <p class="font-bold text-[1.3rem]">--</p>
            <span>Price Premium</span>
        </div>
        <div class="w-full bg-gray-300 rounded-lg p-4">
            <p class="font-bold text-[1.3rem]">$102</p>
            <span>Average Sale Price</span>
        </div>
    </div>
</div>
<div id="market-drawer-container" class="hidden z-50 absolute top-0 w-full h-screen" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" id="drawer-panel">
  <div id="market-drawer-bg" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  <div id="drawer-panel" class="fixed top-0 right-0 w-1/3 bg-white h-screen">
        <button type="button" id="close-button" class="block ms-auto me-2 mt-2 relative rounded-md text-black border border-black">
            <span class="absolute -inset-2.5"></span>
            <span class="sr-only">Close panel</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div id="drawer-title" class="m-2">
            <h3>All Sales</h3>
            <span class="text-gray-4200 text-xs">The prices below do not include applicable fees calculated at checkout.</span>
        </div>
        <span class="block border border-gray-200 w-full"></span>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="ms-[20px] w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Size
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sale Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $marketData as $data)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$data->created_at->format('m/d/y, g:i A')}}
                            </th>
                            <td class="px-6 py-4">
                                {{$data-> product_size}}
                            </td>
                            <td class="px-6 py-4">
                                ${{$data-> price}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

  </div>
</div>

@include('footer')
@include('to-up-btn')
@endsection