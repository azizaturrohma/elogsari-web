<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container" id="container">
        <div class="toggle-container">
            <h1>WELCOME TO</h1>
            <img src="assets/img/logo.png" alt="ELOGSARI" style="width:200px;height:150px;">
            <p>E-Katalog UMKM Gombengsari</p>
        </div>
        <div class="form-container">
            <form>
                <h1>LOGIN</h1>
                <span>Masukkan email dan password Anda</span>
                <input type="email" placeholder="Email">
                <i class="fa-regular fa-envelope"></i>
                <input type="password" placeholder="Password">
                <i class="fa-solid fa-lock"></i>
                <div class="eye-wrapper">
                    <span class="close">
                        <i class="fa-regular fa-eye-slash"></i>
                    </span>
                    <span class="open">
                        <i class="fa-regular fa-eye"></i>
                    </span>
                </div>
                <button>MASUK</button>
            </form>
        </div>
    </div>

    <script src="assets/js/login.js"></script>
</body>

</html>