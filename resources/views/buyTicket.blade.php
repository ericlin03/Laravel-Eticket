@extends('layouts.app2')
@section('content')
<img src="/img/座位表.jpg" style="margin-left: 15%; margin-top: 75px">
<br>
<div style="margin-left: 45%; margin-top: 75px">
  <div>

  </div>
  <br>
  <form action="/send" method="post">
    {{csrf_field()}}
    <label for="receiver">身分證字號</label>
    <input id="receiver1" name="receiver1" type="text" placeholder="身分證字號" value="{{$identity}}" />
    {{-- <input style="display:none" id="receiver1" name="receiver1" type="text" placeholder="身分證字號" value="{{$identity}}"
    /> --}}
    <br>

    <label for="receiver">身分證字號</label>
    <input id="receiver2" name="receiver2" type="text" placeholder="身分證字號" />
    <br>

    <label for="receiver">身分證字號</label>
    <input id="receiver3" name="receiver3" type="text" placeholder="身分證字號" />
    <br>

    <label for="receiver">身分證字號</label>
    <input id="receiver4" name="receiver4" type="text" placeholder="身分證字號" />

    <button class="btn btn-outline-danger" onclick="App.setBuyer()" id="goBuyTicket">go buy ticket</button>
  </form>
  <a href="./confirmTicket">confirm</a>
</div>

{{-- <script>
  $(document).ready(function(){
    if($("#receiver1").val() == $("#receiver2").val()){
      
    }
  // if ($("#receiver1").val() != "" || $("#receiver1").val()!= $("#receiver2").val() || $("#receiver1").val()!= $("#receiver3").val() || $("#receiver1").val()!= $("#receiver4").val() || $("#receiver2").val() != "" || $("#receiver2").val()!= $("#receiver1").val() || $("#receiver2").val()!= $("#receiver3").val() || $("#receiver2").val()!= $("#receiver4").val() || $("#receiver3").val() != "" || $("#receiver3").val()!= $("#receiver1").val() || $("#receiver3").val()!= $("#receiver2").val() || $("#receiver3").val()!= $("#receiver4").val() || $("#receiver4").val() != "" || $("#receiver4").val()!= $("#receiver1").val() || $("#receiver4").val()!= $("#receiver2").val() || $("#receiver4").val()!= $("#receiver3").val()){
  //   $("#goBuyTicket").hide();
  // }
});
</srcipt> --}}
@endsection