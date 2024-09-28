@extends('master')
@section('content')
@include('admin/admin-nav')

<main class="mb-28">
    <div class="mx-2">
        @include('admin/aside')
    </div>
    <div class="max-w-lg mx-auto">
        <h3 class="mb-10">Edit Product</h3>
        <form method="POST">
            @csrf
            <!-- Category -->
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category" id="category" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" required>
                    <option value="" disabled selected>Select a category</option>
                    <option value="Sneakers" {{ old('category') == 'Sneakers' ? 'selected' : '' }} {{ $product->Category == 'Sneakers' ? 'selected' : '' }}>Sneakers</option>
                    <option value="Clothing" {{ old('category') == 'Clothing' ? 'selected' : '' }} {{ $product->Category == 'Clothing' ? 'selected' : '' }}>Clothing</option>
                    <option value="Accessories"  {{ old('category') == 'Accessories' ? 'selected' : '' }} {{ $product->Category == 'Accessories' ? 'selected' : '' }}>Accessories</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <!-- Brand -->
            <div class="mb-4">
                <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                <input type="text" name="brand" id="brand" value="{{$product->Brand}}" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('retail_price') }}" required>
            </div>

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" value="{{$product->Name}}" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('name') }}" required>
            </div>

            <!-- Serie -->
            <div class="mb-4">
                <label for="serie" class="block text-sm font-medium text-gray-700">Product Serie</label>
                <input type="text" name="serie" id="serie" value="{{$product->serie}}" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('serie') }}" required>
            </div>

            <!-- Color way -->
            <div class="mb-4">
                <label for="colorway" class="block text-sm font-medium text-gray-700">Avaliable Color Way</label>
                <input type="text" name="colorway" id="colorway" value="{{$colorway}}" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('colorway') }}" required>
            </div>

            <!-- Retail Price -->
            <div class="mb-4">
                <label for="retail_price" class="block text-sm font-medium text-gray-700">Retail Price</label>
                <input type="text" name="retail_price" value="{{$product->Retail_Price}}" id="retail_price" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('retail_price') }}" required>
            </div>

            <!-- product details -->
            <div class="mb-4 grid grid-cols-2 gap-8">
                <div class="mb-0">
                    <label for="material" class="text-sm block text-sm font-medium text-gray-700">Material</label>
                    <input type="text" name="material" value="{{$product->Product_Detail['material']}}" id="material" class=" block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('material') }}" required>
                </div>
                <div class="mb-0">
                    <label for="release_date" class="text-sm block text-sm font-medium text-gray-700">Release Date</label>
                    <input type="text" name="release_date" value="{{$product->Product_Detail['release_date']}}" id="release_date" class=" block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('release_date') }}" required>
                </div>
            </div>

            <!-- Gender -->
            <div class="mb-0">
                <label for="gender" class="text-sm block text-sm font-medium text-gray-700">Gender</label>
                <input type="text" name="gender" id="gender" value="{{$product->Product_Detail['gender']}}" class=" block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('release_date') }}" required>
            </div>
            <!-- Gender -->
            <div class="mb-0">
                <label for="keywords" class="text-sm block text-sm font-medium text-gray-700">Keywords</label>
                <input type="text" name="keywords" id="keywords" value="{{$product->keywords}}" class=" block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ old('release_date') }}" required>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                    Save Product
                </button>
            </div>
        </form>
    </div>  
</main>
@include('admin/admin-footer')
@endsection