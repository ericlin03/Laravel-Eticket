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
@endsection