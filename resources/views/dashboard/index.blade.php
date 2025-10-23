@extends('layouts.app')

@section('content')
<div class="row mb-4 gx-2 gy-2">
    <div class="col-12">
        <div class="d-flex flex-wrap justify-content-between">
            {{-- Total Value --}}
            <div class="card text-white bg-accent flex-fill me-2 mb-2" style="min-width: 160px;">
                <div class="card-body p-2">
                    <h6 class="card-title mb-1">Total Inventory Value</h6>
                    <p class="card-text fs-2 mb-0">₱{{ number_format($totalValue, 2) }}</p>
                </div>
            </div>

            {{-- Total Stock --}}
            <div class="card text-white bg-warning flex-fill me-2 mb-2" style="min-width: 100px;">
                <div class="card-body p-2">
                    <h6 class="card-title mb-1">Total Stock</h6>
                    <p class="card-text fs-2 mb-0">{{ $totalStock }}</p>
                </div>
            </div>

            {{-- Total Categories --}}
            <div class="card text-white bg-accent flex-fill me-2 mb-2" style="min-width: 100px;">
                <div class="card-body p-2">
                    <h6 class="card-title mb-1">Total Categories</h6>
                    <p class="card-text fs-2 mb-0">{{ $totalCategories }}</p>
                </div>
            </div>

            {{-- Total Products --}}
            <div class="card text-white bg-accent flex-fill me-2 mb-2" style="min-width: 100px;">
                <div class="card-body p-2">
                    <h6 class="card-title mb-1">Total Products</h6>
                    <p class="card-text fs-2 mb-0">{{ $totalProducts }}</p>
                </div>
            </div>

            {{-- Low Stock --}}
            <div class="card text-white bg-danger flex-fill mb-2" style="min-width: 160px;">
                <div class="card-body p-2">
                    <h6 class="card-title mb-1">Low Stock</h6>
                    <p class="card-text fs-2 mb-0">{{ $lowStockProducts->count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Tables in Grid --}}
<div class="row">
    {{-- Top Selling Products --}}
    <div class="col-lg-6 col-md-12 mb-4">
        <div class="card h-100">
            <div class="card-header">Top Selling Products</div>
            <div class="card-body table-container-small">
                <table class="table table-sm align-middle">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Total Sold</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($topSellingProducts as $tp)
                            <tr>
                                <td>{{ $tp->product?->name }}</td>
                                <td>{{ $tp->product?->category?->name }}</td>
                                <td>{{ $tp->total_sold }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No sales data yet</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Recent Transactions --}}
    <div class="col-lg-6 col-md-12 mb-4">
        <div class="card h-100">
            <div class="card-header">Recent Transactions</div>
            <div class="card-body table-container-small">
                <table class="table table-sm align-middle">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Product</th>
                            <th>Type</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($recentTransactions as $t)
                            <tr>
                                <td>{{ $t->transacted_at->format('Y-M-d H:i') }}</td>
                                <td>{{ $t->product?->name }}</td>
                                <td>{{ $t->transaction_type }}</td>
                                <td>{{ $t->quantity }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No transactions yet</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Products Low on Stock --}}
<div class="card">
    <div class="card-header">Products Low on Stock</div>
    <div class="card-body table-container-small">
        <table class="table table-sm align-middle">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($lowStockProducts as $p)
                    <tr>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->category?->name }}</td>
                        <td>{{ $p->stock }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No products low on stock</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
