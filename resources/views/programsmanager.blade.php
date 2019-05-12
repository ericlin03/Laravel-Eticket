@extends('layouts.app3')
@section('content')

<div class="container mt-3">
  <div class="row top">
    <div class="col-12">
      <h1><strong>管理節目</strong></h1>
    </div>
  </div>
</div>
<div class="container">
  <div class="row text-center">
    <table>
      <tr>
        <td>活動名稱</td>
        <td>活動場地</td>
        <td>活動日期</td>
        <td>售票日期</td>
        <td>主辦單位</td>
        <td>修改</td>
        <td>刪除</td>
      </tr>
      @foreach($act as $value)
      <tr>
        <td>{{$value->prog_name}}</td>
        <td>{{$value->site_name}}</td>
        <td>{{$value->prog_date}}</td>
        <td>{{$value->prog_selldate}}</td>
        <td>{{$value->prog_organizer}}</td>
        <td><a href="/edit/{{$value->prog_id}}"><button>Edit</button></a></td>
        <td><a href="/delete/{{$value->prog_id}}"><button>Delete</button></a></td>

      </tr>
      @endforeach


    </table>
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
      <a data-toggle="tooltip" data-placement="bottom" title="關於我們" target="_blank"
        href="#"><strong>ETicket票務平台</strong></a>
    </div>
    <div class="col-4 col-md-4 col-lg-4">
      <span data-toggle="tooltip" data-placement="bottom" title="(Mon-Fri 9:30am–8:00pm Sat.11:00am-7:00pm)">客服專線:
        02-22227777</span>
    </div>
    <div class="col-4 col-md-4 col-lg-4">
      <a data-toggle="tooltip" data-placement="bottom" title="send now!" target="_blank"
        href="https://mail.google.com/mail/?view=cm&fs=1&to=ETicket@gmail.com">客服信箱: ETicket@gmail.com</a>
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