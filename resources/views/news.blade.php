@extends('layouts.app')
 @section('content');
 
 <div class="container">
      <div class="row" style="margin-top:50px;">
      <div class="container">
      <span style="font-weight:bold; color:#5F9EA0; font-size:22px;">最新公告</span><br><br>


      <div id="accordion1">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
    
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse1">
        <img src="images/ear.png" width="25" height="25" class="d-inline-block align-top" alt=""><b>【系統維護公告】</b>
        </a>
      <div id="collapse1" class="collapse" data-parent="#accordion1">
      <br><br>因系統進行購票升級維護，將於 2019/3/06(三) 06:00 ~ 07:00 及 2019/2/7(四) 06:00 ~ 07:00 暫停服務，造成不便敬請見諒。
      </div>
    </div>
  </div>
    </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</div>
<br><br>
    @endsection