@extends('layouts.app3')
@section('content')
<div class="container mt-3">
    <div class="col-12">
        <h1><strong>新增平台幣</strong></h1>
    </div>
</div>

<div class="container">
    <br>
    <h3>目前合約中還有 <font id="total" style="color:red">?</font> 平台幣</h3>
    <br>
    <p style="color:red">注意！平台幣：新台幣＝1：20</p>
    <br>
    <label>新增金額</label>
    <input id="deposite" name="deposite" placeholder="單位：平台幣" />
    <button class="btn btn-info" id="depositeBtn" name="depositeBtn" onclick="App.depositeCoin()">確認新增</button>
</div>
@endsection