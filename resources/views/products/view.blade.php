@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    <h2>Product Details</h2>
  </div>
  <div class="card-body">

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Category:</strong> {{ $product->category?->name }}</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>
    <p><strong>Price:</strong> ₱{{ number_format($product->price, 2) }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>

    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">
      <i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete this product?');">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">
        <i class="fas fa-trash"></i>
      </button>
    </form>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
  </div>
</div>
@endsection
