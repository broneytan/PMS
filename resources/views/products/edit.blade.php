<x-layout>
    <h1>Edit Product</h1>
    <hr>
    <a href="{{ route('products.index') }}" class="btn btn-info"><i class="fa-solid fa-list"></i> Product List</a>
    <hr>

    <br><br>
    <x-errors />
    <br>

    <form action="{{ route('products.update', $product) }}"  method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-products.form :product="$product" />
    </form>

</x-layout>
