@extends('layouts.app2')
@section('content')

<div class="container mt-3">
  <div class="row top">
    <div class="col-12">
      <h1><strong>二手票券</strong></h1>
    </div>
  </div>
</div>

<div class="container">
  @empty($area)
  <div><br><br><br>
    <h3 style="color:red">目前暫時無人售出二手票券，請稍後再試。</h3><br><br><br>
  </div>
  @endempty
  @foreach($area as $resale)
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapse">
          <font color="black">{{$resale->prog_name}}</font>
        </a>
      </div>
      <div id="collapse" class="collapse show" data-parent="#accordion">
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
                <font color="black">票價
              </th>
            <tr>
            <tr class="table-info">
              <td>
                <font color="black">{{ $resale->type }}
              </td>
              <td>
                <font color="black">{{ $resale->section }}
              </td>
              <td>
                <font color="black">{{ $resale->tick_seat }}
              </td>
              <td>
                <font color="black">{{ $resale->tick_price * 1.05 }}
              </td>
            <tr>
            <tr align="center">
              <td colspan="4">
                <form method="get" action="resaleTicket">
                  <input type="text" name="prog_id" value="{{$resale->prog_id}}" style="display:none" />
                  <input type="text" name="ticket_id" value="{{$resale->ticket_id}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <hr>
  </div>
  @endforeach
</div>
@endsection