@extends('layouts.app')

@section('body')
style="background-color: #D9F9EE"
@endsection

@section('content')

<!-- Status Langganan Pengolah -->

<!-- Navbar -->
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
<!-- End Navbar -->

<!-- Content -->
<div class="container w-80 p-3 rounded-4" style="background-color: #EBEBEB; height: 400px; margin-top: 150px;">
    <div class="row">
        <div class="col m-5 fs-5">Jenis Langganan
            <span class="ms-4"><input type="text" placeholder="bulanan"></span>
        </div>

        <div class="col m-5 fs-5">Status
            <span class="ms-4"><input type="text" placeholder="aktif"></span>
        </div>

        <div class="col m-5 fs-5">Tanggal Jatuh
            <span class="ms-4"><input type="text"></span>
            Tempo
        </div>

        <div class="col m-5 fs-5">Harga
            <span class="ms-4"><input type="text"></span>
        </div>
    </div>

    <!-- Button -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-end">
                    <button class="btn rounded-4 me-3" style="background-color: rgba(116, 145, 250, 0.81);">Perpanjang</button>
                    <button class="btn rounded-4 ml-auto me-5" style="background-color: rgba(250, 59, 59, 0.74);">Batalkan</button>
                </div>
            </div>
        </div>
    </div>

</div>