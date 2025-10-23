@extends('layouts.app')

@section('content')
<h2>Reports</h2>

<div class="row mb-3">
  <div class="col-md-4">
    <div class="card p-3">
      <h5>Categories</h5>
      <ul>
        @foreach($byCategory as $c)
          <li>{{ $c->name }} — {{ $c->products_count }} products</li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="col-md-8">
    <div class="card p-3">
      <h5>Low Stock </h5>
      <table class="table">
        <thead><tr><th>Product</th><th>Category</th><th>Stock</th></tr></thead>
        <tbody>
          @foreach($lowStock as $p)
            <tr><td>{{ $p->name }}</td><td>{{ $p->category?->name }}</td><td>{{ $p->stock }}</td></tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="card p-3 mt-3">
  <h5>Recent Transactions</h5>
  <table class="table">
    <thead><tr><th>Date</th><th>Product</th><th>Type</th><th>Qty</th></tr></thead>
    <tbody>
      @foreach($recentTransactions as $t)
        <tr><td>{{ $t->transacted_at->format('Y-M-d H:i') }}</td><td>{{ $t->product?->name }}</td><td>{{ $t->transaction_type }}</td><td>{{ $t->quantity }}</td></tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
