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

<body class="null">
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
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages1" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                            <img src="https://demos.creative-tim.com/soft-ui-design-system/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages1">
                            <div class="d-none d-lg-block">
                                <a href="#" class="dropdown-item border-radius-md">Kopi</a>
                                <a href="#" class="dropdown-item border-radius-md">Jamu</a>
                                <a href="#" class="dropdown-item border-radius-md">Anyaman</a>
                                <a href="#" class="dropdown-item border-radius-md">Kue</a>
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

                    <!-- Login Button -->
                    <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">
                        <a href="/login" class="btn btn-sm btn-round mb-0 me-1 mt-2 mt-md-0 btn-success">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Section Start -->
    <header class="">
        <div class="page-header min-vh-100">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="
            background-image: url('https://loopple.s3.eu-west-3.amazonaws.com/images/vWa3XDUigj4eeR6s44a2XaPrz2PQhaQJFw6pRBQr.jpg');
          "></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                        <h1 class="text-gradient text-primary">E-KATALOG UMKM</h1>
                        <h1 class="mb-4">GOMBENGSARI</h1>
                        <p class="lead pe-5 me-5">
                            Jika kau ingin tahu apa bahagiaku, itu senyumanmu:v
                        </p>
                        <div class="buttons">
                            <a href="/login" class="btn btn-sm btn-round mb-0 me-1 mt-4 mt-md-0 btn-success">ALL PRODUCTS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Maps & Weather -->
    <div class="container mt-4">
        <div class="row">
            <!-- Google Maps -->
            <div class="col-4 mt-4">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.523841746486!2d114.3240364!3d-8.149857700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14fbc14bc0e5f%3A0xfcad40355066433e!2sPokmas%20sumberwaru%20maju!5e0!3m2!1sid!2sid!4v1700389196514!5m2!1sid!2sid" width="400" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Open Weather Map API -->
            <div class="col-8 mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <!-- Info Lokasi, Waktu, dan Suhu -->
                                    <div class="location">
                                        <a id="map-pin"><i data-feather="map-pin"></i></a>
                                        <p>Gombengsari, Kalipuro, Banyuwangi</p>
                                    </div>
                                    <div class="date">
                                        <a id="calendar"><i data-feather="calendar"></i></a>
                                        @if(isset($weatherData['dt']))
                                        <?php
                                        $dateTime = \Carbon\Carbon::createFromTimestamp($weatherData['dt']);
                                        ?>
                                        <p>{{ $dateTime->format('l, d F Y') }}</p>
                                        @else
                                        <p>Tanggal tidak tersedia</p>
                                        @endif
                                    </div>
                                    <div class="time">
                                        <a id="clock"><i data-feather="clock"></i></a>
                                        @if(isset($weatherData['dt']))
                                        <?php
                                        $dateTime = new DateTime();
                                        $dateTime->setTimezone(new \DateTimeZone('Asia/Jakarta'));
                                        $time = $dateTime->format('H:i:s');
                                        ?>
                                        <p>{{ $time }}</p>
                                        @else
                                        <p>Waktu tidak tersedia</p>
                                        @endif
                                    </div>
                                    <div class="temperature">
                                        @if(isset($weatherData['main']))
                                        <?php
                                        $temperature = $weatherData['main']['temp'] - 273;
                                        ?>
                                        <p>{{ $temperature }} °C</p>
                                        @else
                                        <p>Suhu tidak tersedia</p>
                                        @endif
                                    </div>
                                </div>

                                <!-- Icon & Info Cuaca -->
                                <div class="col text-center">
                                    <div class="weather-icon">
                                        @if(isset($weatherData['weather'][0]['icon']))
                                        <div class="weather-icon">
                                            <img src="http://openweathermap.org/img/wn/{{ $weatherData['weather'][0]['icon'] }}.png" alt="Weather Icon" style="width: 150px; height: 150px;">
                                        </div>
                                        @endif
                                    </div>
                                    <div class="main-weather">
                                        @if(isset($weatherData['weather'][0]))
                                        <p style="font-size: 25px;">{{ $weatherData['weather'][0]['main'] }}</p>
                                        @else
                                        <p>Cuaca tidak tersedia</p>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <hr class="horizontal dark mt-0 mb-4" />
                            <div class="row text-center">
                                <div class="row">
                                    <div class="card me-3" style="width: 10rem;">
                                        <img src="assets/img/weather/humidity.png" class="card-img-top" alt="humadity">
                                        <p style="font-size: 15px;">Kelembaban</p>
                                        <hr class="horizontal dark mt-0 mb-1" />
                                        @if(isset($weatherData['main']))
                                        <p style="font-size: 20px;">{{ $weatherData['main']['humidity'] }} RH</p>
                                        @else
                                        <p>Cuaca tidak tersedia</p>
                                        @endif
                                    </div>
                                    <div class="card me-3" style="width: 10rem;">
                                        <img src="assets/img/weather/storm.png" class="card-img-top" alt="wind">
                                        <p style="font-size: 15px;">Kecepatan Angin</p>
                                        <hr class="horizontal dark mt-0 mb-1" />
                                        @if(isset($weatherData['wind']))
                                        <?php
                                        $wind_speed = $weatherData['wind']['speed'] * 1.8;
                                        ?>
                                        <p style="font-size: 20px;">{{ $wind_speed }} km/jam</p>
                                        @else
                                        <p>Data tidak tersedia</p>
                                        @endif
                                    </div>
                                    <div class="card me-3" style="width: 10rem;">
                                        <img src="assets/img/weather/cloudy.png" class="card-img-top" alt="pressure">
                                        <p style="font-size: 15px;">Tekanan Udara</p>
                                        <hr class="horizontal dark mt-0 mb-1" />
                                        @if(isset($weatherData['main']))
                                        <p style="font-size: 20px;">{{ $weatherData['main']['pressure'] }} hPa</p>
                                        @else
                                        <p>Data tidak tersedia</p>
                                        @endif
                                    </div>
                                    <div class="card me-3" style="width: 10rem;">
                                        <img src="assets/img/weather/clouds.png" class="card-img-top" alt="clouds">
                                        <p style="font-size: 15px;">Tudung Awan</p>
                                        <hr class="horizontal dark mt-0 mb-1" />
                                        @if(isset($weatherData['clouds']))
                                        <p style="font-size: 20px;">{{ $weatherData['clouds']['all'] }} Okta</p>
                                        @else
                                        <p>Data tidak tersedia</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <h6 class="text-uppercase mb-2">ELOGSARI</h6>
                    <p class="mb-4 pb-2">E-Katalog UMKM Gombengsari</p>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-facebook" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                        <span class="text-lg fab fa-github" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="col-md-2 col-6 ms-lg-auto mb-md-0 mb-4">
                    <h6 class="text-sm">Pages</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">Categories</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">About Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-6 mb-md-0 mb-4">
                    <h6 class="text-sm">Categories</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">Coffee</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">Herb</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">Plait</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">
                                Cookies</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-6 mb-md-0 mb-4">
                    <h6 class="text-sm">Legal</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">NIB</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">Halal</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">BPOM</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="javascript:;">PIRT</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 col-6 mb-md-0 mb-4">
                    <h6 class="text-sm">Contact Us</h6>
                    <ul class="flex-column ms-n3 nav">
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="mailto:https://mail.google.com/mail/u/0/?view=cm&amp;tf=1&amp;fs=1&amp;to=rumahkreatif.231@gmail.com">Email</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="https://www.instagram.com/pokmas_sumberwarumaju/" target="_blank">Instagram</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="https://www.tiktok.com/@rumahkreatif321" target="_blank">Tik Tok</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="https://maps.app.goo.gl/XtdR2yHJiaBmtae29" target="_blank">Google Maps</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="horizontal dark mt-lg-5 mt-4 mb-sm-4 mb-1" />
            <div class="row">
                <div class="copyright">
                    Copyright ©
                    <script>
                        document.write(
                            new Date().getFullYear()
                        );
                    </script>
                    by
                    <a href="https://www.instagram.com/p2md.hmjti2023/" class="font-weight-bold" target="_blank">P2MD HMJTI POLIWANGI </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

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