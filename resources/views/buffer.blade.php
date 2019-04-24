@extends('layouts.app2')
@section('content')
<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MetaCoin | Truffle Webpack Demo w/ Frontend</title>
    <script type ="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <input type="text" name="rec" id="rec" value="{{$toPass}}" style="display:none">
  </head>
  <style>
    input {
      display: block;
      margin-bottom: 12px;
    }
  </style>
  <body>
    <br><br><br><br>
    <!-- <a id="rec" name="rec" value="{{$toPass}}" onclick="App.setBuyer()">{{$toPass}}</a> -->
    <h4>請稍候....</h4>
  </body>
  <script type="text/javascript">
  setTimeout(function() {
    window.location.href='http://localhost:8000/buyingTicket';
  }, 2000);
  window.onbeforeunload = function(){
    App.setBuyer();
  }
  </script>
@endsection