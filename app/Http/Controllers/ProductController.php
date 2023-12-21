<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductCategories;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::paginate(20);
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Products::where('id', $id)->first();

        return view('products.detail', compact('product'));
    }

    public function showByCategory($category_id)
    {
        $category = Products::find($category_id);

        if ($category) {
            $products = $category->products;

            return view('products.category.index', ['products' => $products]);
        } else {
            return redirect('/')->with('error', 'Kategori tidak ditemukan');
        }
    }
}
