@extends('layouts.app2')
@section('content')
<div class="container mt-3">
<div class="row top">
<div class="col-12">
<h1><strong>新增購票者</strong></h1>
</div>
</div>
</div>
<div class="container">
    <br>
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
</div>
@endsection
