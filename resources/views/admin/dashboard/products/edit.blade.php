@extends('admin.dashboard.layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid pt-2 text-start">
        <div class="card mb-5">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h6 class="mb-0">Edit Produk</h6>
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
                        <form action="/" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="product_name">Nama Produk</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" required>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Kategori Produk</label>
                                <i class="fas fa-chevron-down"></i>
                                <div class="custom-dropdown">
                                    <select class="form-control" id="category_id" name="category_id" required>
                                        @foreach ($product_categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_desc">Deskripsi Produk</label>
                                <textarea class="form-control" id="product_desc" name="product_desc" rows="4" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Foto Produk</label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Harga Produk</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="ketersediaan_produk">Ketersediaan Produk</label>
                                <i class="fas fa-chevron-down"></i>
                                <div class="custom-dropdown">
                                    <select id="availability" name="availability" class="form-control" required>
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Habis">Habis</option>
                                    </select>

                                </div>
                            </div>
                            <a href="/" class="btn btn-danger">BATAL</a>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
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