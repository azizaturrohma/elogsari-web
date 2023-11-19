<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
</head>

<body class="px-4 px-md-0">
    <div class="row container ps-md-0 px-4 mb-5" style="justify-content: center;">
        <div class="col-md-6 bg-white text-md-left text-center left-section d-md-block d-none" style="padding: 100px 50px;">
            <div class="ms-3">
                <h2>WELCOME TO</h2>
                <img src="assets/img/logo.png" alt="ELOGSARI" class="mb-2" style="width:200px;height:150px;">
                <p>E-Katalog UMKM Gombengsari</p>
            </div>
        </div>
        <div class="col-md-6 text-white px-4">
            <h1 class="text-center" style="margin-top: 80px;">LOGIN</h1>

            <form action="/login" method="POST">
                @csrf

                <div class="input-form mt-4">
                    <div style="position: relative">
                        <i class="fa-regular fa-envelope" style="position: absolute; bottom: 15px; left: 8px;"></i>
                        <input type="email" name="email" class="mt-4 ms-2 text-white w-100 @error('email') is-invalid @enderror" id="email" autofocus required value="{{ old('email') }}" style="border: 0; border-bottom: 1.8px solid white; background: transparent; padding-left: 30px; padding-bottom: 10px;" placeholder="Email">

                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div style="position: relative">
                        <i class="fas fa-lock" style="position: absolute; bottom: 15px; left: 8px;"></i>
                        <input type="password" name="password" id="password" required class="mt-4 ms-2 text-white w-100" style="border: 0; border-bottom: 1.8px solid white; background: transparent; padding-left: 30px; padding-bottom: 10px;" placeholder="Password">

                        @error('password')
                        <span class="password-danger">{{ $message }}</span>
                        @enderror

                        <i class="fa-regular fa-eye-slash" id="eyeSlash" style="position: absolute; right: 10px; bottom: 15px; cursor: pointer;"></i>
                        <i class="fa-regular fa-eye" id="eye" style="position: absolute; right: 10px; bottom: 15px; cursor: pointer; display: none;"></i>
                    </div>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label text-white" for="rememberMe">Ingat saya</label>
                </div>
                <button name="submit" type="submit" class="btn bg-white btn-light mt-5 w-50">Masuk</button>
        </div>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/login.js"></script>
</body>

</html>