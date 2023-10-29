<?php

namespace App\Http\Controllers;

use App\Models\IncomingProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class IncomingProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomingProduct = IncomingProduct::all();
        return view('incomingProduct.index', compact('incomingProduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('incomingProduct.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge(['tanggal' => now()]);
        $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|numeric',
            'tanggal' => 'required',
        ]);

        $incomingProduct = IncomingProduct::create($request->all());
        $product = Product::find($incomingProduct->product_id);
        $product->stock += $request->quantity;
        $product->save();
        return redirect()->route('incoming-product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(IncomingProduct $incomingProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IncomingProduct $incomingProduct)
    {
        return view('incomingProduct.edit', compact('incomingProduct'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IncomingProduct $incomingProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IncomingProduct $incomingProduct)
    {
        //
    }
}
