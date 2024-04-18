@extends('layouts.main')

@section('container')
    <style>
        body {
          background-color: #f5f5f5;
        }

        .login {
          margin-top: 100px;
          margin-bottom: 100px;
        }

        h1, h2 {
          text-align: justify;
          /* margin-top: 50px; */
          padding-right: 100px;
          padding-top: 50px

        }

        form {
          margin-top: 50px;
        }

        .form-control {
          margin-bottom: 20px;
        }

        .btn-primary {
          margin-top: 20px;
        }
      </style>

    <div class="login">
        <div class="row">
          <div class="col">
            <h1>SELAMAT DATANG</h1>
            <h2>DI LAYANAN ADMINISTRASI RT 10 KELURAHAN SUNGAI NANGKA</h2>
          </div>
          <div class="col">
            <form>
              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik">
              </div>
              <div class="form-group">
               <label for="password">PASSWORD</label>
                <input type="password" class="form-control" id="password">
              </div>
              <div class="form-group">
               <label for="confirm_password">CONFIRM PASSWORD</label>
                <input type="password" class="form-control" id="confirm_password">
              </div>
              <button type="submit" class="btn btn-primary">LOGIN</button>
              <p class="text-center">Belum Punya Akun? <a href="registrasi">Daftar disini</a></p>
            </form>
          </div>
        </div>
      </div>
@endsection
