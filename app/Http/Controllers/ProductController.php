<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('name')->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
           'name' => 'required|string|max:255',
           'category_id' => 'required|exists:categories,id',
           'description' => 'nullable|string',
           'stock' => 'required|integer|min:0',
           'price' => 'required|numeric|min:0',
        ]);

        Product::create($data);

        return redirect()->route('products.index')->with('success','Product created.');
    }
    public function show(Product $product)
    {
        return view('products.view', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();
        return view('products.edit', compact('product','categories'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
           'name' => 'required|string|max:255',
           'category_id' => 'required|exists:categories,id',
           'description' => 'nullable|string',
           'stock' => 'required|integer|min:0',
           'price' => 'required|numeric|min:0',
        ]);

        $product->update($data);

        return redirect()->route('products.index')->with('success','Product updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success','Product deleted.');
    }
}
