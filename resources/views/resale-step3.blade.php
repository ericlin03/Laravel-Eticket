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
  <li class="col-4">
    <a class="nav-link" data-toggle="tab" href="#menu1">付款方式</a>
  </li>
  <li class="active col-4">
    <a class="nav-link active" data-toggle="tab" href="#menu2">購票完成</a>
  </li>
</ul>

<div class="tab-content">
<div id="home" class="tab-pane fade">
  <br>
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
<img src="{{ $program->imgprice }}" height="500" style="display:block; margin:auto;">
<table class="table table-striped">
　<tr>
　<th>票券類別</th>
　<th>票券區域</th>
　<th>票價</th>
　</tr>
<tr>
  @foreach($area as $area)
　<td>{{ $area->type }}</td>
　<td>{{ $area->section }}</td>
　<td>{{ $price }}</td>  
  @endforeach
</tr>
</table>
</div>
<div id="menu1" class="tab-pane fade">
<br>
  <table class="table table-striped"> 
    <tr class="table-info">
      <td>原本金額：</td>
      <td>{{ $orginalPrice }}</td>
    </tr>
    <tr class="table-info">
      <td>手續費：</td>
      <td>{{ $fee }}</td>
    </tr>
    <tr class="table-warning">
      <td>總金額：</td>
      <td id="amount">{{ $price }}</td>
    </tr>
    <tr class="table-danger">
      <td>付款錢包地址：</td>
      <td id="wallet">{{ $wallet }}</td>
    </tr>
  </table>
</div>
<div id="menu2" class="container tab-pane active" align="center">
    <br><br>
    <h3><strong>在 MetaMask 按下 'CONFIRM' 就完成付款囉！</strong></h3>
    <br>
    <h5>處理過程中需要等待，付款完成後票卷資訊會顯示在個人訂單中</h5>
    <br><hr>
    <div align="center"><button class="btn btn-outline-info" onclick="javascript:location.replace('./home')">回首頁</button></div>
</div>
</div>
</div>
@endsection