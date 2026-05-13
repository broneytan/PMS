<x-layout>
    <div style=" display: flex; align-items: center; justify-content: center;">
        <h1>Mobile Legend Hero Skin By @Aeron.dev</h1>
    </div>
    <hr>
    <div style="display: flex; gap: 10px;padding-left: 100px;">
        <div>
            <a href="{{ route('home') }}" class="btn btn-primary"><i class="fa-solid fa-house"></i></i>Back to home</a>
        </div>
        <div>
            <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Add New Product</a>
        </div>
       
    </div>
    <hr>
    <br>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status','Product updated successfully.') }}
        </div>
    @endif
    <div style="display: flex; flex-wrap: wrap; gap: 20px; align-items: center; justify-content: center;">
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
                <a href="{{ route('products.show', $product) }}"
                    class="btn btn-secondary"><i class="fa-solid fa-circle-info"></i> View Details</a>
            </div>
        </div> <br>
        @endforeach
        <!-- Jg reab tinney jea lomdab ber brer bootstrap use pagination(don't forget to add paginate(3) from get() in controller) -->
        
    </div>
</x-layout>