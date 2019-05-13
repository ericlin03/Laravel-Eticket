@extends('layouts.app3')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('ETicket發布公告') }}</div>

        <div class="card-body">
          <form method="post" action="/insertpost">
            @csrf

            <div class="form-group row">
              <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('標題') }}</label>

              <div class="col-md-6">
                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                  name="title" value="{{ old('title') }}" required autofocus>

                @if ($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('公告內容') }}</label>

              <div class="col-md-6">
                <textarea id="content" style=" height:100px;"
                  class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name='content'
                  value="{{ old('content') }}" required autofocus></textarea>

                @if ($errors->has('content'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('content') }}</strong>
                </span>
                @endif
              </div>
            </div>

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
@endsection