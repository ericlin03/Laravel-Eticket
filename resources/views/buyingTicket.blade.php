@extends('layouts.app2')
@section('content')
<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MetaCoin | Truffle Webpack Demo w/ Frontend</title>
    <script type ="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <style>
    input {
      display: block;
      margin-bottom: 12px;
    }
  </style>
  <body>
    <br><br><br><br>
    <!-- <p>You have <strong id="balance">loading...</strong> ETH</p> -->
    <h1>Set Buyer</h1>
    <form action="/send" method="post">
    {{csrf_field()}}
      <label for="id">身分證字號</label>
      <input name="id" type="text" placeholder="身分證字號"/>
      <label for="receiver">電子錢包</label>
      <input id="receiver" name="receiver" type="text" placeholder="電子錢包"/>
      <!-- <p name="email" id="email" value="hkisthebest@gmail.com"></p> -->
      <button>Set Buyer</button>
    </form>
    <a href="./confirmTicket">confirm</a>
  </body>
</html>
@endsection