<div class="used-payment-methods mt-10">
    <h6>Your products</h6>
    <ul class="grid grid-cols-2 w-full gap-2 my-5">
        @foreach ( $orders as $key => $uniqueOrder)
            <li class="relative">
                <label for="" class="group relative grid grid-cols-1 inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-black peer-checked:text-black peer-checked:outline peer-checked:outline-2 peer-checked:outline-offset-2 hover:text-gray-600 hover:shadow-lg dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-500">   
                    <div class="hidden group-hover:block w-full h-full bg-black bg-opacity-10 absolute rounded-lg">
                    <form action="{{ url('user-acc/personal-detail/'.session('userId').'/orders') }}" class="w-full h-full" method="post">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $uniqueOrder->id }}">
                        <div class="w-full h-full flex flex-row items-center justify-center gap-24">
                            <button type="submit" name="action" value="approve">
                                <svg class="w-16 h-16 text-green-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd"/>
                                </svg>
                                <p class="text-green-800">Approve</p>
                            </button>
                            <button type="submit" name="action" value="decline">
                                <svg class="w-16 h-16 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m6 6 12 12m3-6a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <p class="text-red-800">Decline</p>
                            </button>
                        </div>
                    </form>
                    </div> 
                    <div class="block">
                        <img class="rounded-t-lg object-contain w-full h-32" src="{{ asset('product-images/'.$uniqueOrder->product_name.'-'.$uniqueOrder->product_color.'.png') }}" alt=""/>
                    </div>
                    <div id="payment-details" class="mt-5">
                        <p class="font-bold text-black"></p>
                        <div class="text-sm text-black mt-5 flex flex-col justify-between md:flex-row">
                            <p class="bg-gray-50 px-3 py-2 rounded-lg shadow-md">{{$uniqueOrder->product_name}}:{{$uniqueOrder->product_color}}</p>
                            <p class="bg-gray-50 px-3 py-2 rounded-lg shadow-md">Bid Price: ${{$uniqueOrder->bid_price}}</p>
                        </div>
                    </div>
                </label>
            </li>
        @endforeach
    </ul>
    @if(Route::currentRouteName() == 'account.products.edit')
        @include('edit-resell-product')
    @endif
</div>