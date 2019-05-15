@extends('layouts.app2')
@section('content')
<img src="/img/座位表.jpg" style="margin-left: 15%; margin-top: 75px">
<br>
<div style="margin-left: 45%; margin-top: 75px">
  <div>

  </div>
  <br>
  <form action="/send" method="post">
    {{csrf_field()}}
    <label for="receiver">電子錢包</label>
    <input id="receiver1" name="receiver1" type="text" placeholder="電子錢包" value="{{$wallet}}" />
    <br>

    <label for="receiver">電子錢包</label>
    <input id="receiver2" name="receiver2" type="text" placeholder="電子錢包" />
    <br>

    <label for="receiver">電子錢包</label>
    <input id="receiver3" name="receiver3" type="text" placeholder="電子錢包" />
    <br>

    <label for="receiver">電子錢包</label>
    <input id="receiver4" name="receiver4" type="text" placeholder="電子錢包" />

    <button class="btn btn-outline-danger" onclick="App.setBuyer()">go buy ticket</button>
  </form>
  <a href="./confirmTicket">confirm</a>
</div>
@endsection