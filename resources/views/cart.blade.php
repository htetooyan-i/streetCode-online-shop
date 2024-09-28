@extends('master')
@section('content')
@include('navbar')
@if(session('success'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Success!</span>
        <div class="ms-3 text-sm font-medium">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
@endif
@if(session('success-checkout'))
    <div id="checkout-design" class="h-screen w-full absolute top-0 bg-black z-40 bg-opacity-50">
        <div id="alert-3" class="w-[600px] absolute z-50 flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2" role="alert">
            <div class="ms-3 text-sm font-medium relative">
                <button id="checkout-design-btn" type="button" class="absolute right-0 ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-24 block mx-auto text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <div class="flex items-start text-left">
                        <span class="sr-only text-left text-green-800">Info</span>
                        <h3 class="text-lg font-medium text-left text-green-800">🎉 Thank You for Your Purchase!</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm">
                        <p class="mb-2 text-left text-green-800">Your order has been successfully placed. We’re excited to get your items to you as soon as possible.</p>
                        <div class="mb-2 text-left text-green-800">
                            <p>
                                Order Number: # {{ session('success-checkout') }}
                            </p>
                            <p>Estimated Delivery: 3-5 business days</p>
                        </div>
                        <p class="mb-2 text-left text-green-800">A confirmation email with your order details has been sent to your inbox. If you have any questions or need further assistance, feel free to reach out to our customer support.</p>
                        <span class="my-2 text-green-800">Thank you for shopping with us!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@if(session('fail-checkout'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Success!</span>
        <div class="ms-3 text-sm font-medium">
            <span class="block sm:inline">{{ session('fail-checkout') }}</span>
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
@endif
@if(session('remove'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Success!</span>
        <div class="ms-3 text-sm font-medium">
            <span class="block sm:inline">{{ session('remove') }}</span>
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
@endif
<h1 class="uppercase jordan-font font-semibold my-5">Shopping Cart</h1>
<div id="cart" class="max-w-screen-xl md:mx-auto mb-10 mx-5 flex flex-col {{ count($cart) > 0 ? '': 'items-center' }} lg:flex-row">
    <div class="w-full">
        @if (count($cart) > 0)
        <div id="items-display" class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bid Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Seller Response
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                </thead>
                <tbody class="scrollable-tbody ">
                @foreach ($cart as $item )
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <td scope="row" class="flex flex-row items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <p class="me-3">{{$item['name']}}</p>
                                <div class="h-[100px] w-[100px] flex items-center">
                                    <img src="{{ asset('product-images/'.$item['product_name'].'-'.$item['product_color'].'.png') }}" alt=""/>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                $<span class="product-price">{{$item['bid_price']}}</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="py-1 response-div rounded-lg">
                                    <span class="capitalize response">{{$item['response']}}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex flex-nowrap">
                                <a href="{{url('cart/edit/'.$item->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline me-5 border border-blue-600 px-3 py-2">Edit</a>
                                <a href="{{url('cart/remove/'.$item->id)}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline border border-red-600 px-3 py-2 ">Remove</a>
                            </td>
                     </tr>  
                @endforeach       
                </tbody>
            </table>
        </div>
        @else
        <!-- no-items-in-cart-display -->
        <div id="no-items-display" class="flex flex-col justify-center items-center">
            <h3 class="mb-5">There is no item in cart</h3>
            <a href="{{url('/')}}" class="px-10 py-2 border border-black bg-black text-white me-5 flex flex-row justify-between items-center">
                <span class="block me-3">Continue Shopping</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </a>
        </div>
        @endif
    </div>
    <div class="w-full min-w-[250px]">
        <form action="">
            <div class="z-10 bg-white px-3 py-4 m-5 rounded-md overflow-hidden h-auto">
                <div class="block relative flex flex-row justify-between">
                    <span class="block font-bold">Subtotal</span>
                </div>
                <span class="text-sm text-gray-500 block mt-3">Includes Verification Fee. Final price calculated at checkout.</span>
                <div class="prices mt-3">
                    <div id="item-price" class="pb-3 flex justify-between border-dashed border-b-[1px] border-black ">
                        <p>Item Price</p>
                        <p class="item-price">${{$itemPrice}}</p>
                    </div>
                </div>
                <div class="prices mt-3">
                    <div id="" class="pb-3 flex justify-between border-dashed border-b-[1px] border-black ">
                        <p>Processing Fee</p>
                        <p class="processing-fee">${{$processFee}}</p>
                    </div>
                </div>
                <div class="prices mt-3">
                    <div id="" class="pb-3 flex justify-between border-b-[1px] border-black ">
                        <p>Shipping Fee</p>
                        <p class="shipping-fee">${{$shippingFee}}</p>
                    </div>
                </div>
                <div class="prices mt-3">
                    <div id="" class="pb-3 flex justify-between ">
                        <p>Sub Total</p>
                        <p class="font-semibold total-price">${{$totalPrice}}</p>
                    </div>
                </div>
                <span class="text-sm text-gray-500">Includes Verification Fee. Final price calculated at checkout.</span>
            </div>
        </form>
    </div>
</div>
<div id="item-price" class="pb-3 flex flex-col md:flex-row justify-between max-w-screen-xl md:mx-auto mb-10 mx-5">
    <div class="w-full md:w-[800px]  lg:ps-10">
        <textarea name="" id="" cols="" rows="" class="w-full" placeholder="Add note for seller..."></textarea>
    </div>
    <div class="flex flex-row justify-end mt-5 md:mt-0 md:justify-between items-center grow md:px-10">
        <a href="{{url('/')}}" class="px-10 py-2 border border-black bg-black text-white me-5">Continue Shopping</a>
        <form action="{{url('cart')}}" method="post">
            @csrf
            <input type="hidden" name="itemPrice" value="{{$itemPrice}}">
            <button type="submit" class="block checkoutBtn px-10 py-2 border border-black hover:bg-black hover:text-white" type="button">
            Checkout
            </button>
        </form>
    </div>
</div>


@include('footer')
@endsection