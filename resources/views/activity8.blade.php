@extends('layouts.app2')

@section('content')

<div class="container mt-3">
<div class="row top">
<div class="col-12">
@foreach($act as $program)

  <img src="{{$program->img }}" height="300"style="display:block; margin:auto;">
 
@endforeach
</div>
</div>
</div>
<div class="container mt-3">
<div class="row top">
<div class="col-12">
<div class="card">
  <h5 class="card-header"><strong>{{$program->prog_name}}</strong></h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text" font size="5">活動時間:{{$program->prog_date}}</p>
    <p class="card-text">場地:{{$program->site_name}}</p>
    <p class="card-text">活動主辦:{{$program->prog_organizer}}</p>
  </div>
</div>
<img src="img/購票流程.jpg" style="display:block; margin:auto;">
<br>
<img src="img/座位表.jpg" height="500" style="display:block; margin:auto;">
<hr>
<table class="col-12"  border="0" >
　<tr>
　<td align="center">票券類別</td>
　<td align="center">票券區域</td>
　<td align="center">票價</td>
　</tr>
<tr>
  @foreach($area as $area)
　<td align="center">{{$area->type}}</td>
　<td align="center" >{{$area->tick_area}}</td>
　<td align="center">{{$area->tick_price}}</td>  
  <td align="right">
  <form>
  <div>
    <div class="col-auto ">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="ticketquantity">
        <option selected>選擇張數</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="3">4</option>
      </select>
    </div>
  </div>
</form>
  </td>
　</tr>
@endforeach
<br>
</table>

 


</div>
</div>
</div>
</div>
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