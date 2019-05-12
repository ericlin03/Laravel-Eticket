@extends('layouts.app3')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ETicket新增節目') }}</div>

                <div class="card-body">
                    <form method="POST" action="insert" >
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="prog_name" class="col-md-4 col-form-label text-md-right">{{ __('節目名稱') }}</label>

                            <div class="col-md-6">
                                <input id="prog_name" type="text" class="form-control{{ $errors->has('prog_name') ? ' is-invalid' : '' }}" name="prog_name" value="{{ old('prog_name') }}" required autofocus>

                                @if ($errors->has('prog_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prog_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prog_content" class="col-md-4 col-form-label text-md-right">{{ __('節目資訊') }}</label>

                            <div class="col-md-6">
                                <input id="prog_content" type="text" class="form-control{{ $errors->has('prog_content') ? ' is-invalid' : '' }}" name='prog_content' value="{{ old('prog_content') }}" required autofocus>

                                @if ($errors->has('prog_content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prog_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_price" class="col-md-4 col-form-label text-md-right">{{ __('票價') }}</label>

                            <div class="col-md-6">
                                <input id="prog_pricet" type="text" class="form-control{{ $errors->has('prog_price') ? ' is-invalid' : '' }}" name='prog_price' value="{{ old('prog_price') }}" required autofocus>

                                @if ($errors->has('prog_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prog_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_date" class="col-md-4 col-form-label text-md-right">{{ __('演出日期') }}</label>

                            <div class="col-md-6">
                                <input id="prog_date" type="text" class="form-control{{ $errors->has('prog_date') ? ' is-invalid' : '' }}" name='prog_date' value="{{ old('prog_date') }}" required autofocus>

                                @if ($errors->has('prog_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prog_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_selldate" class="col-md-4 col-form-label text-md-right">{{ __('售票日期') }}</label>

                            <div class="col-md-6">
                                <input id="prog_selldate" type="text" class="form-control{{ $errors->has('prog_selldate') ? ' is-invalid' : '' }}" name='prog_selldate' value="{{ old('prog_selldate') }}" required autofocus>

                                @if ($errors->has('prog_selldate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prog_selldate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_organizer" class="col-md-4 col-form-label text-md-right">{{ __('主辦單位') }}</label>

                            <div class="col-md-6">
                                <input id="prog_organizer" type="text" class="form-control{{ $errors->has('prog_organizer') ? ' is-invalid' : '' }}" name="prog_organizer" value="{{ old('prog_organizer') }}" required>

                                @if ($errors->has('prog_organizer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prog_organizer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="site_name" class="col-md-4 col-form-label text-md-right">{{ __('場地') }}</label>

                            <div class="col-md-6">
                                <input id="site_name" type="text" class="form-control{{ $errors->has('site_name') ? ' is-invalid' : '' }}" name="site_name" value="{{ old('site_name') }}"required>

                                @if ($errors->has('site_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('site_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('宣傳圖上傳') }}</label>

                            <div class="col-md-6">
                                <input id="img" type="text" class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }}" name="img" value="{{ old('img') }}"required>

                                @if ($errors->has('img'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="imgprice" class="col-md-4 col-form-label text-md-right">{{ __('座位和票價圖上傳') }}</label>

                            <div class="col-md-6">
                                <input id="imgprice" type="text" class="form-control{{ $errors->has('imgprice') ? ' is-invalid' : '' }}" name="imgprice" value="{{ old('imgprice') }}"required>

                                @if ($errors->has('imgprice'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('imgprice') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="section" class="col-md-4 col-form-label text-md-right">{{ __('區域') }}</label>

                            <div class="col-md-6">
                                <input id="section" type="text" class="form-control{{ $errors->has('section') ? ' is-invalid' : '' }}" name="section" value="{{ old('section') }}"required>

                                @if ($errors->has('section'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('section') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="section" class="col-md-4 col-form-label text-md-right">轉帳剩餘天數</label>
                            <input type="text" id="days" placeholder="e.g. 95" />
                            <button onclick="App.setDays()">Set Days</button>
                        </div>-

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('新增') }}
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
    <div class="container text-white bg-dark p-4">
          <div class="row text-center col-12">
            <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            <ul class="nav">
    <li class="nav-item col-2 col-md-2 col-lg-2">
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="#">購票流程說明</a>
    </li>
    <li class="nav-item col-2 col-md-2 col-lg-2">
      <a class="nav-link" href="#">服務條款</a>
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
          <a data-toggle="tooltip" data-placement="bottom" title="關於我們" target="_blank" href="#"><strong>ETicket票務平台</strong></a>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
          <span data-toggle="tooltip" data-placement="bottom" title="(Mon-Fri 9:30am–8:00pm Sat.11:00am-7:00pm)">客服專線: 02-22227777</span>
        </div>
        <div class="col-4 col-md-4 col-lg-4">
            <a data-toggle="tooltip" data-placement="bottom" title="send now!" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=ETicket@gmail.com">客服信箱: ETicket@gmail.com</a>
        </div>
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
   
    @endsection