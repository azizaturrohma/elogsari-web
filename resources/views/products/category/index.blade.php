<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ELOGSARI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/home/theme.css" />
    <link rel="stylesheet" href="assets/css/home/loopple/loopple.css" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body style="background-color: green;">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-1">
        <div class="container">
            <img src="assets/img/logo.png" alt="ELOGSARI" class="mb-2" style="width:70px; height:50px;">
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
                <ul class="navbar-nav navbar-nav-hover w-100">

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a href="/" class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                            Beranda
                        </a>
                    </li>

                    <!-- Dropdown Kategori -->
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages1" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                            <img src="https://demos.creative-tim.com/soft-ui-design-system/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages1">
                            <div class="d-none d-lg-block">
                                <a href="{{ route('products.category', ['category_id' => 1]) }}" class="dropdown-item border-radius-md">Kopi</a>
                                <a href="{{ route('products.category', ['category_id' => 2]) }}" class="dropdown-item border-radius-md">Jamu</a>
                                <a href="{{ route('products.category', ['category_id' => 3]) }}" class="dropdown-item border-radius-md">Anyaman</a>
                                <a href="{{ route('products.category', ['category_id' => 4]) }}" class="dropdown-item border-radius-md">Kue</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <br>

    <div class="container mb-5">
        <div class="row justify-content-start">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('images/products/' . $product->image) }}" style="width: 300px; height: 180px;" card-img-top" alt="product">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">
                            <strong>Harga :</strong> Rp.{{ number_format($product->price)}} <br>
                            <strong>Ketersediaan :</strong> {{ $product->availability }} <br>
                            <strong>Kategori :</strong> {{ $product->productCategories->cat_name }}
                            <hr>
                        </p>
                        <a href="/product/{{ $product->id }}" class="btn btn-primary" style="color: white; background-color: green;"><i class="fa fa-shopping-cart"></i> Detail Produk</a>
                    </div>
                </div>

            </div>

            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/soft-design-system.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/plugins/countup.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/plugins/flatpickr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/plugins/typedjs.js"></script>

    <script>
        if (document.getElementById("state1")) {
            const countUp = new CountUp(
                "state1",
                document.getElementById("state1").getAttribute("countTo")
            );

            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }

        if (document.getElementById("state2")) {
            const countUp1 = new CountUp(
                "state2",
                document.getElementById("state2").getAttribute("countTo")
            );
            if (!countUp1.error) {
                countUp1.start();
            } else {
                console.error(countUp1.error);
            }
        }

        if (document.getElementById("state3")) {
            const countUp2 = new CountUp(
                "state3",
                document.getElementById("state3").getAttribute("countTo")
            );
            if (!countUp2.error) {
                countUp2.start();
            } else {
                console.error(countUp2.error);
            }
        }

        if (document.querySelector(".datepicker-1")) {
            flatpickr(".datepicker-1", {}); // flatpickr
        }

        if (document.querySelector(".datepicker-2")) {
            flatpickr(".datepicker-2", {}); // flatpickr
        }
        if (document.getElementById("typed")) {
            var typed = new Typed("#typed", {
                stringsElement: "#typed-strings",
                typeSpeed: 70,
                backSpeed: 50,
                backDelay: 200,
                startDelay: 500,
                loop: true,
            });
        }
    </script>

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <script src="./assets/js/home/loopple/loopple.js"></script>
</body>

</html>