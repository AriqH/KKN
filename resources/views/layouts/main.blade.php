<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RT.10 Kelurahan Sungai Nangka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* CSS for mobile devices */
        @media only screen and (max-width: 768px) {
            .container {
                padding: 10px;
            }
            h1, h2, h3 {
                font-size: 20px;
            }
            img {
                max-width: 100%;
                height: auto;
            }
            .text-center {
                text-align: center;
            }
            .col-md-6, .col-md-10 {
                width: 100%;
            }
            p {
                font-size: 14px;
            }
            .navbar-nav {
                margin-left: auto;
            }
            .navbar-brand, .nav-link, .btn {
                color: #fff;
                text-align: center;
            }
            .navbar-nav .nav-item {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">RT.10 Kelurahan Sungai Nangka</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="layanan">Layanan</a>
                    </li>
                    <li class="nav-item ">
                        <a class="btn" href="rt">Kegiatan RT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('container')
    </div>

    <footer class="footer mt-5">
        <div class="container">
            <p class="text-center">Copyright &copy; 2023 RT.10 Kelurahan Sungai Nangka. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-fL/tPnMuF+3dIDrmiGvw8g2FmTb8/KKZBM1oqTrD+GyW6EqK9Zu25Lg8gZsD/P2dVHxnO7fA7yN2+cJ5J6WzDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
