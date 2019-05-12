@extends('layouts.app3')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ETicket修改節目') }}</div>

                <div class="card-body">
                    <form method="post" action="update" >
                        {{ csrf_field() }}
                        
                        <div class="form-group row">
                            <label for="prog_name" class="col-md-4 col-form-label text-md-right">{{ __('節目名稱') }}</label>

                            <div class="col-md-6">
                            @foreach($act as $act)
                                <input id="prog_name" type="text"  name="prog_name" value="{{ $act->prog_name}}" required autofocus>
                                <input style="display:none" name="prog_id" value="{{$act->prog_id}}">
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prog_content" class="col-md-4 col-form-label text-md-right">{{ __('節目資訊') }}</label>

                            <div class="col-md-6">
                                <input id="prog_content" type="text" name='prog_content'  value="{{$act->prog_content}}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_price" class="col-md-4 col-form-label text-md-right">{{ __('票價') }}</label>

                            <div class="col-md-6">
                                <input id="prog_pricet" type="text"  name='prog_price'  value="{{$act->prog_price}}" required autofocus>

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_date" class="col-md-4 col-form-label text-md-right">{{ __('演出日期') }}</label>

                            <div class="col-md-6">
                                <input id="prog_date" type="text"  name='prog_date'  value="{{$act->prog_date}}" required autofocus>

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_selldate" class="col-md-4 col-form-label text-md-right">{{ __('售票日期') }}</label>

                            <div class="col-md-6">
                                <input id="prog_selldate" type="text"  name='prog_selldate'  value="{{$act->prog_selldate}}" required autofocus>

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prog_organizer" class="col-md-4 col-form-label text-md-right">{{ __('主辦單位') }}</label>

                            <div class="col-md-6">
                                <input id="prog_organizer" type="text"  name="prog_organizer"  value="{{$act->prog_organizer}}" required>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="site_name" class="col-md-4 col-form-label text-md-right">{{ __('場地') }}</label>

                            <div class="col-md-6">
                                <input id="site_name" type="text"  name="site_name"  value="{{$act->site_name}}"required>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('宣傳圖上傳') }}</label>

                            <div class="col-md-6">
                                <input id="img" type="text"  name="img"  value="{{$act->img}}"required>

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="imgprice" class="col-md-4 col-form-label text-md-right">{{ __('座位和票價圖上傳') }}</label>

                            <div class="col-md-6">
                                <input id="imgprice" type="text"  name="imgprice"  value="{{$act->imgprice}}"required>

                                
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