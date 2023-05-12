@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/order.css') }}">



    <div class="card w-75 mx-auto text-center">
        <div class="sm:mx-auto sm:w-full sm:max-w-md rounded-5">
            <h2 class=" my-3 mt-6 text-center text-3xl fw-bold">
                Formulir Keterangan Sampah
            </h2>
        </div>
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link " href="/order">Sedang dalam Proses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Selesai diolah</a>
              </li>
    
            </ul>
          </div>

        <div class="card-body">
            @can('admin')

                <div class="table-responsive" style="overflow: visible;">
                    <table class="table table-sm table-bordered table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Tanggal Pengambilan</th>
                                <th class="">Status</th>
                                <th class="border-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trash as $d)
                                @if ($d->status_pengolahan == 'Selesai')
                                <tr>
                                    <td onclick="location.href='/order/{{ $d->id }}'">{{ $loop->iteration }}</td>
                                    <td onclick="location.href='/order/{{ $d->id }}'">{{ $d->user->email ?? 'No user associated' }}</td>
                                    <td onclick="location.href='/order/{{ $d->id }}'">{{ $d->tanggal_pengambilan }}</td>
                                    <td onclick="location.href='/order/{{ $d->id }}'" style="width: 25%" class="border-0">{{ $d->status_pengolahan }}</td>
                                    <td class="p-0" style="width: 0%;">
                                        <div class="position-relative ">
                                            <button class="btn btn-dark btn-block" id="dropdown-btn-{{ $loop->iteration }}" disabled>ubah</button>
                                            <ul class="dropdown-menu position-absolute d-grid gap-1 p-2 rounded-3 mx-0 shadow w-220px d-none" id="dropdown-menu-{{ $loop->iteration }}" data-bs-theme="light"">
                                                <form action="/updateStatus" method="POST" id="form-{{ $loop->iteration }}">
                                                    @csrf
                                                    <input type="hidden" name="status" id="status-{{ $loop->iteration }}" value="">
                                                    <input type="hidden" name="id" id="id-{{ $loop->iteration }}" value="{{ $d->id }}">
                                                    <input type="hidden" name="email" id="email-{{ $loop->iteration }}" value="{{ $d->user->email ?? '' }}">
                                                </form>
                                                <li><a class="dropdown-item rounded-2 " href="#" onclick="setStatus({{ $loop->iteration }}, '{{ $d->user->email ?? '' }}', 'Pengangkutan')">Pengangkutan</a></li>
                                                <li><a class="dropdown-item rounded-2" href="#" onclick="setStatus({{ $loop->iteration }}, '{{ $d->user->email ?? '' }}', 'Pengolahan')">Pengolahan</a></li>
                                                <li><a class="dropdown-item rounded-2" href="#" onclick="setStatus({{ $loop->iteration }}, '{{ $d->user->email ?? '' }}', 'Selesai')">Selesai</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endif

                            @endforeach
                        </tbody>
                        
                        
                        
                    </table>
                </div>
            
                    
                    
                    <script>
                        const dropdownBtns = document.querySelectorAll('[id^="dropdown-btn-"]');
                        const dropdownMenus = document.querySelectorAll('[id^="dropdown-menu-"]');
                        
                        dropdownBtns.forEach((btn, i) => {
                            btn.addEventListener('click', () => {
                                // hide all other dropdowns
                                dropdownMenus.forEach((menu) => {
                                    if (menu !== dropdownMenus[i]) {
                                        menu.classList.add('d-none');
                                    }
                                });
                                // toggle the clicked dropdown
                                dropdownMenus[i].classList.toggle('d-none');
                            });
                        });
                    
                        document.addEventListener('click', (event) => {
                            let isClickInsideDropdown = false;
                            dropdownMenus.forEach((menu) => {
                                if (menu.contains(event.target)) {
                                    isClickInsideDropdown = true;
                                }
                            });
                    
                            dropdownBtns.forEach((btn) => {
                                if (btn.contains(event.target)) {
                                    isClickInsideDropdown = true;
                                }
                            });
                    
                            if (!isClickInsideDropdown) {
                                dropdownMenus.forEach((menu) => {
                                    menu.classList.add('d-none');
                                });
                            }
                        });
                    
                        function setStatus(iteration, email, status) {
                            var form = document.getElementById('form-' + iteration);
                            form.querySelector('#status-' + iteration).value = status;
                            form.querySelector('#email-' + iteration).value = email;
                            form.submit();
                        }
                    
                    </script>
    
            @endcan


            @can('user')
        
            <div>
            <table class="table table-sm table-bordered table-striped table-hover">
                <thead>
                    <th>No</th>
                    <th>tangal penjemputan</th>
                    <th>Status</th>
                </thead>

                <tbody>
                    @foreach ($trash as $d)
                    @if ($d->status_pengolahan == 'Selesai')
                    <tr onclick="location.href='/order/{{ $d->id }}'">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->tanggal_pengambilan }}</td>
                        <td>{{ $d->status_pengolahan }}</td>
                    </tr>
                    @endif
                        
                    @endforeach
                </tbody>
            </table>
            
            @endcan
        </div>
    </div>
@endsection