@extends('layouts.app')

@section('content')
{{-- 
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
            <h3 class="text-center mb-5">Daftar Pelanggan</h3>
        </div>
    </div>
</div>

<div class="container" style="background-color: #FFF3F3;">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive ">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" width="20%">No.</th>
                            <th scope="col" width="30%">Nama Instansi</th>
                            <th scope="col" width="30%">Email</th>
                            <th scope="col" width="30%">Lokasi</th>
                            <th scope="col" width="20%">tanggal tenggat</th>
                            {{-- <th scope="col" width="20%">Status</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subs as $d)
                            {{-- <tr onclick="location.href='/order/{{ $d->id }}'"> --}}
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->user->name ?? 'No user associated' }}</td>
                                <td>{{ $d->user->email ?? 'No user associated' }}</td>
                                <td>{{ $d->user->lokasi ?? 'No user associated' }}</td>
                                <td>{{ $d->langganan }}</td>
                                {{-- <td>{{ $d-> ?? 'No user associated' }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection