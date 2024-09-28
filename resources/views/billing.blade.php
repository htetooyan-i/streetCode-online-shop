<div class="used-payment-methods mt-10">
    <h6>Your payment methods</h6>
    <ul class="grid grid-cols-2 w-full gap-2 my-5">
        @foreach ($paymentMethods as $paymentMethod)
            @if ($paymentMethod->payment_method =='google-pay')
            <li class="relative">
                <a href="{{url('user-acc/personal-detail/'.$accId.'/billing/edit-payment/'.$paymentMethod->id)}}">
                    <label for="" class="relative grid grid-cols-1 inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-black peer-checked:text-black peer-checked:outline peer-checked:outline-2 peer-checked:outline-offset-2 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">    
                        <div class="block">
                            <div class="w-full flex flex-row flex-nowrap">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z" clip-rule="evenodd"/>
                                </svg>
                                <span>Google Pay</span>
                                
                            </div>
                        </div>
                        <div id="payment-details" class="mt-5">
                            <p class="font-bold text-black">{{$paymentMethod->card_no}}</p>
                            <div class="text-sm text-black mt-5 flex flex-col md:flex-row">
                                <p><strong>Name: </strong>{{$paymentMethod->first_name}} {{$paymentMethod->last_name}}</p>
                                <p class="ms-auto"><strong>CVV: </strong>{{$paymentMethod->cvv}}</p>
                            </div>
                        </div>
                    </label>
                </a>
                <a href="{{url('user-acc/personal-detail/'.$accId.'/billing/delete-payment/'.$paymentMethod->id)}}" class="absolute top-5 right-5 text-red-500 text-xs">DELETE</a>
            </li>
            @elseif ($paymentMethod->payment_method =='visa-card')
            <li class="relative">
                <a href="{{url('user-acc/personal-detail/'.$accId.'/billing/edit-payment/'.$paymentMethod->id)}}">
                    <label for="" class=" grid grid-cols-1 inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-black peer-checked:text-black peer-checked:outline peer-checked:outline-2 peer-checked:outline-offset-2 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">    
                    <div class="block">
                        <div class="w-full flex flex-row flex-nowrap">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4 4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H4Z"/>
                            <path fill="#ffffff" d="M15.643 9.382a3.314 3.314 0 0 0-1.158-.2c-1.276 0-2.177.643-2.184 1.566-.008.678.64 1.06 1.131 1.286.504.233.672.38.67.588-.003.317-.402.46-.772.46-.51 0-.789-.07-1.217-.248l-.159-.075-.18 1.063c.31.13.869.24 1.446.25 1.357 0 2.244-.64 2.255-1.621.01-.542-.34-.951-1.079-1.29-.449-.219-.727-.365-.727-.588 0-.197.238-.408.737-.408.332-.008.661.055.967.183l.12.053.181-1.026-.031.007Zm3.312-.114h-.997c-.31 0-.544.085-.68.393l-1.917 4.345h1.356l.272-.713 1.656.002c.039.166.158.71.158.71H20l-1.045-4.737Zm-8.49-.04h1.294l-.809 4.74H9.659l.807-4.742v.002Zm-3.282 2.613.134.658 1.264-3.231h1.37l-2.035 4.731H6.549L5.432 9.993a.27.27 0 0 0-.119-.159 5.543 5.543 0 0 0-1.27-.47l.018-.1h2.081c.283.012.51.1.586.402l.454 2.177.001-.002Zm10.177.483.515-1.326c-.006.014.106-.273.171-.451l.089.409.3 1.367h-1.076Z"/>
                        </svg>

                            <span>Visa Card</span>
                        </div>
                    </div>
                    <div id="payment-details" class="mt-5">
                        <p class="font-bold text-black">{{$paymentMethod->card_no}}</p>
                        <div class="text-sm text-black mt-5 flex flex-col md:flex-row">
                            <p><strong>Name: </strong>{{$paymentMethod->first_name}} {{$paymentMethod->last_name}}</p>
                            <p class="ms-auto"><strong>CVV: </strong>{{$paymentMethod->cvv}}</p>
                        </div>
                    </div>
                    </label>
                </a>
                <a href="{{url('user-acc/personal-detail/'.$accId.'/billing/delete-payment/'.$paymentMethod->id)}}" class="absolute top-5 right-5 text-red-500 text-xs">DELETE</a>
            </li>
            @else
            <li class="relative">
                <a href="{{url('user-acc/personal-detail/'.$accId.'/billing/edit-payment/'.$paymentMethod->id)}}">
                    <label for="" class=" grid grid-cols-1 inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-black peer-checked:text-black peer-checked:outline peer-checked:outline-2 peer-checked:outline-offset-2 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">    
                    <div class="block">
                        <div class="w-full flex flex-row flex-nowrap">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.537 12.625a4.421 4.421 0 0 0 2.684 4.047 10.96 10.96 0 0 1-1.384 2.845c-.834 1.218-1.7 2.432-3.062 2.457-1.34.025-1.77-.794-3.3-.794-1.531 0-2.01.769-3.275.82-1.316.049-2.317-1.318-3.158-2.532-1.72-2.484-3.032-7.017-1.27-10.077A4.9 4.9 0 0 1 8.91 6.884c1.292-.025 2.51.869 3.3.869.789 0 2.27-1.075 3.828-.917a4.67 4.67 0 0 1 3.66 1.984 4.524 4.524 0 0 0-2.16 3.805m-2.52-7.432A4.4 4.4 0 0 0 16.06 2a4.482 4.482 0 0 0-2.945 1.516 4.185 4.185 0 0 0-1.061 3.093 3.708 3.708 0 0 0 2.967-1.416Z"/>
                            </svg>
                            <span>Apple Pay</span>
                        </div>
                    </div>
                    <div id="payment-details" class="mt-5">
                        <p class="font-bold text-black">{{$paymentMethod->card_no}}</p>
                        <div class="text-sm text-black mt-5 flex flex-col md:flex-row">
                            <p><strong>Name: </strong>{{$paymentMethod->first_name}} {{$paymentMethod->last_name}}</p>
                            <p class="ms-auto"><strong>CVV: </strong>{{$paymentMethod->cvv}}</p>
                        </div>
                    </div>
                    </label>
                </a>
                <a href="{{url('user-acc/personal-detail/'.$accId.'/billing/delete-payment/'.$paymentMethod->id)}}" class="absolute top-5 right-5 text-red-500 text-xs">DELETE</a>
            </li>
            @endif
        @endforeach
    </ul>
    <a href="{{url('user-acc/personal-detail/'.$accId.'/billing/create-payment')}}" class="block w-64 text-center mb-3 px-5 py-3 bg-black text-white rounded-lg">
        Add A New Payment Method
    </a>
    @if(Route::currentRouteName() == 'account.billing.create')
        @include('create-payment-method')
    @elseif (Route::currentRouteName() == 'account.billing.edit')
        @include('edit-payment-method')
    @endif
</div>
