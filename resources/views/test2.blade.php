@extends('layouts.app2')
@section('content')

<table>
    <tr>
        <th>here is your data</th>
    </tr>
    <tr>
        @foreach($data as $data)
        <td>{{$data->name}}</td>
    </tr>
    <tr>
        <td>{{$data->wallet}}</td>
    </tr>
    <tr>
        <td>{{$data->phone}}</td>
    </tr>
    <tr>
        <td>{{$data->address}}</td>
        @endforeach
    </tr>
</table>
@endsection