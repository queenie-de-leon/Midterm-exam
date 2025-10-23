@extends('layouts.app')

@section('content')
<h2>Add Product</h2>
<form action="{{ route('products.store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" value="{{ old('name') }}" class="form-control">
    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Category</label>
    <select name="category_id" class="form-select">
      <option value="">-- choose --</option>
      @foreach($categories as $c)
        <option value="{{ $c->id }}" {{ old('category_id') == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
      @endforeach
    </select>
    @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Stock</label>
    <input type="number" name="stock" value="{{ old('stock',0) }}" class="form-control">
    @error('stock') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" step="0.01" name="price" value="{{ old('price',0.00) }}" class="form-control">
    @error('price') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
  </div>

  <button class="btn btn-primary">Save</button>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
