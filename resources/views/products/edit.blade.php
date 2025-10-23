@extends('layouts.app')

@section('content')
<h2>Edit Product</h2>

<form action="{{ route('products.update', $product) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" value="{{ old('name', $product->name) }}" class="form-control">
    @error('name')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Category</label>
    <select name="category_id" class="form-select">
      <option value="">-- choose category --</option>
      @foreach($categories as $c)
        <option value="{{ $c->id }}" {{ old('category_id', $product->category_id) == $c->id ? 'selected' : '' }}>
          {{ $c->name }}
        </option>
      @endforeach
    </select>
    @error('category_id')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Stock</label>
    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="form-control" min="0">
    @error('stock')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" class="form-control" min="0">
    @error('price')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
    @error('description')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <button class="btn btn-primary">Update</button>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
