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
    <h4>目前還有 <font id="total" style="color:red">?</font> 平台幣</h4>
    <br>
    <table class="table table-striped">
        <tr>
            <td><label>我的電子錢包位址：</label></td>
            <td><input id="wallet" name="wallet" placeholder="請輸入您的電子錢包" /></td>
        </tr>
        <tr>
            <td><label>儲值金額：</label></td>
            <td><input id="amount" name="amount" placeholder="" /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button id="checkButton" onclick="App.checkDepositeStatus()"
                    class="btn btn-outline-primary">檢查錢包</button>
                <button class="btn btn-info" id="withdrawBtn" name="withdrawBtn"
                    onclick="App.withdrawCoin()">確認儲值</button>
            </td>
        </tr>
    </table>
</div>
@endsection