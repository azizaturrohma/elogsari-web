<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELOGSARI</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>

    <!-- Navbar start -->
    <nav class="navbar">
        <img src="assets/img/logo.png" alt="ELOGSARI" class="mb-2" style="width:70px;height:50px;">

        <div class="navbar-nav">
            <a href="#home">Beranda</a>
            <a href="#categories">Kategori</a>
            <a href="#products">Produk</a>
            <a href="#about">Tentang Kami</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i data-feather="search"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>

        <button type="button" class="btn">Login</button>

        <!-- Search Form start -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="Cari disini...">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
        <!-- Search Form end -->

    </nav>
    <!-- Navbar end -->

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <!-- My Javascript -->
    <script src="assets/js/home.js"></script>
</body>

</html>