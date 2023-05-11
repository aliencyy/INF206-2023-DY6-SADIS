<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sadis | {{ $title }}</title>
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('img/Logo-SADIS.png') }}" type="image/x-icon">
    {{-- <link rel="stylesheet" href="resources/css/app.css"/>
    <link rel="stylesheet" href="resources/js/bootstrap.js"> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/bootstrap.js'])
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #D9F9EE;
        display: grid;
        place-items: center;
    }

    .daftar {
        width: 500px;
        height: min-content;
        padding: 15px;
        border-radius: 12px;
        background: #BFE4D3;
        display: inline-block;
    }

    .daftar h1 {
        font-size: 25px;
        margin-bottom: 20px;
    }

    .daftar form {
        font-size: 15px;
    }

    .daftar form .form-group {
        margin-bottom: 10px;
    }

    /* .daftar input {
    border-radius: 10px;
} */

    .daftar form input[type="submit"] {
        font-size: 15px;
        margin-top: 15px;
        background-color: #698269;
    }

    .daftar .btn-primary:hover {
        background-color: #40513B;
    }
</style>

<body>
    @include('sweetalert::alert')

    <!-- Menu Daftar -->
    <div class="daftar modal-content rounded-4 shadow border-0" style="background-color: #FDFEF3">

        <h1 class="text-center fw-bolder">Menu Daftar</h1>

        <form class="needs-validation" action="/register" method="POST">
            @csrf
            <div class="form-group was-validated">
                <label class="form-label" for="nama">Nama Instansi Kesehatan</label>
                <input class="form-control" name="name" placeholder="Masukkan nama instansi kesehatan" required>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email instansi</label>
                <input class="form-control" name="email" placeholder="Masukkan email instansi kesehatan" required>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="lokasi">Lokasi Instasi</label>
                <input class="form-control" name="lokasi" placeholder="Masukkan lokasi instansi" required>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Masukkan password" required>
            </div>
            {{-- <div class="form-group was-validated">
                <label class="form-label" for="password">Konfirmasi Password</label>
                <input class="form-control" type="password" id="password" placeholder="Konfirmasi ulang password"
                    required>
            </div> --}}
            {{-- <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Ingat saya</label>
            </div> --}}
            <input class="btn btn-primary border-0 w-100" type="submit" value="Daftar">
        </form>
        <p class="text-black text-center mt-3">
            Sudah memiliki akun?
            <a href="/login" class="text-decoration-none" style="color:#0077FF">Masuk</a>
        </p>
    </div>
    <!-- Akhir Menu Daftar -->

    {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>