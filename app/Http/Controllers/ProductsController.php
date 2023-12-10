<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.products.show');
    }

    public function create()
    {
        $products = Products::all();
        $product_categories = ProductCategories::all();

        return view('admin.dashboard.products.create', compact('products', 'product_categories'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'user_id' => 'integer',
            'category_id' => 'integer',
            'product_name' => 'required|max:50',
            'product_desc' => 'required|max:150',
            'price' => 'required|integer',
            'availability' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        $validate['user_id'] = auth()->user()->id;
        $data = Products::create($validate);

        if ($request->hasFile('image')) {
            $request->file('image')->move('images/products/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return redirect('/dashboard')->with('success', 'Produk ' . $request->product_name . ' berhasil ditambahkan');
    }


    public function show(Products $product)
    {
        //
    }

    public function edit(Products $product)
    {
        //
    }

    public function update(Request $request, Products $product)
    {
        //
    }

    public function destroy(Products $product)
    {
        //
    }
}
