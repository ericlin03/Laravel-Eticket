<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ETicket') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="test.css" rel="stylesheet">
  

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #5F9EA0">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'ETicket') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="請輸入活動關鍵字.." aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 btn-sm" type="submit"><img src="images/search.png" width="30" height="30" class="d-inline-block align-top" alt=""></button>
                    </form>
                    <li class="nav-item active">
                    <a class="nav-link ecolor bcl bcr" href="{{ url('programs') }}">　所有活動　<span class="sr-only">(current)</span></a>
                     </li>
                    <li class="nav-item active">
                    <a class="nav-link ecolor bcr" href="{{ url('news') }}">　最新公告　</a>
                    </li>
                    <li class="nav-item active">
                     <a class="nav-link ecolor bcr" href="/resale">　二手票券　</a>
                    </li>
                    <li class="nav-item active white">
                    <a class="nav-link ecolor bcr" href="{{ url('problem') }}">　常見問題　</a>
                     </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('登入') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('註冊') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
            <a class="nav-link ecolor" href="#" data-toggle="tooltip" data-placement="bottom" title="我的收藏"><img src="images/shopping-cart.png" width="30" height="30" class="d-inline-block align-top" alt=""></a>
            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('登出') }}
                                    </a>
                                    <a class="dropdown-item" href="/orders">個人訂單 <span class="sr-only">(current)</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
    <script src="js/main.js"></script>
    <script src="./dist/js/index.js"></script>
        </main>
    </div>

</body>
</html>
