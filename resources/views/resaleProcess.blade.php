@extends('layouts.app2')
@section('content')

<div class="container mt-3">
<div class="row top">
<div class="col-12">
<h1><strong>轉售流程</strong></h1>
</div>
</div>
</div>

<br><br>

<div class="container">
    @foreach($area as $area)
    @foreach($act as $act)
    <table class="table table-striped">
        <tr>
            <td colspan="2" align="center">
                <img src="{{ $act->img }}" alt="Card image cap">
            </td>
        </tr>
        <tr>
            <td><font style=font-weight:bold;>節目名稱</td>
            <td>{{ $act->prog_name }}</td>
        </tr>
        <tr>
            <td><font style=font-weight:bold;>節目日期</td>
            <td>{{ $act->prog_date }}</td>
        </tr>
        <tr>
            <td><font style=font-weight:bold;>地點</td>
            <td>{{ $act->site_name }}</td>
        </tr>
        <tr>
            <td><font style=font-weight:bold;>票種</td>
            <td>{{ $area->type }}</td>
        </tr>
        <tr>
            <td><font style=font-weight:bold;>票價</td>
            <td>{{ $price }}<font color="red">（轉售票價為原票價的95%）</td>
        </tr>
        <tr>
            <td><font style=font-weight:bold;>區域</td>
            <td>{{ $area->section }}</td>
        </tr>
        <tr>
            <td><font style=font-weight:bold;>座位</td>
            <td>{{ $area->tick_seat }}</td>
        </tr>
    </table>
    <form method="post" action="resaleUpdate" align="center">
    {{csrf_field()}}
        <button type="submit" class="btn btn-outline-danger">確認轉售</button>
        <input type="text" name="ticket_id" style="display:none" value="{{ $ticket_id }}" />
    </form>
    @endforeach
    @endforeach
<div>
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