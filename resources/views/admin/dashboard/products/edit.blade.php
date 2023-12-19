@extends('admin.dashboard.layouts.main')

@section('container')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<div class="container-fluid pt-4 text-start">
    <div class="card mb-5">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h5 class="mb-1">Edit Produk</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update-product', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="product_name">Nama Produk</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}" required>

                        </div>
                        <div class="form-group">
                            <label for="price">Harga Produk </label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                        </div>
                        {{-- <div class="form-group">
                                <label for="image">Foto Produk</label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div> --}}
                        <div class="form-group">
                            <label for="category_id">Kategori Produk</label>
                            <div class="custom-dropdown">
                                <select class="form-control" id="category_id" name="category_id" required>
                                    @foreach ($kategoriProduk as $kategori)
                                    <option value="{{ $kategori->id }}" {{ $kategori->id == $product->category_id ? 'selected' : '' }}>
                                        {{ $kategori->cat_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="availability">Ketersediaan Produk</label>
                            <div class="custom-dropdown">
                                <select id="availability" name="availability" class="form-control" required>
                                    <option value="Tersedia" {{ $product->availability == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                                    <option value="Habis" {{ $product->availability == 'Habis' ? 'selected' : '' }}>Habis</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product_desc">Deskripsi Produk</label>
                            <textarea class="form-control" id="product_desc" name="product_desc" rows="4" required>{{ $product->product_desc }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection