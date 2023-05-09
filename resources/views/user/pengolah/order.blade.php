@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/order.css') }}">

<div class="card-body">

    @can('admin')
    <div style="display: flex;">

    <table class="table table-sm table-bordered table-striped">
        <thead>
            <th>No</th>
            <th>Pembuang</th>
            <th>tangal penjemputan</th>
            <th class="border-0">Status</th>
            
        </thead>
    
        <tbody>
            @foreach ($trash as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->user->email ?? 'No user associated' }}</td>
                <td>{{ $d->tanggal_pengambilan }}</td>
                <td>{{ $d->status }}</td>
                <td class="p-0 border-0" style="width: 60px;">
                    <div class="position-relative px-1">
                        <button class="btn btn-primary" id="dropdown-btn">ubah</button>
                        <ul class="dropdown-menu position-absolute d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px d-none" id="dropdown-menu" data-bs-theme="light">
                            <li><a class="dropdown-item rounded-2 active" href="#">Action</a></li>
                            <li><a class="dropdown-item rounded-2" href="#">Another action</a></li>
                            <li><a class="dropdown-item rounded-2" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item rounded-2" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        
        <script>
            const dropdownBtn = document.querySelector('#dropdown-btn');
            const dropdownMenu = document.querySelector('#dropdown-menu');
        
            dropdownBtn.addEventListener('click', () => {
                dropdownMenu.classList.toggle('d-none');
            });
        </script>
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