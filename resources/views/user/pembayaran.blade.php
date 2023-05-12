
@extends('layouts.app')
@section('content')

  <div class="form-bayar">
    <link href="{{ asset('css/pembayaran.css') }}" rel="stylesheet">
    <form class="needs-validation mb-5" action="/bayar" method="POST">
    @csrf
      <h2 class="tittle">Payment</h2>
      <div style="display: flex; justify-content: space-between;">
        <div class="select-payment">
                <label><input type="radio" name="payment" value="Credit card" checked /> Credit card</label>
                <label><input type="radio" name="payment" value="Debit card" /> Debit card</label>
                <label><input type="radio" name="payment" value="Paypal" /> Paypal</label>
            </div>
            <div class="px-5 mx-2 py-5">
              <label for="name">Durasi Langganan</label>
              <input type="text" id="durasi" name="duration" value="{{ $duration }}" readonly>
            </div>
        </div>
    
    
      <div class="inputan">
        <div>
          <label for="name">Name on card</label>
          <input class="anu" type="text" id="name" name="name" required placeholder="Full name as displayed on card" />
          <label></label>
        </div>
        <div style="padding-left: 100px">
          <label for="credit">Credit card number</label>
          <input class="anu" type="text" id="card_number" name="card_number" required />
        </div>
      </div>
      <div class="inputan" style="padding-bottom: 20px">
        <div >
          <label for="tanggal_pengambilan" class="block text-sm font-medium text-gray-700">
              expirations
          </label>
          <div class="mt-1 md-form md-outline input-with-post-icon datepicker" inline="true">
              <input id="expirations" name="expirations" type="month" required class="form-control"
              placeholder="" style="background-color: #EBF6F1;" min="{{ date('Y-m') }}">
          </div>
      </div>
        <div style="padding-left: 205px">
          <label for="number">CVV</label>
          <input class="anu" type="text" id="CVV" name="CVV" required pattern="^\d{3}$"  />
        </div>
      </div>

      <input class="btn-primary" type="submit" value="Continue to checkout" style=" font-size: 20px" />
    </form>
  </div>

@endsection
