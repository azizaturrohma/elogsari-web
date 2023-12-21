@extends('admin.dashboard.layouts.main')

@section('container')

<div class="container-fluid pt-3">
    <div class="card mb-4">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h6 class="mb-0">UBAH PASSWORD</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="/update-password" method="POST">
                @csrf

                <div class="main">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="old_password">Password Lama</label>
                            <input name="old_password" type="password" value="{{ old('old_password') }}" id="old_password" class="@error('old_password') is-invalid @enderror form-control" placeholder=" Password Lama" />
                            @error('old_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="new_password">Password Baru</label>
                            <input name="new_password" type="password" value="{{ old('new_password') }}" id="new_password" class="@error('new_password') is-invalid @enderror form-control" placeholder="Password Baru" />
                            @error('new_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="confirm_password">Konfirmasi Password</label>
                            <input name="confirm_password" type="password" value="{{ old('confirm_password') }}" id="confirm_password" class="@error('confirm_password') is-invalid @enderror form-control" placeholder="Konfirmasi Password" />
                            @error('confirm_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-light mt-3 w-50" style="background-color: green; color: white; font-size: 15px">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection