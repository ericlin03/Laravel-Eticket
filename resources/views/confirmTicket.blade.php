@extends('layouts.app2')
@section('content')
<div class="container mt-3">
  <div class="row top">
    <div class="col-12">
      <h1><strong>確認付款</strong></h1>
    </div>
  </div>
</div>
<div class="container" align="center">
  <img src="/img/座位表.jpg">
  <form method="post" action="getTicket">
    {{csrf_field()}}
    <table class="table">
      <tr class="table-primary">
        <td>錢包地址：</td>
        <td id="wallet" name="wallet">{{$wallet}}</td>
      </tr>
      <tr class="table-success">
        <td>總金額：</td>
        <td id="amount" name="amount" value="">{{ $price }}</td>
      </tr>
    </table>
    <select name="tick_seat" class="form-control">
      @foreach ($seats as $seat)
      <option value="{{$seat->tick_seat}}">
        {{$seat->tick_seat}}
      </option>
      @endforeach
    </select>
    <input name="program" value="{{ $program }}" style="display: none">
    <button id="submit" class="btn btn-outline-dark" onclick="App.confirm()" style="display: none"
      type="submit">確認付款</button>
  </form>
  <button id="check" onclick="App.checkStatus();changeHide()" class="btn btn-secondary">檢查錢包位址</button>

  <script type="text/javascript">
    function changeHide(){
    let x = document.getElementById('submit');
    let y = document.getElementById('check');
    if(x.style.display === 'none'){
      x.style.display = 'block';
    }
  }
  </script>

</div>
@endsection