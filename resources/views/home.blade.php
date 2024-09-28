@extends('master')

@section('content')
@include('navbar')
<!-- new arrival -->
<div class="max-w-screen-xl mx-auto mb-10" id="newArrival">
    <h1 class="mb-10">New Arrivals</h1>
    <div class="product-description-container grid grid-cols-1 md:grid-cols-2 w-full">
        <div class="proudct-display flex flex-row justify-center">
            <div class="w-24 mx-2 border border-4 rounded-7xl hover:w-52 transition-all duration-500 border-black h-80 overflow-hidden">
                <img src="{{asset('profile-image/labubu2.webp')}}" alt="" class="object-cover h-full">
            </div>
            <div class="w-24 mx-2 border border-4 rounded-7xl hover:w-52 transition-all duration-500 border-black h-80 mt-10 overflow-hidden">
                <img src="{{asset('profile-image/labubu1.webp')}}" alt="" class="object-cover h-full">
            </div>
            <div class="w-24 mx-2 border border-4 rounded-7xl hover:w-52 transition-all duration-500 border-black h-80 overflow-hidden">
                <img src="{{asset('profile-image/labubu3.webp')}}" alt="" class="object-cover h-full">
            </div>
        </div>
        <div class="description-container flex flex-col">
            <h2 class="mt-10 md:mt-0 mb-10">LABUBU</h2>
            <p class="new-arrival-description px-5">In 2015, Kasing Lung created a fairy world in his three Nordic Fairy Tale picture books, where live The Monsters, which are both good and evil, including Zimomo, Tycoco, Spooky and Pato. Among them, the most famous one is Labubu, a small monster with high, pointed ears and serrated teeth. Despite a mischievous first impression, Labubu is very kind-hearted and always wants to help others while accidentally doing bad things. No matter what difficulties we encounter, we should grin like Labubu, and naturally we will become happy.</p>
            <a href="{{url('browse/labubu')}}" class="group w-40 flex flex-row justify-between px-5 py-2 mt-10 border border-black rounded-lg hover:bg-black hover:text-white ms-5 transition-all duration-300">
                <span class="inline">Learn more</span>
                <svg class="w-6 h-6 text-gray-800 dark:text-white group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 16 4-4-4-4"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<!-- popular brands -->
<div class="max-w-screen-xl mx-auto my-10">
    <h1 class="mb-10">Popular Brands</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 justify-items-center lg:grid-cols-5 gap-4">
        <div class="max-w-sm bg-white border w-2/3 md:w-full overflow-hidden h-44 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 hover:shadow-xl transition-all duration-500">
            <a href="{{url('browse/Jordan')}}">
                <img class="rounded-t-lg object-cover w-full h-5/6" src="{{asset('profile-image/jordan1.webp')}}" alt=""/>
            </a>
            <div class="brand-name ps-5">
                Jordan
            </div>
        </div>
        <div class="max-w-sm bg-white border w-2/3 md:w-full overflow-hidden h-44 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 hover:shadow-xl transition-all duration-500">
            <a href="{{url('browse/Yeezy')}}">
                <img class="rounded-t-lg object-cover w-full h-5/6" src="{{asset('profile-image/yeezy.webp')}}" alt=""/>
            </a>
            <div class="brand-name ps-5">
                Yeezy
            </div>
        </div>
        <div class="max-w-sm bg-white border w-2/3 md:w-full overflow-hidden h-44 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 hover:shadow-xl transition-all duration-500">
            <a href="{{url('browse/supreme')}}">
                <img class="rounded-t-lg object-cover w-full h-5/6" src="{{asset('profile-image/supreme2.png')}}" alt=""/>
            </a>
            <div class="brand-name ps-5">
                Supreme
            </div>
        </div>
        <div class="max-w-sm bg-white border w-2/3 md:w-full overflow-hidden h-44 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 hover:shadow-xl transition-all duration-500">
            <a href="{{url('browse/dior')}}">
                <img class="rounded-t-lg object-cover w-full h-5/6" src="{{asset('profile-image/dior.avif')}}" alt=""/>
            </a>
            <div class="brand-name ps-5">
                Dior
            </div>
        </div>
        <div class="max-w-sm bg-white border w-2/3 md:w-full overflow-hidden h-44 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:scale-105 hover:shadow-xl transition-all duration-500">
            <a href="{{url('browse/New Balance')}}">
                <img class="rounded-t-lg object-cover w-full h-5/6" src="{{asset('profile-image/newbalance.jpeg')}}" alt=""/>
            </a>
            <div class="brand-name ps-5">
                New balance
            </div>
        </div>
    </div>

</div>
<!-- trending Sneakers -->
<div class="max-w-screen-xl mx-auto my-10 relative">
    <h3 class="mb-10">Trending Sneakers</h3>
    <a href="{{url('browse/Sneakers')}}" class="flex flex-row absolute top-0 right-5 hover:bg-black hover:text-white rounded-full py-2 px-3 transition-all duration-300">
        <span>See All</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
        </svg>
    </a>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2">
        @foreach ($sneakers as $sneaker)
            @foreach ($sneaker->avaliable_colorway as $color)
                <div class="max-w-sm bg-white overflow-hidden h-56 border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('product-detail/'.$sneaker->id.'/'.$color) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                        <div>
                            <img class="rounded-t-lg object-contain w-full h-40" src="{{ asset('product-images/'.$sneaker->Name.'-'.$color.'.png') }}" alt=""/>
                        </div>
                        <div class="ps-5 product-description cursor-text">
                            <span class="cursor-text">{{ $sneaker->Name }}</span><br>
                            <span class="cursor-text">$ {{ $sneaker->Retail_Price }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        @endforeach
    </div>
</div>
<!-- trending Apparel -->
<div class="max-w-screen-xl mx-auto my-10 relative">
    <h3 class="mb-10">Apparel</h3>
    <a href="{{url('browse/Trending Apparel')}}" class="flex flex-row absolute top-0 right-5 hover:bg-black hover:text-white rounded-full py-2 px-3 transition-all duration-300">
        <span>See All</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
        </svg>
    </a>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-2">
        @foreach ($apparels as $apparel)
            @foreach ($apparel->avaliable_colorway as $color)
                <div class="max-w-sm bg-white overflow-hidden h-56 border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('product-detail/'.$apparel->id.'/'.$color) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 absolute">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                        <div>
                            <img class="rounded-t-lg object-contain w-full h-40" src="{{ asset('product-images/'.$apparel->Name.'-'.$color.'.png') }}" alt=""/>
                        </div>
                        <div class="ps-5 product-description cursor-text">
                            <span class="cursor-text">{{ $apparel->Name }}</span><br>
                            <span class="cursor-text">$ {{ $apparel->Retail_Price }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        @endforeach
    </div>

</div>
<!-- Articles form magazine -->
<div class="max-w-screen-xl mx-auto my-10 relative">
    <h3 class="mb-10">From the Magazine</h3>
    <a href="{{url('news')}}" class="flex flex-row absolute top-0 right-5 hover:bg-black hover:text-white rounded-full py-2 px-3 transition-all duration-300">
        <span>View All News Articles</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
        </svg>
    </a>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 justify-items-center">
        <div class="max-w-sm overflow-hidden h-72 border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700 bg-gray-50">
            <a href="{{url('news/1')}}">
                <div>
                    <img class="rounded-t-lg object-cover w-full h-4/6" src="{{asset('profile-image/jordan1.webp')}}" alt=""/>
                </div>
                <div class="ps-5 article-description">
                    <h5 class="title mb-2">Introducting ghostwrite</h5>
                    <p class="category mb-2">Collection</p>
                    <ul class="date text-gray-500 mb-2">
                        <li>08/13/2024</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="max-w-sm overflow-hidden h-72 border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700 bg-gray-50">
            <a href="{{url('news/1')}}">
                <div>
                    <img class="rounded-t-lg object-cover w-full h-4/6" src="{{asset('profile-image/jordan1.webp')}}" alt=""/>
                </div>
                <div class="ps-5 article-description">
                    <h5 class="title mb-2">Introducting ghostwrite</h5>
                    <p class="category mb-2">Collection</p>
                    <ul class="date text-gray-500 mb-2">
                        <li>08/13/2024</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="max-w-sm overflow-hidden h-72 border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700 bg-gray-50">
            <a href="{{url('news/1')}}">
                <div>
                    <img class="rounded-t-lg object-cover w-full h-4/6" src="{{asset('profile-image/jordan1.webp')}}" alt=""/>
                </div>
                <div class="ps-5 article-description">
                    <h5 class="title mb-2">Introducting ghostwrite</h5>
                    <p class="category mb-2">Collection</p>
                    <ul class="date text-gray-500 mb-2">
                        <li>08/13/2024</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="max-w-sm overflow-hidden h-72 border-gray-200 rounded-xl dark:bg-gray-800 dark:border-gray-700 bg-gray-50">
            <a href="{{url('news/1')}}">
                <div>
                    <img class="rounded-t-lg object-cover w-full h-4/6" src="{{asset('profile-image/jordan1.webp')}}" alt=""/>
                </div>
                <div class="ps-5 article-description">
                    <h5 class="title mb-2">Introducting ghostwrite</h5>
                    <p class="category mb-2">Collection</p>
                    <ul class="date text-gray-500 mb-2">
                        <li>08/13/2024</li>
                    </ul>
                </div>
            </a>
        </div>
    </div>

</div>

@include('footer')
@include('to-up-btn')
@endsection
