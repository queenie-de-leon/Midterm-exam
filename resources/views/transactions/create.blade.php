@extends('layouts.app')

@section('content')
<h2>New Transaction</h2>
<form action="{{ route('transactions.store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label class="form-label">Product</label>
    <select name="product_id" class="form-select">
      <option value="">-- choose --</option>
      @foreach($products as $p)
        <option value="{{ $p->id }}">{{ $p->name }} (Stock: {{ $p->stock }})</option>
      @endforeach
    </select>
    @error('product_id') <div class="text-danger">{{ $message }}</div> @enderror
  </div>

  <div class="mb-3">
    <label class="form-label">Type</label>
    <select name="transaction_type" class="form-select">
      <option value="STOCK_IN">Stock in</option>
      <option value="STOCK_OUT">Stock out</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" name="quantity" class="form-control" value="1">
  </div>

  <div class="mb-3">
    <label class="form-label">Remarks</label>
    <textarea name="remarks" class="form-control"></textarea>
  </div>

  <button class="btn btn-primary">Record</button>
  <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
