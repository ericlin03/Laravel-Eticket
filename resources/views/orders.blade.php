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
  <div><br><br><br>
    <h3 style="color:red">您還沒有任何訂單哦～</h3><br><br><br>
  </div>
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
              <th>
                <font color="black">票種
              </th>
              <th>
                <font color="black">區域
              </th>
              <th>
                <font color="black">座位
              </th>
              <th>
                <font color="black">票卷狀態
              </th>
              <th>
                @if($order->status == 'sold')
                <font color="black">入場憑證
                  @endif
              </th>
            <tr>
            <tr class="table-info">
              <td>
                <font color="black">{{$order->type}}
              </td>
              <td>
                <font color="black">{{$order->section}}
              </td>
              <td>
                <font color="black">{{$order->tick_seat}}
              </td>
              <td>
                @if($order->status == 'sold')
                <font color="black">已付款
                  @elseif($order->status == 'resale')
                  <font color="red">待轉售
                    @endif
              </td>
              <td>
                @if($order->status == 'sold')
                {!!
                QrCode::size(100)->encoding('UTF-8')->generate('擁有者:'.$order->owner_id.'活動名稱:'.$order->prog_name.'區域:'.$order->section.'位置:'.$order->tick_seat);!!}
                @endif
              </td>
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
    <hr>
  </div>
  @endforeach
</div>
@endsection