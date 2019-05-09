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
<div class="card h-100">
    <img class="card-img-top" src="{{ $program->img }}"  height="180" alt="Card image cap" data-toggle="modal"  href="#7">
    <div class="modal fade bd-example-modal-lg" id="7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" id="7">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">{{"$program->prog_name"}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <img class="card-img-top" src="{{ $program->img }}"  height="400" alt="Card image cap">
          <br>
          <br>
          <p>{{"$program->prog_content"}}</p>
          <br>
          <br>
          <p>售票時間:{{"$program->prog_selldate"}}</p>
          <p>票價分類:{{"$program->prog_price"}}</p>
          <p>場地:{{"$program->site_name"}}</p>
          <p>演出時間:{{"$program->prog_date"}}</p>
          <img src="{{$program->imgprice }}"  height="500" alt="Card image cap">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
    </div>
    </div>
    <hr>
</div>
@endforeach
</div>
</div>
@endsection