@extends('layouts.app')
@section('content')
    <h1>Resale Market</h1>

    <label id="viewSeller">seller:</label>
    <input type="text" id="seller" placeholder="e.g. 95" />
    <button onclick="App.setSeller()">Set seller</button>

    <p><label id="viewAmount">amount:</label></p>
    <input type="text" id="amount" placeholder="e.g. 95" />
    <button onclick="App.setAmount()">Set amount</button>

    <p><button onclick="App.transfer()">transfer</button></p>

    <p id="status">status</p>

    <p><button onclick="App.setSeller();App.setAmount();App.setPlatform()">Set All parameters</button></p>

    <a href="./index">go to index</a>
@endsection