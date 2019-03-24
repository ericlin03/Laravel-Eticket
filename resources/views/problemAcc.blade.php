@extends('layouts.app2')

@section('content')
<div class="container">
  <!-- Nav tabs -->
  <div class="row" style="margin-top:90px;">
        <div class="col-12">
          <ul class="nav nav-tabs nav-justified" style="margin-top:0px;">
            <li class="active col-3"><a class="nav-link active" data-toggle="tab" href="#home"><img src="images/buyticket.png" width="80" height="80" class="d-inline-block align-top" alt=""><br><span style="font-size:50px">購票</span></a></li>
            <li class="col-3"><a class="nav-link" data-toggle="tab" href="#menu1"><img src="images/check-in-with-card.png" width="80" height="80" class="d-inline-block align-top" alt=""><br><span style="font-size:50px">入場</span></a></li>
            <li class="col-3"><a class="nav-link" data-toggle="tab" href="#menu2"><img src="images/error.png" width="80" height="80" class="d-inline-block align-top" alt=""><br><span style="font-size:50px">退票</span></a></li>
            <li class="col-3"><a class="nav-link" data-toggle="tab" href="#menu3"><img src="images/question.png" width="80" height="80" class="d-inline-block align-top" alt=""><br><span style="font-size:50px">其他</span></a></li>
          </ul>
      </div>
    </div>


  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <div class="container">
      <div class="row">
      <div class="container">


      <div id="accordion1">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse1">
        <b>【如何加入會員？】</b>
        </a>
      <div id="collapse1" class="collapse" data-parent="#accordion1">
      <br><br>※須綁定metamask電子錢包，若尚未擁有可至： 進行辦理<br>※使用個人的身分證字號加入會員，僅限本人使用。
<br>※信箱需進行驗證，通過驗證後，需經過24小時系統作業處理，才可開始於Eticket網站購票。
（舉例：05/02 12:00完成驗證，05/03 12:00起才可開始購票，實際依系統顯示時間為準。）
      </div>
    </div>
  </div>
  <div id="accordion2">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse2">
        <b>【可以用手機購票嗎？】</b>
        </a>
      <div id="collapse2" class="collapse" data-parent="#accordion2">
      <br><br>目前尚未開放。
      </div>
    </div>
  </div>
  <div id="accordion3">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse3">
        <b>【如何付款？】</b>
        </a>
      <div id="collapse3" class="collapse" data-parent="#accordion3">
      <br><br>使用metamask電子錢包付款，metamask儲值方式詳見：
      </div>
    </div>
  </div>
  <div id="accordion4">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse4">
        <b>【可以在超商購票嗎？】</b>
        </a>
      <div id="collapse4" class="collapse" data-parent="#accordion4">
      <br><br>本系統目前僅供網站購票。
      </div>
    </div>
  </div>
  <div id="accordion5">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse5">
        <b>【節目開賣前點選「立即購票」有看到時間倒數，但是倒數的時間不會變動？】</b>
        </a>
      <div id="collapse5" class="collapse" data-parent="#accordion5">
      <br><br>只要重新點選『立即購票』，倒數的時間就會自動刷新。
      </div>
    </div>
  </div>
  <div id="accordion6">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse6">
        <b>【選到座位後，會因為別人比我快完成付款而搶不到座位嗎？】</b>
        </a>
      <div id="collapse6" class="collapse" data-parent="#accordion6">
      <br><br>不會。<br>
一個座位只會分配到一筆訂單內，選到座位後在期限內完成付款即可。
      </div>
    </div>
  </div>
  <div id="accordion7">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse7">
        <b>【什麼是電腦配位？】</b>
        </a>
      <div id="collapse7" class="collapse" data-parent="#accordion7">
      <br><br>劃位區域電腦會依現在空位找出符合條件的連續座位，不劃位區域電腦會配出符合條件的張數。使用電腦配位可以加快購票的速度。
      <br>
不劃位搖滾區依序號排隊入場時，其序號僅供入場整隊用，若有消費者未結帳或退票，空出之序號有可能會被比較晚買的消費者購買，且可能同筆訂單會有序號不連號情形發生。
      </div>
    </div>
  </div>
  <div id="accordion8">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse8">
        <b>【電腦配位方式是隨機選位嗎？】</b>
        </a>
      <div id="collapse8" class="collapse" data-parent="#accordion8">
      <br><br>電腦會從最前方的排數開始計算符合條件的連續座位，而非隨機選位。
      </div>
    </div>
  </div>
  <div id="accordion9">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse9">
        <b>【我想買2張票，但選擇電腦配位後，要選擇購票張數卻看到「已無連續2張的張數」？】</b>
        </a>
      <div id="collapse9" class="collapse" data-parent="#accordion9">
      <br><br>表示該區已無 2 張連續座位，僅剩零散的單 1 座位，因此若要購買 2 張連續座位請選擇其它區域。如不介意座位是否連續，請嘗試選擇 1 張票券，加購兩次後即可能訂到該區兩張座位 (若剩餘座位數足夠)。
      </div>
    </div>
  </div>
  <div id="accordion10">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse10">
        <b>【同一個節目有2天不同的場次，可以同時購買2張票嗎？】</b>
        </a>
      <div id="collapse10" class="collapse" data-parent="#accordion10">
      <br><br>不可以。同一筆訂單不能跨場次購買，若購買不同場次，請分2筆訂單購買。
      </div>
    </div>
  </div>
  <div id="accordion11">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse11">
        <b>【一筆訂單最多可買幾張票？】</b>
        </a>
      <div id="collapse11" class="collapse" data-parent="#accordion11">
      <br><br>依照朋友圈功能之規定，最多購買四張票〈包含自己〉
      </div>
    </div>
  </div>
  <div id="accordion12">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse12">
        <b>【選到座位還沒付款，但突然不想買了，該怎麼辦？】</b>
        </a>
      <div id="collapse12" class="collapse" data-parent="#accordion12">
      <br><br>尚未勾選【我同意】者，可直接請點選【取消訂單】，系統會清除沒結帳的訂單。訂單一旦取消即無法復原。
      <br>
已勾選【我同意】者，需待付款時間逾時或失敗，系統會自動清除訂單。
      </div>
    </div>
  </div>
  <div id="accordion13">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapse13">
        <b>【為什麼現在網站上可買到的座位(序號)比我開賣當天買到的座位(序號)還前面？】</b>
        </a>
      <div id="collapse13" class="collapse" data-parent="#accordion13">
      <br><br>若有消費者未結帳或退票，空出之座位(序號)有可能會被比較晚買的消費者購買。
故售票日之後，如釋出較為前面的座位(序號)之票券屬正常情形。
      </div>
    </div>
  </div>
    </div>
    </div>
    </div>
    </div>


    <div id="menu1" class="container tab-pane fade"><br>
    <div class="container">
      <div class="row">

      <div class="container">


      <div id="accordionTwo1">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapseTwo1">
        <b>【如何入場？】</b>
        </a>
      <div id="collapseTwo1" class="collapse" data-parent="#accordionTwo1">
      <br><br>第一步：請至【服務窗口】排隊透過登入ETicket帳號及出示證件核對身分，核對完身分後將獲蓋一枚隱形章<br>
第二步：請至【活動入口】排隊耐心等候服務人員掃描隱形章後方可入場
      </div>
    </div>
  </div>
  <div id="accordionTwo2">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapseTwo2">
        <b>【現場需要出示什麼資料？】</b>
        </a>
      <div id="collapseTwo2" class="collapse" data-parent="#accordionTwo2">
      <br><br>一、票券序號（登入ETicket帳號並顯示給服務人員確認）<br>
二、【身份證】、【健保卡】、【駕照】或【護照】擇一。（僅限正本，證號及姓名須與ETicket帳號相符之有照片的有效身份證件，恕不接受證件影本/證件截圖照片/證件掃描檔。）
<br>※上述資料不齊全且無法核對身份者，將無法領取票券。
      </div>
    </div>
  </div>
    </div>
    </div>
    </div>
    </div>


    <div id="menu2" class="container tab-pane fade"><br>
    <div class="container">
      <div class="row">
      <div class="container">


      <div id="accordionThree1">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapseThree1">
        <b>【可以退票嗎？】</b>
        </a>
      <div id="collapseThree1" class="collapse" data-parent="#accordionThree1">
      <br><br>各節目採用之退票方案及相關退票流程，請參考各節目頁面退票說明。
      <br><br>
依文化部於中華民國107年5月16日文藝字第10710128232號公告修定之『藝文表演票券定型化契約應記載及不得記載事項』第六條退換票機制，主辦單位就以下四方案擇一勾選。
<br><br>
方案一：演出前10天內不可退票，退換票手續費上限為票面價格的10%。
<br>
方案二：購票後3天內可退票，退換票手續費上限為票面價格的5%。
<br>
方案三：演出前20天內不可退票，退換票手續費上限為票面價格的10%。
<br>
方案四：演出日前31天以前退票手續費上限為票面價格的10%。演出日前11~30天退票手續費上限為票面價格的30%。演出日前3~10天退票手續費上限為票面價格的50%。演出日前2天不可退票。
<br>
<br>
※服務費、取票手續費及轉帳手續費非屬票價部分不在退費範圍之內。
<br>
※申請退票5個工作天後，請於訂單查詢確認訂單，訂單狀態將改為『個人因素退票』，訂單狀態若無變動請務必來電或來信確認ETicket是否有收到退票申請，退款作業時間約2個工作天(收到退票申請起計算)。
      </div>
    </div>
  </div>
  <div id="accordionThree2">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapseThree2">
        <b>【可以換票嗎？】</b>
        </a>
      <div id="collapseThree2" class="collapse" data-parent="#accordionThree2">
      <br><br>換票等同於退票，請將原先購買的票券辦理退票，再另行購買。
      </div>
    </div>
  </div>
    </div>
    </div>
    </div>
    </div>



<div id="menu3" class="container tab-pane fade"><br>
    <div class="container">
      <div class="row">
      <div class="container">

      <div id="accordionFour1">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapseFour1">
        <b>【註冊後可以修改身分證字號嗎？】</b>
        </a>
      <div id="collapseFour1" class="collapse" data-parent="#accordionFour1">
      <br><br>會員註冊後，不開放修改會員證字號。請確認資料後再行送出。
      </div>
    </div>
  </div>
  <div id="accordionFour2">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapseFour2">
        <b>【外國人身分證字號不足10碼怎麼辦？】</b>
        </a>
      <div id="collapseFour2" class="collapse" data-parent="#accordionFour2">
      <br><br>請於證號最前方用0補足，若超過10碼，請取前10碼填寫。
      <br><br>
Please enter your ID card number or passport number (foreigners only), and the column cannot be changed once entered. If the passport number has fewer than 10 digits, please input extra zero(s) in front of your passport number. If the passport number has over 10 digits, please input the first 10 digits only.
<br>
Ex. K1234567 fewer than 10 digits, input extra zero in front of K as ‘00K1234567’
<br>
Ex. ABC123456789 over 10 digits, input the first 10 digits as ‘ABC1234567’
      </div>
    </div>
  </div>
  <div id="accordionFour3">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapseFour3">
        <b>【購票可以開立發票嗎？】</b>
        </a>
      <div id="collapseFour3" class="collapse" data-parent="#accordionFour3">
      <br><br>票券內含代徵娛樂稅，免開立發票。
      </div>
    </div>
  </div>
  <div id="accordionFour4">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapseFour4">
        <b>【為什麼我收不到系統通知信？】</b>
        </a>
      <div id="collapseFour4" class="collapse" data-parent="#accordionFour4">
      <br><br>請先檢查垃圾郵件，另建議將ETicket售票系統發信Email(ETicket@gmail.com)加入郵件通訊錄或信件白名單，減少被郵件伺服器判定為垃圾郵件的機會。
      </div>
    </div>
  </div>
  <div id="accordionFour5">
    <div style="background-color:#f0f0f0; padding-top:10px; padding-bottom:35px; margin-bottom:5px; border-radius:0.25rem;">
        <a style="color:#0A0A0A; font-size:18px; float:left;" data-toggle="collapse" href="#collapseFour5">
        <b>【有限制使用的瀏覽器嗎？】</b>
        </a>
      <div id="collapseFour5" class="collapse" data-parent="#accordionFour5">
      <br><br>為提供您更好的瀏覽品質與網站體驗，建議使用Google Chrome瀏覽器。
      </div>
    </div>
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