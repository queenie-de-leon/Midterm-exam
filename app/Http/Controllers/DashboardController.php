<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

public function index()
{
    // existing
    $totalProducts = Product::count();
    $totalCategories = Category::count();
    $totalStock = Product::sum('stock');
    $lowStockThreshold = 5;
    $lowStockProducts = Product::where('stock', '<=', $lowStockThreshold)->with('category')->get();
    $recentTransactions = Transaction::with('product')->orderByDesc('transacted_at')->limit(5)->get();
    // sum of (stock * price) for all products
    $totalValue = Product::sum(DB::raw('stock * price'));
    $topSellingProducts = Transaction::select('product_id', DB::raw('SUM(quantity) as total_sold'))
        ->where('transaction_type', 'OUT')
        ->groupBy('product_id')
        ->orderByDesc('total_sold')
        ->limit(5)
        ->with('product') // eager load the product detail
        ->get();

    return view('dashboard.index', compact(
        'totalProducts',
        'totalCategories',
        'totalStock',
        'lowStockProducts',
        'lowStockThreshold',
        'recentTransactions',
        'totalValue',
        'topSellingProducts'
    ));
}
}
