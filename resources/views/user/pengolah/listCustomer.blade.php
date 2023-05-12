@extends('layouts.app')

@section('content')

{{-- <div class="container" style="margin-top: 140px;">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center mb-5">Daftar Pelanggan</h3>
        </div>
    </div>
</div> --}}


<div class="card w-75 mx-auto">
    
    <div class="sm:mx-auto sm:w-full sm:max-w-md rounded-5">
        <h2 class=" my-3 mt-6 text-center text-3xl fw-bold">
            Daftar User Berlangganan
        </h2>
    </div>
    <div class="card-body">
            <div class="table-responsive" >
                <table class="table table-sm table-bordered table-striped table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Instansi</th>
                            <th scope="col">Email</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">tanggal tenggat</th>
                            <th></th>                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subs as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->user->name ?? 'No user associated' }}</td>
                            <td>{{ $d->user->email ?? 'No user associated' }}</td>
                            <td>{{ $d->user->lokasi ?? 'No user associated' }}</td>
                            <td>{{ $d->langganan }}</td>
                            <td class="" style="width: 0%;">
                                <div class="position-relative ">
                                    <form action="/hapusAkun" method="POST" id="form-{{ $loop->iteration }}">
                                        @csrf
                                        <input type="hidden" name="email" id="email-{{ $loop->iteration }}" value="{{ $d->email }}">
                                        <button class="btn btn-danger btn-block" onclick="setStatus({{ $loop->iteration }}, '{{ $d->user->email }}')">Hapus</button>
                                    </form>                                                            
                                </div>
                            </td>                        
                        </tr>
                        @endforeach
                    </tbody>
                    
                    
                    
                </table>
            </div>
        
                
                
                 <script>
                    const dropdownBtns = document.querySelectorAll('[id^="dropdown-btn-"]');
                    const dropdownMenus = document.querySelectorAll('[id^="dropdown-menu-"]');
                    
                
                    function setStatus(iteration, email, ) {
                        var form = document.getElementById('form-' + iteration);
                        form.querySelector('#email-' + iteration).value = email;
                        form.submit();
                    }
                
                </script>
                
    </div>
</div>

@endsection