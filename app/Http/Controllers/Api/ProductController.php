<?php

namespace App\Http\Controllers\Api;

use App\Models\Products;
use App\Http\Controllers\Controller;
use App\Models\ProductCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        $products = Products::whereHas('user', function ($query) use ($userId) {
            $query->where('id', $userId);
        })->orderBy('created_at', 'desc')->get();

        return response([
            'products' => $products
        ], 200);
    }

    public function categories()
    {
        $categories = ProductCategories::all();
        return response()->json([
            'status' => true,
            'data' => $categories,
        ], 200);
    }

    public function store(Request $request)
    {
        $data = Validator::make($request->all(), [
            'user_id' => 'integer',
            'category_id' => 'integer',
            'product_name' => 'required|min:4|max:50',
            'product_desc' => 'required|min:5|max:150',
            'price' => 'required|integer',
            'availability' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        if ($data->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data yang Anda masukkan tidak valid',
                'error' => $data->errors(),
            ]);
        }

        $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images/products'), $filename);

        $product = Products::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'price' => $request->price,
            'availability' => $request->availability,
            'image' => $filename,
        ]);

        return response([
            'status' => true,
            'message' => 'Produk ' . $request->product_name . ' berhasil ditambahkan',
            'product' => $product,
        ], 200);
    }

    public function show($id)
    {
        $data = Products::find($id);

        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Data produk ditemukan',
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Data produk tidak ditemukan',
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $data = Products::find($id);

        if (!$data) {
            return response([
                'status' => false,
                'message' => 'Data produk tidak ditemukan',
            ], 404);
        }

        if ($data->user_id != auth()->user()->id) {
            return response([
                'status' => false,
                'message' => 'Akses ditolak'
            ], 403);
        }

        $validate = Validator::make($request->all(), [
            'user_id' => 'integer',
            'category_id' => 'integer',
            'product_name' => 'required|min:4|max:50',
            'product_desc' => 'required|min:5|max:150',
            'price' => 'required|integer',
            'availability' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Data yang Anda masukkan tidak valid',
                'error' => $validate->errors(),
            ]);
        }

        // $image = $this->saveImage($request->image, 'products');

        $data->update([
            'product_name' => $request->product_name,
            'product_desc' => $request->product_desc,
            'price' => $request->price,
            'availability' => $request->availability,
            // 'image' => $image,
        ]);

        return response([
            'status' => true,
            'message' => 'Data produk berhasil diperbarui',
            'product' => $data,
        ], 200);
    }

    public function destroy($id)
    {
        $data = Products::find($id);

        if (!$data) {
            return response([
                'status' => false,
                'message' => 'Data produk tidak ditemukan',
            ], 404);
        }

        if ($data->user_id != auth()->user()->id) {
            return response([
                'message' => 'Akses ditolak'
            ], 403);
        }

        $data->delete();

        return response([
            'status' => true,
            'message' => 'Produk dihapus'
        ], 200);
    }
}
