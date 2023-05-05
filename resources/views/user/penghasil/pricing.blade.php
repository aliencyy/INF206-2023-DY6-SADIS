@extends('layouts.app')

@section('body')
style="background-color: #D9F9EE"
@endsection

@section('content')

{{-- <!-- Navbar -->
<nav class="navbar m-0 p-0 fixed-top">
    <!-- Left Navbar -->
    <div class="container-fluid" style="background-color: #A3D8BF;">
        <a class="navbar-brand ms-3">
            <img src="src/logo_sadis.png" alt="SADIS" width="102" height="95">
            <span class="fs-2 fw-bold" style="color: #0E8DC9; margin: 15px; font-family: 'Inter', sans-serif;">SADIS</span>
        </a>

        <!-- Right navbar -->
        <div class="me-3">
            <a href="" class="mx-3 fs-4 text-dark text-decoration-none">Subscription</a>
            <a href="" class="mx-3 fs-4 text-dark text-decoration-none">Dashboard</a>
            <a href="" class="mx-3 fs-4 text-dark text-decoration-none">
                <img src="src/logo_pengolah.png" alt="logo_pengolah" width="50">
                User</a>
        </div>
</nav>
<!-- End Navbar --> --}}

<!-- Content -->
<div class="container" style="margin-top: 140px;">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center mb-4">Langganan</h3>
        </div>

        <!-- Button Langganan -->
        <form action="/bayar/tipe" method="POST">
            @csrf
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <button type="submit" name="duration" value="mingguan" class="btn mx-2 fs-5" style="background-color: #FFD595; width: 388px; height: 350px;">
                    <h3>Mingguan</h3>
                    <br>
                    Rp. 1.000.000
                </button>
                <button type="submit" name="duration" value="bulanan" class="btn mx-2 fs-5" style="background-color: #FF4A4A; width: 388px; height: 350px;">
                    <h3>Bulanan</h3>
                    <br>
                    Rp. 3.500.000
                </button>
                <button type="submit" name="duration" value="tahunan" class="btn mx-2 fs-5" style="background-color: #FFF84A; width: 388px; height: 350px;">
                    <h3>Tahunan</h3>
                    <br>
                    Rp. 30.000.000
                </button>
            </div>
        </div>
        </form>
    </div>
</div>

@endsection