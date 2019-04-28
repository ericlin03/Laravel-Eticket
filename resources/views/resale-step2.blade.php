@extends('layouts.app2')
@section('content')

<div class="container mt-3">
<div class="row top">
<div class="col-12">
<h3><strong>購買二手票流程</strong></h3>
</div>
</div>
</div>

<div class="container">
<ul class="nav nav-tabs nav-justified" style="margin-top:20px;">
  <li class="col-4">
    <a class="nav-link" data-toggle="tab" href="#home">確認票卷</a>
  </li>
  <li class="active col-4">
    <a class="nav-link active" data-toggle="tab" href="#menu1">付款方式</a>
  </li>
  <li class="col-4">
    <a class="nav-link disabled" data-toggle="tab" href="#menu2">購票完成</a>
  </li>
</ul>
    
<div class="tab-content">
<div id="home" class="tab-pane fade">
<div class="card">
  <h5 class="card-header">
    @foreach($act as $program)
    <strong>{{$program->prog_name}}</strong>
    @endforeach
  </h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text" font size="5">活動時間:{{$program->prog_date}}</p>
    <p class="card-text">場地:{{$program->site_name}}</p>
    <p class="card-text">活動主辦:{{$program->prog_organizer}}</p>
  </div>
</div>
<img src="img/座位表.jpg" height="500" style="display:block; margin:auto;">
<table class="table table-striped">
　<tr>
　<th>票券類別</th>
　<th>票券區域</th>
　<th>票價</th>
　</tr>
<tr>
  @foreach($area as $area)
　<td>{{$area->type}}</td>
　<td>不分區隨機挑選</td>
　<td>{{$area->tick_price}}</td>
  @endforeach
</tr>
</table>
</div>
<div id="menu1" class="container tab-pane active">
    <p>總金額：</p><p id="amount">{{ $area->tick_price }}</p>
    <p>付款地址：</p><p id="wallet">{{ $wallet }}</p>
    <p id="seller" style="display:none">{{ $area->owner_id }}</p>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <button id="checkButton" onclick="App.checkResaleStatus()" class="btn btn-outline-primary">檢查錢包</button>
    <button id="setAmount" onclick="App.setAmount()" class="btn btn-outline-warning">確認金額</button>
    <button id="setSeller" onclick="App.setSeller()" class="btn btn-outline-success">確認賣家</button>
    <!-- <button class="btn btn-outline-danger" onclick="App.transfer();App.jumpToResaleStep3()">確認付款</button> -->

    <form method="post" action="updateOwner">
    {{csrf_field()}}
      <button id="submitButton" type="submit" onclick="App.transfer()" class="btn btn-outline-danger">確認付款</button>
      <input type="text" name="ticket_id" value="{{ $ticket_id }}" style="display:none" />
      <input type="text" name="prog_id" value="{{ $prog_id }}" style="display:none" />
    </form>
    
    <!-- <p id="wallet">0x71b50f3c3fe9B5701CAB53487330b91c1a9C816a</p> -->
    <!-- <div align="center"><button type="submit" value="Edit" onclick="App.buy()" class="btn btn-outline-danger">確認付款</button></div> -->
</div>
<div id="menu2" class="tab-pane fade"><h3><strong>請完成先前步驟</strong></h3></div>
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

<script type="text/javascript">
  $(document).ready(function(){
    $("#submitButton").hide();
    $("#setAmount").hide();
    $("#setSeller").hide();

    // $("#checkButton").click(function(){
    //   $("#checkButton").hide();
    //   $("#setAmount").show();
    // });

    $("#setAmount").click(function(){
      $("#setAmount").hide();
      $("#setSeller").show();
    });

    $("#setSeller").click(function(){
      $("#setSeller").hide();
      $("#submitButton").show();
    });
  });
</script>
@endsection