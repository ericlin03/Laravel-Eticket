@extends('layouts.app2')
@section('content')
<div class="container mt-3">
  <div class="row top">
    <div class="col-12">
      <h1><strong>確認付款</strong></h1>
    </div>
  </div>
</div>
<div class="container">
    <p>錢包地址: </p><p id="wallet" name="wallet">{{$wallet}}</p>
    <p>總金額:</p><p id="amount" name="amount">1</p>
    <button onclick="App.checkStatus()">檢查錢包位址</button>
    <button onclick="App.confirm()">確認付款</button>
</div>
@endsection