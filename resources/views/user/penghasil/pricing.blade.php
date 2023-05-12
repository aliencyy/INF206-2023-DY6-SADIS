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
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center mb-4">Langganan</h3>
        </div>

        <!-- Button Langganan -->
        <form action="/bayar/tipe" method="POST">
            @csrf
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Mingguan</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">Rp 1<small class="text-body-secondary fw-light"> Juta</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        
                      </ul>
                      <button type="submit" name="duration" value="mingguan" class="w-100 btn btn-lg btn-outline-primary">Berlangganan</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Bulanan</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">Rp 3.5<small class="text-body-secondary fw-light"> Juta</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                      </ul>
                      <button type="submit" name="duration" value="bulanan" class="w-100 btn btn-lg btn-outline-primary">Berlangganan</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                      <h4 class="my-0 fw-normal">Tahunan</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">RP 30<small class="text-body-secondary fw-light"> Juta</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                      </ul>
                      <button type="submit" name="duration" value="tahunan" class="w-100 btn btn-lg btn-outline-primary">Berlangganan</button>
                    </div>
                  </div>
                </div>
              </div>

@endsection

