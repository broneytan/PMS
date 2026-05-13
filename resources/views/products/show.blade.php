<x-layout>
    <h1>Product Details </h1>
    <hr>
    <!-- Back to product list button -->
    <a href="{{ route('products.index') }}" class="btn btn-info"><i class="fa-solid fa-list"></i> Product List</a>
    <hr>
    <!-- Display product details -->
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
            <li class="list-group-item"><b>Quantity: {{ $product->qty}}</b></li>
            <li class="list-group-item"><b>Price: ${{ $product->price}}</b></li>
            <li class="list-group-item"><b>Total: ${{ $product->qty * $product->price }}</b></li>
        </ul>
    </div>
    <br>
    <!-- Edit and Delete buttons -->
    <div style="display: flex; gap: 10px;">
        <!-- Edit form -->
        <div >
        
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-dark"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

        </div>
      <!-- Delete form -->
        <div>
            <form action="{{ route('products.delete', $product) }}" method="post"  onsubmit="return confirm('Are you sure you want to delete this product?');"> 
                @csrf 
                @method('get') 
                <button class="btn btn-outline-dark"><i class="fa-solid fa-trash-can"></i> Delete</button> 
            </form> 
        </div>
    </div>
    
</x-layout>