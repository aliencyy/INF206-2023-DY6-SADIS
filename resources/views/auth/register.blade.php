<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sadis | {{ $title }}</title>
    {{-- <link rel="stylesheet" href="resources/css/app.css"/>
    <link rel="stylesheet" href="resources/js/bootstrap.js"> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/js/bootstrap.js'])
</head>

<body>
    <!-- Menu Daftar -->
    <div class="daftar">

        <h1 class="text-center">Menu Daftar</h1>

        <form class="needs-validation" action="/register" method="POST">
            @csrf
            <div class="form-group was-validated">
                <label class="form-label" for="nama">Nama Instansi Kesehatan</label>
                <input class="form-control" name="name" placeholder="Masukkan nama instansi kesehatan"
                    required>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email instansi</label>
                <input class="form-control" name="email" placeholder="Masukkan email instansi kesehatan"
                    required>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="lokasi">Lokasi Instasi</label>
                <input class="form-control" name="lokasi" placeholder="Masukkan lokasi instansi"
                    required>
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
            <input class="btn btn-success w-100" type="submit" value="Daftar">
        </form>
    </div>
    <!-- Akhir Menu Daftar -->


    {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>