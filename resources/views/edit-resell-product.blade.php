<form action="" method="POST">
    @csrf
    <!-- Name -->
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <select name="name" id="name" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" required>
            <option value="" disabled selected>Select a name</option>
            @foreach ( $productNames as $product )
                <option value="{{$product}}" {{ $resellProduct->Name == $product ? 'selected' : '' }}>{{$product}}</option>
            @endforeach
        </select>
    </div>

    <!-- Color -->
    <div class="mb-4">
        <label for="color" class="block text-sm font-medium text-gray-700">Color Way</label>
        <select name="color" id="color" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" required>
            <option value="" disabled selected>Select a Color Way</option>
            @foreach ( $productColorways as $colorway)
                <option value="{{ $colorway[0] }}" {{ $resellProduct->Color == $colorway[0] ? 'selected' : '' }}>{{ $colorway[0] }}</option>
            @endforeach
            <!-- Add more options as needed -->
        </select>
    </div>

    <!-- Size -->
    <div class="mb-4">
        <label for="size" class="block text-sm font-medium text-gray-700">Size</label>
        <input type="text" name="size" id="size" class="mt-1 block w-full border-b-2 border-t-0 border-l-0 border-r-0 border-black outline-none focus:ring-0 focus:border-black" value="{{ $resellProduct->Size }}" required>
    </div>

    <!-- Submit Button -->
    <div class="mt-6">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
            Sell Product
        </button>
    </div>
</form>