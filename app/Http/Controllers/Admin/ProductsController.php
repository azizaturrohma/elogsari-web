<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Models\ProductCategories;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $products = Products::where('user_id', $userId)->paginate(5);

        return view('admin.dashboard.products.index', compact('products'));
    }

    public function create()
    {
        $pds = Products::all();
        $kategoriProduk = ProductCategories::all();

        return view('admin.dashboard.products.create', compact('pds', 'kategoriProduk'));
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'user_id' => 'integer',
            'category_id' => 'required|integer',
            'product_name' => 'required|min:5|max:50',
            'product_desc' => 'required|min:5|max:100',
            'price' => 'required|integer|min:4|max:7',
            'availability' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $validasi['user_id'] = auth()->user()->id;
        $data = Products::create($validasi);

        if ($request->hasFile('image')) {
            $request->file('image')->move('images/products/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }

        return redirect('/products')->with('success', 'Produk ' . $request->product_name . ' telah ditambahkan');
    }

    public function show(Products $products)
    {
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        $kategoriProduk = ProductCategories::all();

        return view('admin.dashboard.products.edit', compact('product', 'kategoriProduk'));
    }

    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'category_id' => 'required|integer',
            'product_name' => 'required|min:5|max:50',
            'product_desc' => 'required|min:5|max:100',
            'price' => 'required|integer|min:4|max:7',
            'availability' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $product = Products::findOrFail($id);

        $product->update([
            'category_id' => $validasi['category_id'],
            'product_name' => $validasi['product_name'],
            'product_desc' => $validasi['product_desc'],
            'price' => $validasi['price'],
            'availability' => $validasi['availability'],
        ]);

        return redirect('/products', $product->id)->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect('/products')->with(['success' => 'Data produk berhasil dihapus']);
    }
}
