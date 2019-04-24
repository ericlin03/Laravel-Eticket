@extends('layouts.app2')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>MetaCoin | Truffle Webpack Demo w/ Frontend</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <style>
    input {
      display: block;
      margin-bottom: 12px;
    }
  </style>
  <body>
    <h1>MetaCoin — Example Dapp</h1>
    <p>You have <strong id="balance">loading...</strong> ETH</p>

    <h1>Confirm to buy ticket</h1>


    <p><strong id="viewReceiver">address</strong></p>
    <p>錢包地址: </p><p id="wallet" name="wallet">{{$wallet}}</p>
    <p>總金額:</p><p id="amount" name="amount">1</p>
    <!-- <input type="text" id="amount" placeholder="票價" /> -->
    <button onclick="App.checkStatus()">檢查錢包位址</button>
    <button onclick="App.confirm()">確認付款</button>

    <!-- <script src="index.js"></script> -->
  </body>
</html>
@endsection