@extends('layouts.app2')
@section('content')
<div class="container mt-3">
  <div class="row top">
    <div class="col-12">
      <h1><strong>確認付款</strong></h1>
      <img src="/img/座位表.jpg">
    </div>
  </div>
</div>
<div class="container">
  <p>錢包地址: </p>
  <p id="wallet" name="wallet">{{$wallet}}</p>
  <p>總金額:</p>
  <p id="amount" name="amount" value="">{{ $price }}</p>
  <form method="post" action="getTicket">
    {{csrf_field()}}
    <select name="tick_seat">
      @foreach ($seats as $seat)
      <option value="{{$seat->tick_seat}}">
        {{$seat->tick_seat}}
      </option>
      @endforeach
    </select>
    <input name="program" value="{{$program}}" style="display: none">
    <button onclick="App.confirm()" type="submit">確認付款</button>
  </form>
  <button onclick="App.checkStatus()">檢查錢包位址</button>

</div>
@endsection