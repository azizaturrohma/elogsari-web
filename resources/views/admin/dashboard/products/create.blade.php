@extends('admin.dashboard.layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Tambah Produk</h2>
                {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif --}}

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @error('product_name')
                    <li>Nama Produk tidak boleh kosong</li>
                    @enderror

                    @error('price')
                    <li>Harga Produk tidak boleh kosong</li>
                    @enderror

                    @error('image')
                    <li>Foto Produk tidak boleh kosong</li>
                    @enderror

                    @error('product_desc')
                    <li>Deskripsi Produk tidak boleh kosong</li>
                    @enderror

                    @error('price')
                    <li>Harga harus berupa angka</li>
                    @enderror

                    @error('image')
                    <li>File yang diunggah harus berupa gambar</li>
                    @enderror

                    @error('image')
                    <li>Format gambar harus jpg, jpeg, atau png</li>
                    @enderror
                </ul>
            </div>
            @endif

            <form action="{{ route('add-product') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="product_name">Nama Produk</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" required>
                </div>
                <div class="form-group">
                    <label for="price">Harga Produk </label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group">
                    <label for="image">Foto Produk</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label for="category_id">Kategori Produk</label>
                    <i class="fas fa-chevron-down"></i>
                    <div class="custom-dropdown">
                        <select class="form-control" id="category_id" name="category_id" required>
                            @foreach ($kategoriProduk as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->cat_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ketersediaan_produk">Ketersediaan Produk</label>
                    <i class="fas fa-chevron-down"></i>
                    <div class="custom-dropdown">
                        <select id="availability" name="availability" class="form-control" required>
                            <option value="Tersedia">Tersedia</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_desc">Deskripsi Produk</label>
                    <textarea class="form-control" id="product_desc" name="product_desc" rows="4" required></textarea>
                </div>
                <a href="/dashboard" class="btn btn-danger">Batal</a>
                <button type="submit" class="btn btn-success" name="submit">Simpan Produk</button>
            </form>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS (optional, for enhanced functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection