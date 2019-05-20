@extends('layouts.app')
@section('content');
<div class="container">
  <div class="row top">
    <div class="col-12">
      <h3><strong>最新公告</strong></h3>
    </div>
  </div>
</div>
<div class="container">
  @foreach($post as $posts)
  <div id="accordion">
    <div class="card2" style="background-color:#f0f0f0;padding-top:10px; padding-bottom:10px;">
      <div class="card2-header">
        <a class="card2-link" style="color:#0A0A0A;" data-toggle="collapse" href="#{{$posts->postid}}">
          <span style="font-size:18px;">【{{$posts->title}}】</span>
        </a>
      </div>
      <div id="{{$posts->postid}}" class="collapse" data-parent="#accordion">
        <div class="card2-body">
          　{{$posts->content}}　
        </div>
      </div>
    </div>
  </div>
  <br>@endforeach
  <hr>
</div>
@endsection