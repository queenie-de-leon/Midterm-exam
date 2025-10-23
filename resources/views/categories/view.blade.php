@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    <h2>Category Details</h2>
  </div>
  <div class="card-body">
    <p><strong>Name:</strong> {{ $category->name }}</p>
    <p><strong>Description:</strong> {{ $category->description }}</p>

    <a href="{{ route('categories.edit', $category) }}" class="btn btn-success">
      <i class="fas fa-edit"></i>
    </a>
    <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure to delete this category?');">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">
        <i class="fas fa-trash"></i>
      </button>
    </form>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
  </div>
</div>
@endsection
