@extends('layouts.app2')
@section('content')
<div class="container mt-3">
    <div class="row top">
        <div class="col-12">
            <h1><strong>儲值平台幣</strong></h1>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <p style="color:red">注意！平台幣：新台幣＝1：20</p>
    <br>
    <label>我的電子錢包位址</label>
    <input id="wallet" name="wallet" placeholder="請輸入您的電子錢包" />
    <br>
    <label>儲值金額</label>
    <input id="amount" name="amount" placeholder="單位：新台幣" />
    <button id="rate" name="rate" onclick="App.rate()">我會獲得多少平台幣？</button>
    <button id="depositeBtn" name="depositeBtn" onclick="App.withdraw()">確認儲值</button>
</div>
@endsection