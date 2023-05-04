@extends('layouts.app')

@section('content')
<div class="card-body">

    @can('admin')
    <table class="table table-sm table-bordered table-striped">
        <thead>
            <th>No</th>
            <th>Pembuang</th>
            <th>tangal penjemputan</th>
            <th>Status</th>
        </thead>

        <tbody>
            @foreach ($trash as $d)
                <tr onclick="location.href='/order/{{ $d->id }}'">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->user->email ?? 'No user associated' }}</td>
                    <td>{{ $d->tanggal_pengambilan }}</td>
                    <td>{{ $d->status_pengolahan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endcan
    @can('user')
            <table class="table table-sm table-bordered table-striped">
        <thead>
            <th>No</th>
            <th>tangal penjemputan</th>
            <th>Status</th>
        </thead>

        <tbody>
            @foreach ($trash as $d)
                <tr onclick="location.href='/order/{{ $d->id }}'">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->tanggal_pengambilan }}</td>
                    <td>{{ $d->status_pengolahan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endcan

    </div>
@endsection