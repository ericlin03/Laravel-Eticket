@extends('layouts.app')            
@section('content')

<div class="container mt-3">
<div class="row top">
<div class="col-12">
<h1><strong>所有活動</strong></h1>
</div>
</div>
</div>

<div class="container">
@empty($act)
<div><br><br><br><h3 style="color:red">伺服器出問題啦～～～塊陶啊～～～</h3><br><br><br></div>
@endempty
</div>

<div class="container">
<div class="row text-center">
@foreach($act as $program)
<div class="col-md-4 pb-1 pb-md-0">
    <div class="card">
    <img class="card-img-top" src="{{$program->img }}"  height="180" alt="Card image cap">
    <div class="card-body">

        <h5 class="card-title">{{$program->prog_name}}</h5>
        <p class="card-text">演出時間:{{$program->prog_date}}</p>
        <p class="card-text">場地:{{$program->site_name}}</p>
    
    <br>
        <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
        <form method="get" action="buyOneTicket">
          <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
          <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'" class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25" class="d-inline-block align-top" alt=""></button>
        </form>
        <button class="btn btn-primary" style="border:0; background-color: transparent; float:right;" onclick="document.getElementById('ph1').src='images/success-cart.png'" ><img id="ph1" onclick="change()" src="images/star.png" width="35" height="35" class="d-inline-block align-top" alt="">
        </button>
    </div>
    </div>
</div>
@endforeach
</div>
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