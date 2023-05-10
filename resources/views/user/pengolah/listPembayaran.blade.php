@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/order.css') }}">

<div class="card">

    <div class="card-body">

        <div class="table-responsive" style="overflow: visible;">
            <table class="table table-sm table-bordered table-striped table-hover ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pembayaran</th>
                        <th>Email</th>
                        <th>Tanggal Pembayaran</th>
                        <th class="border-0">Konfirmasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($receipt as $d)
                    @if (!$d->Terkonfirmasi)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->receipt_id }}</td>
                            <td>{{ $d->user->email ?? 'No user associated' }}</td>
                            <td>{{ $d->created_at }}</td>
                            <td style="width: 25%" class="border-0">{{ $d->status_pengolahan }}</td>
                            <td class="p-0 border-0" style="width: 0%;">
                                <div class="position-relative ">
                                    <form action="/konfirmasiPembayaran" method="POST" id="form-{{ $loop->iteration }}">
                                        @csrf
                                        <input type="hidden" name="user_id" id="user_id-{{ $loop->iteration }}" value="{{ $d->user_id }}">
                                        <input type="hidden" name="receipt_id" id="receipt_id-{{ $loop->iteration }}" value="{{ $d->receipt_id }}">
                                        <input type="hidden" name="duration" id="duration-{{ $loop->iteration }}" value="{{ $d->duration }}">
                                        <button class="btn btn-primary btn-block" onclick="setStatus({{ $loop->iteration }}, '{{ $d->user_id }}', '{{ $d->receipt_id }}', '{{ $d->duration }}')">Konfirmasi Pembayaran</button>
                                    </form>                                                            
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
                        form.querySelector('#user_id-' + iteration).value = user_id;
                        form.querySelector('#receipt_id-' + iteration).value = receipt_id;
                        form.querySelector('#duration-' + iteration).value = duration;
                        form.submit();
                    }
                
                </script>
    

    </div>
</div>
@endsection