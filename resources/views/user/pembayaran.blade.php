
@extends('layouts.app')
@section('content')


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
            <div class="">
              <input type="text" id="durasi" name="duration" value="{{ $duration }}" readonly style="background-color: #A3D8BF; color: #999;">
            </div>
        </div>
    
    
      <div class="inputan">
        <div>
          <label for="name">Name on card</label>
          <input class="anu" type="text" id="name" name="name" required />
          <label>Full name as displayed on card</label>
        </div>
        <div style="padding-left: 100px">
          <label for="credit">Credit card number</label>
          <input class="anu" type="text" id="card_number" name="card_number" required />
        </div>
      </div>
      <div class="inputan" style="padding-bottom: 20px">
        <div>
          <label for="name">Expiration</label>
          <input class="anu" type="text" id="expirations" name="expirations" required />
        </div>
        <div style="padding-left: 180px">
          <label for="number">CVV</label>
          <input class="anu" type="text" id="CVV" name="CVV" required />
        </div>
      </div>

      <input type="submit" value="Continue to checkout" style="background-color: #A3D8BF; font-size: 20px" />
    </form>

@endsection
