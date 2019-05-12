@extends('layouts.app2')
@section('content')
<div class="container mt-3">
  <div class="row top">
    <div class="col-12">

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleControls" data-slide-to="1"></li>
          <li data-target="#carouselExampleControls" data-slide-to="2"></li>
          <li data-target="#carouselExampleControls" data-slide-to="3"></li>
          <li data-target="#carouselExampleControls" data-slide-to="4"></li>
          <li data-target="#carouselExampleControls" data-slide-to="5"></li>
        </ol>
        @foreach($data as $program)
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{$program->img }}" height="400" width="1500" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          @endforeach
          @foreach($data2 as $program)
          <div class="carousel-item">
            <img class="d-block w-100" src="{{$program->img }}" height="400" width="1500" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          @endforeach
          @foreach($data3 as $program)
          <div class="carousel-item ">
            <img class="d-block w-100" src="{{$program->img }}" height="400" width="1500" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          @endforeach
          @foreach($data4 as $program)
          <div class="carousel-item ">
            <img class="d-block w-100" src="{{$program->img }}" height="400" width="1500" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          @endforeach
          @foreach($data5 as $program)
          <div class="carousel-item ">
            <img class="d-block w-100" src="{{$program->img }}" height="400" width="1500" alt="Fifth slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          @endforeach
          @foreach($data6 as $program)
          <div class="carousel-item ">
            <img class="d-block w-100" src="{{$program->img }}" height="400" width="1500" alt="Sixth slide">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
        @endforeach
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <hr><br>
  <span style="font-weight:bold; color:#5F9EA0; font-size:22px;">最新公告</span>
  <br><br>
  @foreach($post2 as $post)

  <div id="accordion">
    <div class="card2" style="background-color:#f0f0f0;padding-top:10px; padding-bottom:10px;">
      <div class="card2-header">
        <a class="card2-link" style="color:#0A0A0A;" data-toggle="collapse" href="#{{$post->postid}}">
          <span style="font-size:18px;">【{{$post->title}}】</span>
        </a>
      </div>
      <div id="{{$post->postid}}" class="collapse" data-parent="#accordion">
        <div class="card2-body">
          　{{$post->content}}　
        </div>
      </div>
    </div>
  </div>
  <br>@endforeach
  <hr>
</div>

<div class="container">
  <!-- Nav tabs -->
  <div class="row">
    <div class="col-12">
      <ul class="nav nav-tabs nav-justified" style="margin-top:20px;">
        <li class="active col-4"><a class="nav-link active" data-toggle="tab" href="#home">最新活動</a></li>
        <li class="col-4"><a class="nav-link" data-toggle="tab" href="#menu1">熱門活動</a></li>
        <li class="col-4"><a class="nav-link" data-toggle="tab" href="#menu2">特色活動</a></li>
      </ul>
    </div>
  </div>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <div class="container">
        <div class="row text-center">
          @foreach($data as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap" data-toggle="modal"
                data-target=".bd-example-modal-lg">
              <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">{{"$program->prog_name"}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img class="card-img-top" src="{{$program->img }}" height="400" alt="Card image cap">
                      <br>
                      <br>
                      <p>{{"$program->prog_content"}}</p>
                      <br>
                      <br>
                      <p>售票時間:{{"$program->prog_selldate"}}</p>
                      <p>票價分類:{{"$program->prog_price"}}</p>
                      <p>場地:{{"$program->site_name"}}</p>
                      <p>演出時間:{{"$program->prog_date"}}</p>
                      <img src="{{$program->imgprice }}" height="500" alt="Card image cap">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>

                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @foreach($data2 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap" data-toggle="modal"
                href="#2">
              <div class="modal fade bd-example-modal-lg" id="2" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" id="2">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">{{"$program->prog_name"}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img class="card-img-top" src="{{$program->img }}" height="400" alt="Card image cap">
                      <br>
                      <br>
                      <p>{{"$program->prog_content"}}</p>
                      <br>
                      <br>
                      <p>售票時間:{{"$program->prog_selldate"}}</p>
                      <p>票價分類:{{"$program->prog_price"}}</p>
                      <p>場地:{{"$program->site_name"}}</p>
                      <p>演出時間:{{"$program->prog_date"}}</p>
                      <img src="{{$program->imgprice }}" height="500" alt="Card image cap">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>
                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @foreach($data3 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap" data-toggle="modal"
                href="#8">
              <div class="modal fade bd-example-modal-lg" id="8" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" id="8">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">{{"$program->prog_name"}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img class="card-img-top" src="{{$program->img }}" height="400" alt="Card image cap">
                      <br>
                      <br>
                      <p>{{"$program->prog_content"}}</p>
                      <br>
                      <br>
                      <p>售票時間:{{"$program->prog_selldate"}}</p>
                      <p>票價分類:{{"$program->prog_price"}}</p>
                      <p>場地:{{"$program->site_name"}}</p>
                      <p>演出時間:{{"$program->prog_date"}}</p>
                      <img src="{{$program->imgprice }}" height="500" alt="Card image cap">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>
                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        @foreach($data4 as $program)
        <div class="row text-center mt-4">
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap" data-toggle="modal"
                href="#5">
              <div class="modal fade bd-example-modal-lg" id="5" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" id="5">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">{{"$program->prog_name"}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img class="card-img-top" src="{{$program->img }}" height="400" alt="Card image cap">
                      <br>
                      <br>
                      <p>{{"$program->prog_content"}}</p>
                      <br>
                      <br>
                      <p>售票時間:{{"$program->prog_selldate"}}</p>
                      <p>票價分類:{{"$program->prog_price"}}</p>
                      <p>場地:{{"$program->site_name"}}</p>
                      <p>演出時間:{{"$program->prog_date"}}</p>
                      <img src="{{$program->imgprice }}" height="500" alt="Card image cap">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>
                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @foreach($data5 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap" data-toggle="modal"
                href="#6">
              <div class="modal fade bd-example-modal-lg" id="6" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" id="6">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">{{"$program->prog_name"}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img class="card-img-top" src="{{$program->img }}" height="400" alt="Card image cap">
                      <br>
                      <br>
                      <p>{{"$program->prog_content"}}</p>
                      <br>
                      <br>
                      <p>售票時間:{{"$program->prog_selldate"}}</p>
                      <p>票價分類:{{"$program->prog_price"}}</p>
                      <p>場地:{{"$program->site_name"}}</p>
                      <p>演出時間:{{"$program->prog_date"}}</p>
                      <img src="{{$program->imgprice }}" height="500" alt="Card image cap">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>
                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @foreach($data6 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap" data-toggle="modal"
                href="#7">
              <div class="modal fade bd-example-modal-lg" id="7" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" id="7">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">{{"$program->prog_name"}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img class="card-img-top" src="{{$program->img }}" height="400" alt="Card image cap">
                      <br>
                      <br>
                      <p>{{"$program->prog_content"}}</p>
                      <br>
                      <br>
                      <p>售票時間:{{"$program->prog_selldate"}}</p>
                      <p>票價分類:{{"$program->prog_price"}}</p>
                      <p>場地:{{"$program->site_name"}}</p>
                      <p>演出時間:{{"$program->prog_date"}}</p>
                      <img src="{{$program->imgprice }}" height="500" alt="Card image cap">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>
                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <div class="container">
        <div class="row text-center">
          @foreach($data7 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap" data-toggle="modal"
                href="#9">
              <div class="modal fade bd-example-modal-lg" id="9" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" id="9">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">{{"$program->prog_name"}}</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <img class="card-img-top" src="{{$program->img }}" height="400" alt="Card image cap">
                      <br>
                      <br>
                      <p>{{"$program->prog_content"}}</p>
                      <br>
                      <br>
                      <p>售票時間:{{"$program->prog_selldate"}}</p>
                      <p>票價分類:{{"$program->prog_price"}}</p>
                      <p>場地:{{"$program->site_name"}}</p>
                      <p>演出時間:{{"$program->prog_date"}}</p>
                      <img src="{{$program->imgprice }}" height="500" alt="Card image cap">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>

                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @foreach($data7 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="cardh-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap">
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>

                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @foreach($data7 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap">
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>

                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <div class="container">
        <div class="row text-center">
          @foreach($data7 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap">
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>

                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @foreach($data7 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap">
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>

                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @foreach($data7 as $program)
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card h-100">
              <img class="card-img-top" src="{{$program->img }}" height="180" alt="Card image cap">
              <div class="card-body">

                <h5 class="card-title">{{"$program->prog_name"}}</h5>
                <p class="card-text">演出時間:{{"$program->prog_date"}}</p>
                <p class="card-text">場地:{{"$program->site_name"}}</p>

                <br>
                <img src="images/.png" width="35" height="35" class="d-inline-block align-top" alt="">
                <form method="get" action="buyOneTicket">
                  <input type="text" name="prog_name" value="{{$program->prog_name}}" style="display:none" />
                  <button type="submit" style="float:center" onclick="location.href='{{ url('login') }}'"
                    class="btn btn-secondary">立即購票 <img src="images/ticket.png" width="25" height="25"
                      class="d-inline-block align-top" alt=""></button>
                </form>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection