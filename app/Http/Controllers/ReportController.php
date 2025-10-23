<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $lowStockThreshold = $request->input('threshold', 5);

        $byCategory = Category::withCount('products')->get();
        $products = Product::with('category')->orderBy('stock', 'asc')->get();
        $lowStock = Product::where('stock', '<=', $lowStockThreshold)->with('category')->get();
        $recentTransactions = Transaction::with('product')->orderByDesc('transacted_at')->limit(50)->get();

        return view('reports.index', compact('byCategory','products','lowStock','recentTransactions','lowStockThreshold'));
    }
}
