@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>Transactions</h2>
  <a href="{{ route('transactions.create') }}" class="btn btn-primary">New Transaction</a>
</div>

<table class="table">
  <thead><tr><th>Date</th><th>Product</th><th>Type</th><th>Qty</th><th>Remarks</th></tr></thead>
  <tbody>
    @foreach($transactions as $t)
      <tr>
        <td>{{ $t->transacted_at->format('Y-M-d H:i') }}</td>
        <td>{{ $t->product?->name }}</td>
        <td>{{ $t->transaction_type }}</td>
        <td>{{ $t->quantity }}</td>
        <td>{{ $t->remarks }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

{{ $transactions->links() }}
@endsection
