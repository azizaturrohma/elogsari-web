@extends('admin.dashboard.layouts.main')

@section('container')
<div class="container mt-5">
    <h2>Data Produk</h2>
    <table class="table mt-4" style="border: 2px solid #000000;">
        <thead style="background-color: #28a745; color: white;">
            <tr>
                <th scope="col">No</th>
                <th scope="col" style="border: 1px solid black;" class="text-center">Nama Produk</th>
                <th scope="col" style="border: 1px solid black;" class="text-center">Harga</th>
                <th scope="col" style="border: 1px solid black;" class="text-center">Kategori</th>
                <th scope="col" style="border: 1px solid black;" class="text-center">Ketersediaan</th>
                <th scope="col" style="border: 1px solid black;" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $key => $product)
            <tr>
                <td style="border: 1px solid #000000;" class="text-center">
                    {{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}
                </td>
                <td style="border: 1px solid #000000;" class="text-center">{{ $product->product_name }}</td>
                <td style="border: 1px solid #000000;" class="text-center">{{ $product->price }}</td>
                <td style="border: 1px solid #000000;" class="text-center">{{ $product->category->cat_name }}</td>
                <td style="border: 1px solid #000000;" class="text-center">{{ $product->availability }}</td>
                <td style="border: 1px solid #000000;" class="text-center">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" style="background-color: rgb(0, 102, 255)">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $products->links() }}

    </div>
    @endsection