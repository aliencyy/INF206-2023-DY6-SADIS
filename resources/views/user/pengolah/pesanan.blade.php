@extends('layouts.app')

@section('content')

<link href="{{ asset('css/pesanan.css') }}" rel="stylesheet">
    <form>
      <!-- card -->
      <div class="invoice1">
        <div class="invoice-header1">
          <h2><b>Orderan</b></h2>
        </div>
        <div class="card1">
          <h2><b>Nama</b></h2>
          <pre id="nama">Arrijalul Khairi</pre>
          <h2><b>Tanggal</b></h2>
          <pre id="expiration">31 Desember 9999</pre>
          <h2><b>E-mail</b></h2>
          <pre id="email">bangjall@gmail.com</pre>
        </div>
       
        <div class="invoice-footer1">
          <label><b>Konfirmasi pembayaran jika sudah sesuai</b></label>
        </div>
      </div>
      <!-- end card -->
      <div style=" padding-left: 18px;">
      <input type="submit" value="Konfirmasi" style="font-size: 20px; " />
    </div>
    </form>

    @endsection