@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>Products</h2>
  <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
</div>

<table class="table table-hover">
  <thead><tr><th>Name</th><th>Category</th><th>Stock</th><th>Price</th><th>Actions</th></tr></thead>
  <tbody>
    @foreach($products as $p)
      <tr>
        <td>{{ $p->name }}</td>
        <td>{{ $p->category?->name }}</td>
        <td>{{ $p->stock }}</td>
        <td>{{ number_format($p->price,2) }}</td>
        <td>
          <a href="{{ route('products.view', $p) }}" class="btn btn-sm btn-secondary">
            <i class="fas fa-eye"></i>
          </a>
          <a href="{{ route('products.edit', $p) }}" class="btn btn-sm btn-success" >
            <i class="fas fa-edit"></i>
          </a>
          <form action="{{ route('products.destroy', $p) }}" method="post" class="d-inline" onsubmit="return confirm('Delete product?')">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger">
              <i class="fas fa-trash"></i>
            </button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{{ $products->links() }}
@endsection
