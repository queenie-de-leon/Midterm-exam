@extends('layouts.app')

@section('content')
<h2>Add Category</h2>
<form action="{{ route('categories.store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input name="name" value="{{ old('name') }}" class="form-control">
    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
  </div>
  <button class="btn btn-primary">Save</button>
  <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
