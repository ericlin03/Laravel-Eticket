@extends('layouts.app2')
@section('content');

<div class="container mt-3">
  <div class="row top">
    <div class="col-12">
      <h3><strong>購買二手票流程</strong></h3>
    </div>
  </div>
</div>

<div class="container">
  <ul class="nav nav-tabs nav-justified" style="margin-top:20px;">
    <li class="active col-4">
      <a class="nav-link active" data-toggle="tab" href="#home">確認票券</a>
    </li>
    <li class="col-4">
      <a class="nav-link disabled" data-toggle="tab" href="#menu1">付款方式</a>
    </li>
    <li class="col-4">
      <a class="nav-link disabled" data-toggle="tab" href="#menu2">購票完成</a>
    </li>
  </ul>

  <div class="tab-content">
    <div id="home" class="container tab-pane active">
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
      <hr>
      <div align="center">
        <form method="get" action="resalePayment">
          <button type="submit" class="btn btn-outline-danger">下一步</button>
          <input type="text" name="ticket_id" style="display:none" value="{{ $ticket_id }}" />
          <input type="text" name="prog_id" style="display:none" value="{{ $prog_id }}" />
        </form>
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3><strong>請完成先前步驟</strong></h3>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3><strong>請完成先前步驟</strong></h3>
    </div>
  </div>
</div>
@endsection