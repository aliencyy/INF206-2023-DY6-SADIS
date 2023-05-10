@extends('layouts.app')

@section('body')
style="background-color: #D9F9EE"

@endsection

@section('content')

@can('user')
<!-- Isi dashboard penghasil -->
<div class="container p-5 mt-3">
    <div class="panel panel-default" style="border-radius: 30px;">
        <div class="panel-body p-5" style="background-color: #BFE4D3; border-radius: 10px; margin-top: 150px;">
            <div class="align-middle text-center">
                <h3><b>PENGOLAH LIMBAH SAMPAH B3 ACEH</b></h3>

                <!-- Area button under Pengolah Limbah B3 Aceh-->
                <div class="container text-center">
                    <div class="row align-items-center p-4">
                        <!-- Button Orderan -->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px; ">
                            <a href="/buangsampah" class="text-decoration-none" style="color: black; font-size: 18px;">Buat pengajuan pengambilan sampah</a></button>
                        <!-- Button Daftar pelanggan-->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px;">
                            <a href="/order" class="text-decoration-none" style="color: black; font-size: 18px;">Riwayat pembuangan sampah</a></button>
                        <!-- Button Subscription-->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px;">
                            <a href="/langganan" class="text-decoration-none" style="color: black; font-size: 18px;">Berlangganan</a></button>
                    </div>
                </div>
                <!-- END Area button Pengolah Limbah-->
            </div>
        </div>
    </div>
</div>
<!-- END Dahsboard penghasil -->
@endcan

@can('admin')

<div class="container p-5 mt-3">
    <div class="panel panel-default" style="border-radius: 30px;">
        <div class="panel-body p-5" style="background-color: #BFE4D3; border-radius: 10px; margin-top: 150px;">
            <div class="align-middle text-center">
                <h3><b>PENGOLAH LIMBAH SAMPAH B3 ACEH</b></h3>

                <div class="container text-center">
                    <div class="row align-items-center p-4">
                        <!-- Button Orderan -->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px; ">
                            <a href="/order" class="text-decoration-none" style="color: black; font-size: 18px;">Orderan</a></button>
                        <!-- Button Daftar Pembayaran-->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px;">
                            <a href="/listPembayaran" class="text-decoration-none" style="color: black; font-size: 18px;">Daftar Pembayaran</a></button>
                        <!-- Button Daftar Pelanggan -->
                        <button type="button" class="col p-3 mx-3 rounded-6 border-0 shadow" style="background-color: #A3D8BF; border-radius: 10px;">
                            <a href="/listSubscriptor" class="text-decoration-none" style="color: black; font-size: 18px;">Daftar Pelanggan</a></button>
                    </div>
                </div>
                <!-- END Area button Pengolah Limbah-->
            </div>
        </div>
    </div>
</div>
@endcan

@endsection