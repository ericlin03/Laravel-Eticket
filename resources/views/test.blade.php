@extends('layouts.app2')
@section('content')

<div class="container mt-3">
<div class="row top">
<div class="col-12">
<h3><strong>test</strong></h3>
</div>
</div>
</div>
<form method="get" action="test2">
<!-- <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"> -->
    <label>id:</label>
    <input type="text" name="id" />
    <input type="submit" value="click me!!!">
</form>
@endsection