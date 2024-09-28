<div class="used-payment-methods mt-10">
    <h6>Your products</h6>
    <ul class="grid grid-cols-2 w-full gap-2 my-5">
        @foreach ( $sellerProducts as $sellerProduct)
            <li class="relative">
                <a href="{{url('user-acc/personal-detail/'.session('userId').'/products/edit-product/'.$sellerProduct->id)}}">
                    <label for="" class="relative grid grid-cols-1 inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-black peer-checked:text-black peer-checked:outline peer-checked:outline-2 peer-checked:outline-offset-2 hover:text-gray-600 hover:shadow-lg dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700 transition duration-500">    
                        <div class="block">
                            <img class="rounded-t-lg object-contain w-full h-32" src="{{ asset('product-images/'.$sellerProduct->Name.'-'.$sellerProduct->Color.'.png') }}" alt=""/>
                        </div>
                        <div id="payment-details" class="mt-5">
                            <p class="font-bold text-black"></p>
                            <div class="text-sm text-black mt-5 flex flex-col justify-between md:flex-row">
                                <p class="bg-gray-50 px-3 py-2 rounded-lg shadow-md">{{$sellerProduct->Name}}</p>
                                <p class="bg-gray-50 px-3 py-2 rounded-lg shadow-md">{{$sellerProduct->Color}}</p>
                                <p class="bg-gray-50 px-3 py-2 rounded-lg shadow-md">{{$sellerProduct->Size}}</p>
                            </div>
                        </div>
                    </label>
                </a>
                <a href="{{url('user-acc/personal-detail/'.session('userId').'/products/delete-product/'.$sellerProduct->id)}}" class="absolute top-5 right-5 text-red-500 text-xs">DELETE</a>
            </li>
        @endforeach
    </ul>
    <a href="{{url('sell')}}" class="block w-52 text-center mb-3 px-5 py-3 bg-black text-white rounded-lg">
        Sell new product
    </a>
    @if(Route::currentRouteName() == 'account.products.edit')
        @include('edit-resell-product')
    @endif
</div>