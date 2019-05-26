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
          　<td>{{ $area->tick_price }}</td>
          @endforeach
        </tr>
      </table>
    </div>
    <div id="menu1" class="container tab-pane active">
      <br>
      <table class="table table-striped">
        <tr class="table-info">
          <td>原本金額：</td>
          <td id="amount">{{ $orginalPrice }}</td>
        </tr>
        <tr class="table-info">
          <td>手續費：</td>
          <td>{{ $fee }}</td>
        </tr>
        <tr class="table-warning">
          <td>總金額：</td>
          <td>{{ $price }}</td>
        </tr>
        <tr class="table-danger">
          <td>付款錢包地址：</td>
          <td id="wallet">{{ $wallet }}</td>
        </tr>
      </table>
      <hr>
      <div align="center">
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
        <button id="checkButton" onclick="App.checkResaleStatus();step1()" class="btn btn-outline-primary">檢查錢包</button>
        <button id="setAmount" onclick="App.setAmount();step2()" class="btn btn-outline-warning"
          style="display: none">確認金額</button>
        <button id="setSeller" onclick="App.setSeller();step3()" class="btn btn-outline-success"
          style="display: none">確認賣家</button>
        <!-- <button class="btn btn-outline-danger" onclick="App.transfer();App.jumpToResaleStep3()">確認付款</button> -->

        <form method="post" action="changeOwner">
          {{csrf_field()}}
          <button id="submitButton" type="submit" style="display: none" onclick="App.transfer();step4()"
            class="btn btn-outline-danger">確認付款</button>
          <input type="text" name="ticket_id" value="{{ $ticket_id }}" style="display:none" />
          <input type="text" name="prog_id" value="{{ $prog_id }}" style="display:none" />
        </form>
      </div>
      <!-- <p id="wallet">0x71b50f3c3fe9B5701CAB53487330b91c1a9C816a</p> -->
      <!-- <div align="center"><button type="submit" value="Edit" onclick="App.buy()" class="btn btn-outline-danger">確認付款</button></div> -->
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3><strong>請完成先前步驟</strong></h3>
    </div>
  </div>
</div>
<script type="text/javascript">
  function step1(){
    let a = document.getElementById('checkButton');
    let b = document.getElementById('setAmount');
    if(b.style.display === 'none'){
      b.style.display = 'block'
      // a.style.display = 'none'
    }
  }
  function step2(){
    let b = document.getElementById('setAmount');
    let c = document.getElementById('setSeller');
    if(c.style.display === 'none'){
      c.style.display = 'block'
      b.style.display = 'none'
    }
  }
  function step3() {
    let c = document.getElementById('setSeller');
    let d = document.getElementById('submitButton');
    if(d.style.display === 'none'){
      d.style.display = 'block'
      c.style.display = 'none'
    }
  }
  // function step4(){
  //   let d = document.getElementById('submitButton');

  // }
  




</script>
@endsection