<form action="{{ url('admin/resell-product/create') }}" method="POST">
    @csrf
    <!-- Your form inputs here -->
    <input type="text" name="name" placeholder="Product Name">
    <input type="text" name="color" placeholder="Color">
    <input type="text" name="size" placeholder="Size">
    <!-- Submit button -->
    <button type="submit">Create Product</button>
</form>