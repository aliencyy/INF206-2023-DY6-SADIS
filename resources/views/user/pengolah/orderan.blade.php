@extends('layouts.app')

@section('content')
<div class="card-body">
    <table class="table table-sm table-bordered table-striped">
        <thead>
            <th>tangal penjemputan</th>
            <th>jenis_sampah</th>
            <th>jenis_pengolahan</th>
            <th>berat</th>
            <th>keterangan</th>
            <th>Status</th>
        </thead>

        <tbody>
            
                <tr>
                    <td>{{ $orderan->tanggal_pengambilan }}</td>
                    <td>{{ $orderan->jenis_sampah }}</td>
                    <td>{{ $orderan->jenis_pengolahan }}</td>
                    <td>{{ $orderan->berat }}</td>
                    <td>{{ $orderan->ket }}</td>
                    <td>{{ $orderan->status_pengolahan }}</td>

                </tr>
            
        </tbody>
    </table>
    </div>
@endsection