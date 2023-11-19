<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Elogsari Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="../assets/css/admin/dashboard/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/admin/dashboard/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="../assets/css/admin/dashboard/soft-ui-dashboard.min.css?v=1.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/admin/dashboard/theme.css" />

    <style>
        .custom-height {
            height: 100vh;
            overflow: hidden;
        }
    </style>
</head>

<body class="g-sidenav-show bg-gray-100">

    <!-- Sidebar -->
    @include('admin.dashboard.layouts.sidebar')

    <div class="main-content" id="panel">
        <!-- Index -->
        @yield('container')

        <!-- Footer -->
        @include('admin.dashboard.layouts.footer')
    </div>
</body>

</html>