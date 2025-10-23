@extends('layouts.app')

@section('content')
<h2>Edit Category</h2>

<form action="{{ route('categories.update', $category) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" value="{{ old('name', $category->name) }}" class="form-control">
    @error('name')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description', $category->description) }}</textarea>
    @error('description')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <button class="btn btn-primary">Update</button>
  <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
