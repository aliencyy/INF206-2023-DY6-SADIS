@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/order.css') }}">

<div class="card w-75 mx-auto text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link" href="/listPembayaran">Pembayaran Baru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Riwayat Pembayaran</a>
          </li>

        </ul>
      </div>
    <div class="card-body">

        <div class="table-responsive" style="overflow: visible;">
            <table class="table table-sm table-bordered table-striped table-hover ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pembayaran</th>
                        <th>Email</th>
                        <th>Tanggal Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($receipt as $d)
                    
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->receipt_id }}</td>
                            <td>{{ $d->user->email ?? 'No user associated' }}</td>
                            <td>{{ $d->created_at }}</td>
                            
                        </tr>
                    
                @endforeach
                
                </tbody>
                
                
                
            </table>
        </div>
        
                
    

    </div>
</div>
@endsection