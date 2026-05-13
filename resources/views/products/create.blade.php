<x-layout>
    <h1>Add New Product</h1>
    <hr>
    <a href="{{ route('products.index') }}" class="btn btn-info"><i class="fa-solid fa-list"></i>Product List</a> <br><br>

    <x-errors />
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <x-products.form /> 
    </form>


</x-layout>
