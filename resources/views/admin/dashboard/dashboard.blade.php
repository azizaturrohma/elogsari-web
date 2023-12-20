@extends('admin.dashboard.layouts.main')

@section('container')

<div class="container-fluid pt-3 text-start">
    <div class="card mb-4" style="height: 80vh">
        <div class="card-header" style="background-color: green">
            <div class="row align-items-center">
                <div class="col-8">
                    <h6 class="mb-0" style="color: white">DASHBOARD</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div>
                <img src="assets/img/dashboard/dashboard.png" class="rounded mx-auto d-block" alt="Elogsari" class="btn mt-4 w-30 mx">
            </div>

            <div class="text-center">
                <p class="mt-4" style="font-family: 'Poppins', sans-serif; font-size: 20px;">SILAHKAN TAMBAH PRODUK ANDA!</p>
                <a href="{{ route('add-product') }}" class="btn btn-light mt-4 w-30 mx-auto d-block" style="background-color: green; color: white; font-size: 15px">
                    Tambah Produk
                </a>
            </div>
        </div>
    </div>
</div>

@endsection