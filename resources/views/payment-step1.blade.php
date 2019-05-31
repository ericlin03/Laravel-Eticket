@extends('layouts.app2')
@section('content')

<div class="container mt-3">
  <div class="row top">
    <div class="col-12">
      <h3><strong>購票流程</strong></h3>
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
          <p class="card-text" font size="5">活動時間：{{$program->prog_date}}</p>
          <p class="card-text">場地：{{$program->site_name}}</p>
          <p class="card-text">活動主辦：{{$program->prog_organizer}}</p>
        </div>
      </div>
      <img src="{{ $program->imgprice }}" height="500" style="display:block; margin:auto;">
      <form method="get" action="payment">
        <table class="table table-striped">
          　<tr>
            　<th>票券類別</th>
            　<th>請選擇區域</th>
            　</tr>
          <tr>
            　<td>全票</td>
            　<td>
              <form method="get" action="payment">
                <p>
                  <select name="section">
                    @for($i = 0; $i < $sectionSize; $i++) <option value="{{ $sections[$i] }}">{{ $sections[$i] }}
                      </option>
                      @endfor
                  </select>
                </p>
            </td>
          </tr>
        </table>
        <hr>
        <div align="center">
          <button type="submit" class="btn btn-outline-danger">下一步</button>
          <input type="text" name="prog_id" value="{{ $prog_id }}" style="display:none">
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
<!-- <form method="post" action="payment" style="display:none"><input type="text" name="ticket_id"></form> -->

@endsection