<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ProductCategories;

class ProductCategoriesController extends Controller
{
    public function store(Request $request)
    {
        $data = Validator::make($request->all(), [
            'cat_name' => 'required',
        ]);

        if ($data->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data yang Anda masukkan tidak valid',
                'error' => $data->errors(),
            ]);
        }

        $product_categories = ProductCategories::create([
            'cat_name' => $request->cat_name,
        ]);

        return response([
            'status' => true,
            'message' => 'Kategori ' . $request->cat_name . ' berhasil ditambahkan',
            'product_categories' => $product_categories,
        ], 200);
    }
}
