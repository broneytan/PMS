<label for="name">Product Name</label>
<input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name ?? '') }}">

<label for="description">Description</label>
<textarea name="description" id="description" class="form-control">{{ old('description', $product->description ?? '') }}</textarea>

<label for="qty">Quantity</label>
<input type="text" name="qty" id="qty" class="form-control" value="{{ old('qty', $product->qty ?? '') }}">

<label for="price">Price</label>
<input type="text" name="price" id="price" class="form-control" value="{{ old('price', $product->price ?? '') }}">

<label for="photo" class="form-label">Photo</label>
<input type="file" name="photo" id="photo" class="form-control">

@if(isset($product) && $product->photo)
    <p class="mt-2">
        <img src="{{ asset('storage/' . $product->photo) }}" alt="Product photo" width="120" class="img-thumbnail">
    </p>
@endif

<br>
<button class="btn btn-primary">{{ isset($product) ? 'Update' : 'Save' }}</button>
