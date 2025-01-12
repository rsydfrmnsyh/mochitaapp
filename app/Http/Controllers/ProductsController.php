<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('products',['products' => Products::all()]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|integer',
            'product_stock' => 'required|integer',
            ]);
            Products::create($validateData);
            return redirect('/products')->with('message',"$request->product_name berhasil ditambahkan");
    }

    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('products.show', ['products' => $product]);
    }

    public function edit(Products $products)
    {
        return view('products.edit',compact('products'));
    }

    public function update(Request $request, Products $products)
    {
        $validateData = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|integer',
            'product_stock' => 'required|integer',
            ]);
            Products::create($validateData);
            return redirect('/products/'.$products->id)->with('message',"$products->product_name berhasil diupdate");
    }

    public function destroy($id)
    {
        $products = Products::findOrFail($id);
        $products->delete();
        return redirect('/products')->with('message',"$products->product_name berhasil dihapus");
    }
}
