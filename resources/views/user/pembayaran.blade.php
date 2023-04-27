
@extends('layouts.app')
@section('content')


    <link href="{{ asset('css/pembayaran.css') }}" rel="stylesheet">
    <form>
      <h2 class="tittle">Payment</h2>
      <div class="select-payment">
        <label><input type="radio" name="payment" value="1" checked /> Credit card</label>
        <label><input type="radio" name="payment" value="2" /> Debit card</label>
        <label><input type="radio" name="payment" value="3" /> Paypal</label>
      </div>

      <div class="inputan">
        <div>
          <label for="name">Name on card</label>
          <input class="anu" type="text" id="name" name="name" required />
          <label>Full name as displayed on card</label>
        </div>
        <div style="padding-left: 100px">
          <label for="credit">Credit card number</label>
          <input class="anu" type="text" id="credit" name="credit" required />
        </div>
      </div>
      <div class="inputan" style="padding-bottom: 20px">
        <div>
          <label for="name">Expiration</label>
          <input class="anu" type="text" id="name" name="name" required />
        </div>
        <div style="padding-left: 180px">
          <label for="number">CVV</label>
          <input class="anu" type="text" id="number" name="number" required />
        </div>
      </div>

      <input type="submit" value="Continue to checkout" style="font-size: 20px" />
    </form>

@endsection