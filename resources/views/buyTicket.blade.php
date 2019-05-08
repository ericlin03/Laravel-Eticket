@extends('layouts.app2')
@section('content')
<img src="/img/座位表.jpg" style="margin-left: 15%; margin-top: 75px">
<br>
<div style="margin-left: 45%; margin-top: 75px">
  <div>
    <button class="btn btn-outline-danger" onclick="location.href='{{ url('buyingTicket') }}'">go buy ticket</button>
  </div>
</div>
@endsection