@extends('layouts.app2')
@section('content')

<div class="container mt-3">
    <div class="row top">
        <div class="col-12">
            <h1><strong>轉售流程</strong></h1>
        </div>
    </div>
</div>

<br><br>

<div class="container">
    @foreach($area as $area)
    @foreach($act as $act)
    <table class="table table-striped">
        <tr>
            <td colspan="2" align="center">
                <img src="{{ $act->img }}" alt="Card image cap">
            </td>
        </tr>
        <tr>
            <td>
                <font style=font-weight:bold;>節目名稱
            </td>
            <td>{{ $act->prog_name }}</td>
        </tr>
        <tr>
            <td>
                <font style=font-weight:bold;>節目日期
            </td>
            <td>{{ $act->prog_date }}</td>
        </tr>
        <tr>
            <td>
                <font style=font-weight:bold;>地點
            </td>
            <td>{{ $act->site_name }}</td>
        </tr>
        <tr>
            <td>
                <font style=font-weight:bold;>票種
            </td>
            <td>{{ $area->type }}</td>
        </tr>
        <tr>
            <td>
                <font style=font-weight:bold;>票價
            </td>
            <td>{{ $price }}<font color="red">（轉售票價為原票價的95%）</td>
        </tr>
        <tr>
            <td>
                <font style=font-weight:bold;>區域
            </td>
            <td>{{ $area->section }}</td>
        </tr>
        <tr>
            <td>
                <font style=font-weight:bold;>座位
            </td>
            <td>{{ $area->tick_seat }}</td>
        </tr>
    </table>
    <form method="post" action="resaleUpdate" align="center">
        {{csrf_field()}}
        <button type="submit" class="btn btn-outline-danger">確認轉售</button>
        <input type="text" name="ticket_id" style="display:none" value="{{ $ticket_id }}" />
    </form>
    @endforeach
    @endforeach
</div>
@endsection