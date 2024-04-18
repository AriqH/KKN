
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>RT.10 Kelurahan Sungai Nangka</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <style>
          .navbar-nav {
            margin-left: auto; /* Pindahkan item menu ke kanan */
          }
          .navbar-nav .nav-link, .navbar-nav .btn, .navbar-brand{
            color: #fff; /* Ubah warna teks menjadi putih */
          }
        </style>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg bg-primary">
          <div class="container">
            <a class="navbar-brand" href="/admin">RT.10 Kelurahan Sungai Nangka</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="layanan">Layanan</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#">Company</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li> --}}
                <li class="nav-item ">
                  <a class="btn" href="registrasi">Sign Up</a>
                </li>
                <li class="nav-item ">
                  <a class="btn" href="login">Sign In</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container ">
          @yield('admin')
        </div>
    </body>
  </html>

</body>
</html>
