<x-layout>
    <div>
        <h1>Welcome to the Home Page</h1>
        <p>This is the home page of our application.</p>
    </div>
    <h1 class="text-3xl font-bold mb-4">Welcome to the Product Management System</h1>
    <div style="display: flex; gap: 10px;">
        <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>
    
        <a style="margin-bottom: 10px; margin-top: 10px;" href="{{ route('products.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add New Product</a>

    </div>
    

    <br>
    <br>

    <div>
        <!-- Display the products retrieved from the database in the ProductController index method and passed to the view as a variable named $products, array using a foreach loop to iterate through the products and display their attributes such as name, description, quantity, price, and photo. -->
        @foreach ($products as $product)
        <div class="card">
            <h3 class="card-header">
                {{ $product->name }}
            </h3>
            <div class="card-body">
                <img src="{{ asset('storage/' . $product->photo) }}"
                    alt="Product Photo" width="300">
                <h5>Price <span class="badge text-bg-danger">
                        ${{ $product->price }}</span></h5>
                <p class="card-text">{{ $product->description }}</p>
                <a href="{{ route('products.show', $product->id) }}"
                    class="btn btn-secondary"><i class="fa-solid
fa-circle-info"></i> View Details</a>
            </div>
        </div> <br>
        @endforeach
    </div>
</x-layout>