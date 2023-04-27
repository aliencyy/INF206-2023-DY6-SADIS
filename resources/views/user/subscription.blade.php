@extends('layouts.app')

@section('content')
<div class="card card-solid">
    <div class="content-wrapper">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="Status langganan">Status langganan : aktif</label>
                </div>
                <div class="col-sm-6">
                    <form action="/pricing" method="GET">
                    <button>langganan</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <label for="tanggal-akhir">tanggal habis berlangganan : {{ $tanggal }} </label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection