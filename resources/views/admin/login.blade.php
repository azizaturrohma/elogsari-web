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
                <div class="input-div email">
                    <div class="i">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" class="input">
                    </div>
                </div>
                <div class="input-div password">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input">
                    </div>
                    <div class="eye-wrapper">
                        <span class="close">
                            <i class="fa-regular fa-eye-slash"></i>
                        </span>
                        <span class="open">
                            <i class="fa-regular fa-eye"></i>
                        </span>
                    </div>
                </div>
                <button>MASUK</button>
            </form>
        </div>
    </div>

    <script src="assets/js/login.js"></script>
</body>

</html>