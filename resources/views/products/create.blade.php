<x-layout>
    <h1>Add New Product</h1>
    <hr>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Product List</a> <br><br>
    @if ($errors->any())
    <ul class="alert alert-danger" style="padding: 30px;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" class="form-control">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
        <label for="qty">Quantity</label>
        <input type="text" name="qty" id="qty" class="form-control">
        <label for="price">Price</label>
        <input type="text" name="price" id="price" class="form-control">
        <label for="photo" class="form-label">Photo</label>
        <input type="file" name="photo" id="photo" class="form-control">
        <br>
        <button class="btn btn-primary">Save</button>
    </form>


</x-layout>