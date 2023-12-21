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

<body style="background-color: white;">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/product" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>

            <br>

            <div class="col-md-12 mt-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('images/products/' . $product->image) }}" class="rounded mx-auto d-block" style="width: 300px; height: 180px;" alt="">
                            </div>
                            <div class=" col-md-6 mt-5">
                                <h2>{{ $product->product_name }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Kategori</td>
                                            <td>:</td>
                                            <td>{{ $product->productCategories->cat_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td> Rp.{{ number_format($product->price) }} </td>
                                        </tr>
                                        <tr>
                                            <td>Ketersediaan</td>
                                            <td>:</td>
                                            <td> {{ $product->availability }} </td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td>{{ $product->product_desc }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <button type="submit" class="btn btn-primary mt-2" style="color: green;">
                                    <a href="https://wa.me/6282143715407" style="color: inherit; text-decoration: none;">
                                        <i class="fa fa-shopping-cart"></i> Pesan WhatsApp
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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