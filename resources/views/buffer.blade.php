@extends('layouts.app2')
@section('content')
<html>

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>MetaCoin | Truffle Webpack Demo w/ Frontend</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<style>
  input {
    display: block;
    margin-bottom: 12px;
  }
</style>

<body>
  <br><br><br><br>
  <h4>請稍候....</h4>
  <input type="text" id="wallet1" value="{{$wallet1}}" style="display:none">
  <input type="text" id="wallet2" value="{{$wallet2}}" style="display:none">
  <input type="text" id="wallet3" value="{{$wallet3}}" style="display:none">
  <input type="text" id="wallet4" value="{{$wallet4}}" style="display:none">

</body>
<script type="text/javascript">
  setTimeout(function() {
    window.location.href = 'http://localhost:8000/confirmTicket';
  }, 2000);
  window.onbeforeunload = function() {
    App.setBuyer();
  }
</script>
@endsection