@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>Categories</h2>
  <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
</div>

<table class="table table-hover">
  <thead><tr><th>Name</th><th>Description</th><th>Actions</th></tr></thead>
  <tbody>
    @foreach($categories as $c)
      <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->description }}</td>
        <td>
          <a href="{{ route('categories.view', $c) }}" class="btn btn-sm btn-secondary">
            <i class="fas fa-eye"></i>
          </a>
          <a href="{{ route('categories.edit', $c) }}" class="btn btn-sm btn-success">
            <i class="fas fa-edit"></i>
          </a>
          <form action="{{ route('categories.destroy', $c) }}" method="post" class="d-inline" onsubmit="return confirm('Delete?')">
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

{{ $categories->links() }}
@endsection
