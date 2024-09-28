@extends('master')
@section('content')
<nav class="w-full border-b border-gray-400 flex justify-center bg-white">
    <a href="{{url('/')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('profile-image/logo.png') }}" class="my-5 h-14 rounded-full" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Street Code</span>
    </a>
</nav>
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
@if(session('fail'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Fail!</span>
        <div class="ms-3 text-sm font-medium">
            <span class="block sm:inline capitalize">{{ session('fail') }}</span>
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
@endif
<div class="max-w-lg mx-auto mt-5 p-5 rounded-lg shadow-lg">
    <h3 class="my-5">Enter your product detail</h3>
    <form action="{{ url('sell') }}" method="POST">
        @csrf
        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <select name="name" id="name" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" required>
                <option value="" disabled selected>Select a name</option>
                @foreach ( $productNames as $product )
                    <option value="{{$product}}" {{ old('name') == $product ? 'selected' : '' }}>{{$product}}</option>
                @endforeach
            </select>
        </div>

        <!-- Color -->
        <div class="mb-4">
            <label for="color" class="block text-sm font-medium text-gray-700">Color Way</label>
            <select name="color" id="color" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" required>
                <option value="" disabled selected>Select a Color Way</option>
                @foreach ( $colorways as $colorway)
                    <option value="{{ $colorway }}" {{ old('color') == $colorway ? 'selected' : '' }}>{{ $colorway }}</option>
                @endforeach
                <!-- Add more options as needed -->
            </select>
        </div>

        <!-- Size -->
        <div class="mb-4">
            <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
            <input type="text" name="size" id="size" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('retail_price') }}" required>
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                Sell Product
            </button>
        </div>
    </form>
</div>

@endsection