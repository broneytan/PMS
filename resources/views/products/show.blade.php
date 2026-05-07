<x-layout>
    <h1>Product Details </h1>
    <hr>
    <div class="card">
        <h2 class="card-header">
            {{ $product->name }}
        </h2>
        <div class="card-body">
            <img src="{{ asset('storage/' . $product->photo) }}"
                alt="Product Photo" width="300">
            <p class="card-text">{{ $product->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Quantity: {{ $product->qty
}}</b></li>
            <li class="list-group-item"><b>Price: ${{ $product->price
}}</b></li>
            <li class="list-group-item"><b>Total: ${{ $product->qty * $product->price }}</b></li>
        </ul>
    </div>
    <br>
    <div style="display: flex; gap: 10px;">
        <a href="{{ route('products.index') }}" class="btn btn-outline-dark"><i class="fa-solid fa-list"></i> Product List</a>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-dark"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
        
    </div>
</x-layout>