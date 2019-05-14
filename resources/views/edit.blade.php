@extends('layouts.app3')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ETicket修改節目') }}</div>

                <div class="card-body">
                    <form method="post" action="update">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="prog_name"
                                class="col-md-4 col-form-label text-md-right">{{ __('節目名稱') }}</label>

                            <div class="col-md-6">
                                @foreach($act as $act)
                                <input id="prog_name" type="text" name="prog_name" value="{{ $act->prog_name}}" required
                                    autofocus>
                                <input style="display:none" name="prog_id" value="{{$act->prog_id}}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prog_content"
                                class="col-md-4 col-form-label text-md-right">{{ __('節目資訊') }}</label>

                            <div class="col-md-6">
                                <input id="prog_content" type="text" name='prog_content' value="{{$act->prog_content}}"
                                    required autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_price" class="col-md-4 col-form-label text-md-right">{{ __('票價') }}</label>

                            <div class="col-md-6">
                                <input id="prog_pricet" type="text" name='prog_price' value="{{$act->prog_price}}"
                                    required autofocus>


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_date"
                                class="col-md-4 col-form-label text-md-right">{{ __('演出日期') }}</label>

                            <div class="col-md-6">
                                <input id="prog_date" type="text" name='prog_date' value="{{$act->prog_date}}" required
                                    autofocus>


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_selldate"
                                class="col-md-4 col-form-label text-md-right">{{ __('售票日期') }}</label>

                            <div class="col-md-6">
                                <input id="prog_selldate" type="text" name='prog_selldate'
                                    value="{{$act->prog_selldate}}" required autofocus>


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_organizer"
                                class="col-md-4 col-form-label text-md-right">{{ __('主辦單位') }}</label>

                            <div class="col-md-6">
                                <input id="prog_organizer" type="text" name="prog_organizer"
                                    value="{{$act->prog_organizer}}" required>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="site_name" class="col-md-4 col-form-label text-md-right">{{ __('場地') }}</label>

                            <div class="col-md-6">
                                <input id="site_name" type="text" name="site_name" value="{{$act->site_name}}" required>


                            </div>
                        </div>
                        @endforeach
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('修改') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<hr>
@endsection