<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SADIS | {{ $title }}</title>
    <link rel="stylesheet" href="resources/css/app.css" />
    <link rel="stylesheet" href="resources/js/bootstrap.js">
    <link rel="stylesheet" href="resources/sass/app.scss">
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

    .daftar form input .btn-primary {
        font-size: 15px;
        margin-top: 15px;
        background-color: #698269;
    }

    .daftar .btn-primary {
        font-size: 15px;
        margin-top: 15px;
        background-color: #698269;
    }

    .daftar .btn-primary:hover {
        font-size: 15px;
        margin-top: 15px;
        background-color: #40513B;
    }
</style>

<body>
    @include('sweetalert::alert')

    <!-- Menu Daftar -->
    <div class="daftar modal-content rounded-4 shadow border-0" style="background-color: #FDFEF3">

        <h1 class="text-center fw-bolder">Menu Masuk</h1>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <form class="needs-validation" action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input name="email" class="form-control @error(" email") is-invalid @enderror" placeholder="Masukkan ID" required>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Masukkan password" required>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Ingat saya</label>
            </div>
            <input class="btn btn-primary w-100 border-0" type="submit" value="Masuk" style="margin-bottom: 20px;">
        </form>
        <button class=" btn btn-primary w-100 border-0" onclick="location.href='/register'">Buat Akun</button>
    </div>
    <!-- Akhir Menu Daftar -->

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>