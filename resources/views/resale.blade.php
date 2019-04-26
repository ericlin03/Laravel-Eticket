@extends('layouts.app2')
@section('content')

<div class="container mt-3">
<div class="row top">
<div class="col-12">
<h1><strong>二手票卷</strong></h1>
</div>
</div>
</div>

<div class="container">
@empty($area)
<div><br><br><br><h3 style="color:red">伺服器出問題啦～～～塊陶啊～～～</h3><br><br><br></div>
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
              <th><font color="black">票種</th>
              <th><font color="black">區域</th>
              <th><font color="black">座位</th>
              <th><font color="black">票價</th>
            <tr>
            <tr class="table-info">
              <td><font color="black">{{ $resale->type }}</td>
              <td><font color="black">{{ $resale->section }}</td>
              <td><font color="black">{{ $resale->tick_seat }}</td>
              <td><font color="black">{{ $price }}</td>
            <tr>
            <tr align="center">
              <td colspan="4">
                <form method="get" action="resaleTicket">
                <input type="text" name="prog_id" value="{{$resale->prog_id}}" style="display:none" />
                <input type="text" name="ticket_id" value="{{$resale->ticket_id}}" style="display:none" />
                <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'" class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25" class="d-inline-block align-top" alt=""></button>
              </form>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
</div>
<hr>
@endforeach
</div>

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