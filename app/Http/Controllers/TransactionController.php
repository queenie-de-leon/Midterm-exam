<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('product')->orderByDesc('transacted_at')->paginate(15);
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        $products = Product::orderBy('name')->get();
        return view('transactions.create', compact('products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'transaction_type' => 'required|in:STOCK_IN,STOCK_OUT',
            'quantity' => 'required|integer|min:1',
            'remarks' => 'nullable|string',
        ]);

        DB::transaction(function () use ($data) {
            $product = Product::findOrFail($data['product_id']);

            // adjust stock
            if ($data['transaction_type'] === 'STOCK_IN') {
                $product->stock += $data['quantity'];
            } else { // OUT
                if ($product->stock < $data['quantity']) {
                    throw new \Exception('Not enough stock for this product.');
                }
                $product->stock -= $data['quantity'];
            }
            $product->save();

            Transaction::create($data + ['transacted_at' => now()]);
        });

        return redirect()->route('transactions.index')->with('success','Transaction recorded.');
    }

    // optional: show, edit, destroy (you can implement if required)
}
