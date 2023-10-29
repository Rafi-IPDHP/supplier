<?php

namespace App\Http\Controllers;

use App\Models\ExitProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ExitProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exitProducts = ExitProduct::all();
        return view('exitProduct.index', compact('exitProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('exitProduct.create', compact('products'));
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

        // $incomingProduct = ExitProduct::create($request->all());
        // $product = Product::find($incomingProduct->product_id);
        // $product->stock -= $request->quantity;
        // $product->save();
        // return redirect()->route('exit-product.index');

        $product = Product::find($request->product_id);

        if ($product) {
            if ($request->quantity > $product->stock) {
                // Quantity melebihi jumlah stock yang tersedia.
                return redirect()->back()->with('error', 'Quantity melebihi stok yang tersedia.');
            }

            // Jika quantity valid, simpan data exit product.
            $exitProduct = ExitProduct::create($request->all());

            // Kurangi stock produk yang sesuai.
            $product->stock -= $request->quantity;
            $product->save();

            return redirect()->route('exit-product.index')->with('success', 'Data barang keluar telah berhasil disimpan.');
        }

        return redirect()->route('exit-product.index')->with('error', 'Produk tidak ditemukan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExitProduct $exitProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExitProduct $exitProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExitProduct $exitProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExitProduct $exitProduct)
    {
        //
    }
}
