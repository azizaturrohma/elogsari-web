<?php

namespace App\Http\Controllers;

use App\Models\Products;

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
        $product = Products::with('productCategories')->find($id);

        return view('products.detail', compact('product'));
    }

    public function showByCategory($category_id)
    {
        $products = Products::where('category_id', $category_id)->get();
        return view('products.category.index', ['products' => $products]);
    }
}
