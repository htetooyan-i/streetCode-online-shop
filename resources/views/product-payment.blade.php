@extends('master')
@section('content')
<nav class="bg-white border-b border-gray-400 dark:bg-gray-900 sticky top-0 z-50 p-5">
    <div class="">
      <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('profile-image/logo.png') }}" class="h-8 rounded-full" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Street Code</span>
      </a>
    </div>
</nav>
<main class="flex flex-col md:flex-row bg-gray-200">
    <div id="product-display" class="bg-white grow flex flex-col items-center py-10 w-3/4">
        <div class="flex flex-col justify-center">
            <p class="text-[30px] jordan-font uppercase tracking-widest mb-5">
                {{$product->Name}}
                <span>{{$color}}</span>
            </p>
            <span class="bg-gray-200 p-2 rounded-md text-xs mx-auto">Size: US M 4.5</span>
        </div>
        <div class="image-container">
            <img class="w-1/2 mx-auto" src="{{ asset('product-images/'.$product->Name.'-'.$color.'.png') }}" alt=""/>
        </div>
    </div>
    <div id="product-payment" class="w-full md:w-800 md:min-w-[400px]">
        <form action="{{url('product-detail/'.$product->id.'/'.$color.'/buy')}}" class="flex flex-col justify-center" method="post">
        @csrf
            <div id="" class="z-10 bg-white px-3 py-4 m-5 rounded-md overflow-hidden h-auto">
                <div class="block h-[50px]">
                    <span id="selected-size" class="float-start">Size:</span>
                </div>
                <div class="block">
                    <span class="text-[0.8rem]">Size and Conversions</span>
                    <div class="flex flex-row justify-start mt-3 gap-2 lg:gap-4">
                        <button class="md:text-[0.7rem] lg:text-[1rem] text-[0.8rem] rounded-full bg-gray-200 hover:bg-black hover:text-white px-4 py-1 transition duration-100">US M</button>
                        <button class="md:text-[0.7rem] lg:text-[1rem] text-[0.8rem] rounded-full bg-gray-200 hover:bg-black hover:text-white px-4 py-1 transition duration-100">US W</button>
                        <button class="md:text-[0.7rem] lg:text-[1rem] text-[0.8rem] rounded-full bg-gray-200 hover:bg-black hover:text-white px-4 py-1 transition duration-100">US M</button>
                        <button class="md:text-[0.7rem] lg:text-[1rem] text-[0.8rem] rounded-full bg-gray-200 hover:bg-black hover:text-white px-4 py-1 transition duration-100">EU</button>
                    </div>
                </div>
                <div class="size-btns grid grid-cols-3 justify-center mt-10 overflow-auto">    
                    @foreach ($resellProducts as  $resellProduct)
                        <div>
                            <input type="radio" name="size" value="{{$resellProduct->Size}}" id="size-{{$resellProduct->Size}}" class="hidden peer">
                            <label for="size-{{$resellProduct->Size}}" class="peer-checked:border-black peer-checked:bg-gray-200 peer-checked:border-2 border flex flex-col items-center justify-center border-gray-400 w-11/12 rounded-md mb-3 transition duration-100 cursor-pointer">
                                <span class="siz-item">US M {{$resellProduct->Size}}</span>
                                <span class="text-gray-500">BID</span>
                            </label>
                        </div>   
                    @endforeach     
                    <!-- Add more options similarly as above -->
                </div>
            </div>
            <div id="price-bid" class="m-5 bg-white rounded-md px-3 py-4">
                <label for="bid-price-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enter Your Bid Price</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <span>US$</span>
                    </div>
                    <input type="number" name="bid_price" id="bid-price-input" class="rounded-md block w-full ps-14 p-2.5 appearance-none focus:outline-none  focus:border focus:ring-0 focus:border-black focus:border-2 out-of-range:border-red-500 peer ">
                </div>
                <span class="block text-gray-400 mt-2">This is a competitive price that is more likely to match with a seller</span>
            </div>
            <div id="shipping-info" class="z-10 bg-white px-3 py-4 m-5 rounded-md overflow-hidden h-[60px]">
                <div class="block h-[50px] relative">
                    <div class="flex items-center flex-nowrap">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                        </svg>
                        <span class="block ms-2 shipping-info-context">No Shipping Info Provided</span>
                    </div>
                    <span id="shipping-info-btn" class="absolute top-0 right-2 uppercase text-red-500 cursor-pointer">
                        Add
                    </span>
                </div>
                <div class="max-w-md mx-auto">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="address" id="address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                        <label for="address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                             <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone_no" id="phone_no" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                            <label for="phone_no" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                            <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="payment-method" class="z-10 bg-white px-3 py-4 m-5 rounded-md overflow-hidden h-auto">
                <div class="block relative">
                    <div class="flex items-center flex-nowrap">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M6 14h2m3 0h5M3 7v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1Z"/>
                        </svg>
                        <span id="selected-payment-method" class="block ms-2 w-[200px] sm:w-auto">Please select or add a payment method</span>
                    </div>
                    <!-- Payment Option Selection -->
                    <div id="back-to-exist" class="absolute top-0 right-2 hidden">
                        <input type="radio" id="use_existing_payment" name="payment_option" value="existing" class="mr-2 invisible" checked>
                        <label for="use_existing_payment" class="text-indigo-500 cursor-pointer">BACK</label>
                    </div>
                    <div id="add-to-new" class="absolute top-0 right-2">
                        <input type="radio" id="add_new_payment" name="payment_option" value="new" class="mr-2 invisible">
                        <label for="add_new_payment" class="text-red-500 cursor-pointer">ADD</label>
                    </div>
                </div>

                <!-- Existing Payment Methods -->
                <ul class="grid grid-cols-3 gap-4 mt-5" id="existing_payments_section">
                    @foreach ($payments as $payment )
                    <li class="relative">
                        <input type="radio" id="payment-{{$payment->id}}" name="payment_method" value="{{$payment->id}}" class="hidden peer" />
                        <label for="payment-{{$payment->id}}" class="relative grid grid-cols-1 inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-black peer-checked:text-black peer-checked:outline peer-checked:outline-2 peer-checked:outline-offset-2 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">    
                            <div class="block">
                                <div class="w-full flex flex-row flex-nowrap">
                                    <span class="capitalize">{{str_replace('-', ' ', $payment->payment_method)}}</span>
                                </div>
                            </div>
                            <div id="payment-details" class="mt-2">
                                <p class="font-semibold text-black text-xs">{{$payment->card_no}}</p>
                                <div class="text-xs text-black mt-2">
                                    <p><strong>Name:</strong> {{$payment->first_name}} {{$payment->last_name}}</p>
                                    <p><strong>CVV:</strong> {{$payment->cvv}}</p>
                                </div>
                            </div>
                        </label>
                    </li>
                    @endforeach
                </ul>

                <!-- New Payment Form (Hidden initially) -->
                <div id="new_payment_form" class="hidden mt-5">
                    <div class="">
                        <ul class="grid w-full gap-2 grid-cols-3 mb-5">
                                <li>
                                    <input type="radio" id="google-pay" name="payment" value="google-pay" class="hidden peer" />
                                    <label for="google-pay" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-black peer-checked:text-black peer-checked:outline peer-checked:outline-2 peer-checked:outline-offset-2 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                        <div class="block">
                                            <div class="w-full flex flex-row flex-nowrap">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z" clip-rule="evenodd"/>
                                                </svg>
                                                <span>Google Pay</span>
                                            </div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="visa-card" name="payment" value="visa-card" class="hidden peer" />
                                    <label for="visa-card" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-black peer-checked:text-black peer-checked:outline peer-checked:outline-2 peer-checked:outline-offset-2 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                        <div class="block">
                                            <div class="w-full flex flex-row flex-nowrap">
                                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Z"/>
                                                <path fill="#ffffff" d="M15.643 9.382a3.314 3.314 0 0 0-1.158-.2c-1.276 0-2.177.643-2.184 1.566-.008.678.64 1.06 1.131 1.286.504.233.672.38.67.588-.003.317-.402.46-.772.46-.51 0-.789-.07-1.217-.248l-.159-.075-.18 1.063c.31.13.869.24 1.446.25 1.357 0 2.244-.64 2.255-1.621.01-.542-.34-.951-1.079-1.29-.449-.219-.727-.365-.727-.588 0-.197.238-.408.737-.408.332-.008.661.055.967.183l.12.053.181-1.026-.031.007Zm3.312-.114h-.997c-.31 0-.544.085-.68.393l-1.917 4.345h1.356l.272-.713 1.656.002c.039.166.158.71.158.71H20l-1.045-4.737Zm-8.49-.04h1.294l-.809 4.74H9.659l.807-4.742v.002Zm-3.282 2.613.134.658 1.264-3.231h1.37l-2.035 4.731H6.549L5.432 9.993a.27.27 0 0 0-.119-.159 5.543 5.543 0 0 0-1.27-.47l.018-.1h2.081c.283.012.51.1.586.402l.454 2.177.001-.002Zm10.177.483.515-1.326c-.006.014.106-.273.171-.451l.089.409.3 1.367h-1.076Z"/>
                                            </svg>

                                                <span>Visa Card</span>
                                            </div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="apple-pay" name="payment" value="apple-pay" class="hidden peer" />
                                    <label for="apple-pay" class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-black peer-checked:text-black peer-checked:outline peer-checked:outline-2 peer-checked:outline-offset-2 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                        <div class="block">
                                            <div class="w-full flex flex-row flex-nowrap">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M17.537 12.625a4.421 4.421 0 0 0 2.684 4.047 10.96 10.96 0 0 1-1.384 2.845c-.834 1.218-1.7 2.432-3.062 2.457-1.34.025-1.77-.794-3.3-.794-1.531 0-2.01.769-3.275.82-1.316.049-2.317-1.318-3.158-2.532-1.72-2.484-3.032-7.017-1.27-10.077A4.9 4.9 0 0 1 8.91 6.884c1.292-.025 2.51.869 3.3.869.789 0 2.27-1.075 3.828-.917a4.67 4.67 0 0 1 3.66 1.984 4.524 4.524 0 0 0-2.16 3.805m-2.52-7.432A4.4 4.4 0 0 0 16.06 2a4.482 4.482 0 0 0-2.945 1.516 4.185 4.185 0 0 0-1.061 3.093 3.708 3.708 0 0 0 2.967-1.416Z"/>
                                                </svg>
                                                <span>Apple Pay</span>
                                            </div>
                                        </div>
                                    </label>
                                </li>
                        </ul>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="floating_firstName" id="floating_firstName" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                                <label for="floating_firstName" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First Name</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="floating_lastName" id="floating_lastName" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                                <label for="floating_lastName" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last Name</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="floating_address" id="floating_address" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                                <label for="floating_address" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="text" name="floating_country" id="floating_country" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                                <label for="floating_country" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Country</label>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                                <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="number" name="floating_Postal" id="floating_Postal" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                                <label for="floating_Postal" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Postal Code</label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="number" name="floating_cardNumber" id="floating_cardNumber" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                            <label for="floating_cardNumber" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Card Number</label>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="number" name="floating_Expires" id="floating_Expires" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                                <label for="floating_Expires" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Expires</label>
                            </div>
                            <div class="relative z-0 w-full mb-5 group">
                                <input type="number" name="floating_CVV" id="floating_CVV" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-black focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " />
                                <label for="floating_CVV" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">CVV</label>
                            </div>
                        </div>               
                    </div>
                    <!-- Other form fields for card info like Card Number, CVV, etc. -->
                </div>
            </div>
            <footer class="bg-white border-t border-gray-400 dark:bg-gray-900 z-50 p-5 flex justify-end">
                <a href="{{url('product-detail/'.$product->id.'/'.$color)}}" class="px-10 font-bold py-3 border border-black bg-black text-white me-5 rounded-full">Cancel</a>
                <button type="submit" class="px-10 font-bold py-3 border border-black hover:bg-black hover:text-white rounded-full">Next</button>
            </footer>
        </form>
    </div>
</main>
@endsection