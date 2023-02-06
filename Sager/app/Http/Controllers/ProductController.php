<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy('updated_at', 'desc')->get();

        return view('products.index', compact('products'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }
    public function update(Request $request, $id)
{
    $product = Product::find($id);
    $product->description = $request->description;
    $product->name = $request->name;
    $product->quantity = $request->quantity;
    $product->price = $request->price;
    $product->save();
    return redirect('/products');
}

public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->route('products.index')->with('success', 'Product deleted successfully');
}


public function create()
{
    $userId = Auth::id();
    return view('products.create', compact('userId'));
}

public function store(Request $request)
{
    // Validate the input
    $request->validate([
        // Add your validation rules here
    ]);

    // Create a new product
    $product = new Product;
    $product->fill($request->all());
    $product->save();

    // Redirect to the product list
    return redirect()->route('products.index');
}



}
