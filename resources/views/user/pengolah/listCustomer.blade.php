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
                            {{-- <th scope="col" width="20%">Status</th> --}}
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
                            {{-- <td>{{ $d-> ?? 'No user associated' }}</td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                    
                    
                    
                </table>
            </div>
        
                
                
                {{-- <script>
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
                
                </script> --}}
                
    </div>
</div>

@endsection