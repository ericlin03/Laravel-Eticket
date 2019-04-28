@extends('layouts.app2')
@section('content')

<div class="container mt-3">
<div class="row top">
<div class="col-12">
<h1><strong>我的訂單</strong></h1>
</div>
</div>
</div>

<div class="container">
@empty($area)
<div><br><br><br><h3 style="color:red">您還沒有任何訂單哦～</h3><br><br><br></div>
@endempty
@foreach($area as $order)
<div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          <font color="black">{{$order->prog_name}}</font>
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
          <table class="table">
            <tr>
              <th><font color="black">票種</th>
              <th><font color="black">區域</th>
              <th><font color="black">座位</th>
              <th><font color="black">票卷狀態</th>
              <th><font color="black">入場憑證</th>
            <tr>
            <tr class="table-info">
              <td><font color="black">{{$order->type}}</td>
              <td><font color="black">{{$order->section}}</td>
              <td><font color="black">{{$order->tick_seat}}</td>
              <td>
                @if($order->status == 'sold')
                <font color="black">已付款
                @elseif($order->status == 'resale')
                <font color="red">待轉售
                @endif
              </td>
              <td>{!! QrCode::size(100)->encoding('UTF-8')->generate('擁有者:'.$order->owner_id.'活動名稱:'.$order->prog_name.'區域:'.$order->section.'位置:'.$order->tick_seat);!!}</td>
            <tr>
          </table>
          @if($order->status == 'sold')
          <form method="get" action="resaleProcess">
            <button type="submit" class="btn btn-outline-light">轉售此票卷</button>
            <input type="text" name="ticket_id" style="display:none" value="{{ $order->ticket_id }}" />
            <input type="text" name="prog_id" style="display:none" value="{{ $order->prog_id }}" />
          </form>
          @elseif($order->status == 'resale')
          <p>等待轉售中...</p>
          @endif
        </div>
      </div>
    </div>
</div>
@endforeach

<!-- footer -->
<hr>
<div class=" text-white bg-dark p-4">
          <div class="row text-center col-12">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            <ul class="nav">
    <li class="nav-item col-2 col-md-2 col-lg-2">
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="">購票流程說明</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="{{url('clause')}}">服務條款</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="#">隱私權政策</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="#">加入我們</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
    </li>
  </ul>
          </div>
      </div>
<br>
      <div class="row text-center">
        <div class="col-4 col-md-4 col-lg-4">
          <a data-toggle="tooltip" data-placement="bottom" title="關於我們" target="_blank" href="#"><strong>ETicket票務平台</strong></a>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
          <span data-toggle="tooltip" data-placement="bottom" title="(Mon-Fri 9:30am–8:00pm Sat.11:00am-7:00pm)">客服專線: 02-22227777</span>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
            <a data-toggle="tooltip" data-placement="bottom" title="send now!" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=ETicket@gmail.com">客服信箱: ETicket@gmail.com</a>
        </div>
        </div>
    <br>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>CopyrightcETicket Corporation. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>  
    </div>
@endsection