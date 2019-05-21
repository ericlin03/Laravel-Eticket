<?php
namespace App\Http\Controllers;
use DB;
use Mail;
use View;
class mailController extends Controller
{
    public function __construct()
    {
        $this->toPass = "";
    }
    public function send()
    {
        $this->email1 = '';
        $this->email2 = '';
        $this->email3 = '';
        $this->email4 = '';

        // $wallet = array();
        // if($_POST['receiver1'] != ''){
        //     array_push($wallet, $_POST['receiver1']);
        // }if($_POST['receiver2'] != ''){
        //     array_push($wallet, $_POST['receiver2']);
        // }if($_POST['receiver3'] != ''){
        //     array_push($wallet, $_POST['receiver3']);
        // }if($_POST['receiver4'] != ''){
        //     array_push($wallet, $_POST['receiver4']);
        // }
        // $unique = array_unique($wallet);





        if ($_POST['receiver1'] != '') {
            if ($_POST['receiver1'] != $_POST['receiver2'] or $_POST['receiver1'] != $_POST['receiver3'] or $_POST['receiver1'] != $_POST['receiver4'] ) {
                $this->walletFromBlade1 = $_POST['receiver1'];

                $emailQuery1 = DB::table('users')->select('email')->where('wallet', '=', $this->walletFromBlade1)->get();
                $this->email1 = $emailQuery1[0]->email;
            } else {
                echo "<script type=\"text/javascript\">alert(\"請勿輸入兩組相同電子錢包!!!\");
                function goHome() {window.location.href = \"http://localhost:8000/home\";}
                </script>";
                return redirect()->back();
            }
        }

        if ($_POST['receiver2'] != '') {
            if ($_POST['receiver2'] != $_POST['receiver1'] or $_POST['receiver2'] != $_POST['receiver3'] or $_POST['receiver2'] != $_POST['receiver4'] ) {
                $this->walletFromBlade2 = $_POST['receiver2'];
                $emailQuery2 = DB::table('users')->select('email')->where('wallet', '=', $this->walletFromBlade2)->get();
                $this->email2 = $emailQuery2[0]->email;
            } else {
                echo "<script type=\"text/javascript\">alert(\"請勿輸入兩組相同電子錢包!!!\");
                function goHome() {window.location.href = \"http://localhost:8000/home\";}
                </script>";
                return redirect()->back();
            }
        }

        if ($_POST['receiver3'] != '') {
            if ($_POST['receiver3'] != $_POST['receiver1'] or $_POST['receiver3'] != $_POST['receiver2'] or $_POST['receiver3'] != $_POST['receiver4'] ) {
                $this->walletFromBlade3 = $_POST['receiver3'];
                $emailQuery3 = DB::table('users')->select('email')->where('wallet', '=', $this->walletFromBlade3)->get();
                $this->email3 = $emailQuery3[0]->email;
            } else {
                echo "<script type=\"text/javascript\">alert(\"請勿輸入兩組相同電子錢包!!!\");
                function goHome() {window.location.href = \"http://localhost:8000/home\";}
                </script>";
                return redirect()->back();
            }
        }
        
        if ($_POST['receiver4'] != '') {
            if ($_POST['receiver4'] != $_POST['receiver1'] or $_POST['receiver4'] != $_POST['receiver3'] or $_POST['receiver4'] != $_POST['receiver2']) {
                $this->walletFromBlade4 = $_POST['receiver4'];
                $emailQuery4 = DB::table('users')->select('email')->where('wallet', '=', $this->walletFromBlade4)->get();
                $this->email4 = $emailQuery4[0]->email;
            } else {
                echo "<script type=\"text/javascript\">alert(\"請勿輸入兩組相同電子錢包!!!\");
                function goHome() {window.location.href = \"http://localhost:8000/home\";}
                </script>";
                return redirect()->back();
            }
        }
        
        return $this->mailer();
        // $this->walletFromBlade2 = $_POST['receiver2'];
        // $this->walletFromBlade3 = $_POST['receiver3'];
        // $this->walletFromBlade4 = $_POST['receiver4'];
        // $emailQuery1 = DB::table('users')->select('email')->where('wallet', '=', $this->walletFromBlade1)->get();
        // $emailQuery2 = DB::table('users')->select('email')->where('wallet', '=', $this->walletFromBlade2)->get();
        // $emailQuery3 = DB::table('users')->select('email')->where('wallet', '=', $this->walletFromBlade3)->get();
        // $emailQuery4 = DB::table('users')->select('email')->where('wallet', '=', $this->walletFromBlade4)->get();
        // $walletQuery1 = DB::table('users')->select('wallet')->where('identity', '=', $this->walletFromBlade1)->get();
        // $walletQuery2 = DB::table('users')->select('wallet')->where('identity', '=', $this->walletFromBlade2)->get();
        // $walletQuery3 = DB::table('users')->select('wallet')->where('identity', '=', $this->walletFromBlade3)->get();
        // $walletQuery4 = DB::table('users')->select('wallet')->where('identity', '=', $this->walletFromBlade4)->get();
        // $sizeOfWalletQuery = sizeof($walletQuery);
        // $sizeOfEmailQuery = sizeof($emailQuery);
        // // $check = false;
        // if ($sizeOfWalletQuery == 1 or $sizeOfEmailQuery == 1) {
        //     $this->walletFromDB = $walletQuery[0]->wallet;
        //     $this->email = $emailQuery[0]->email;
        //     // $check = true;
        //     if ($this->walletFromDB == $walletFromBlade) {
        //         return $this->mailer();
        //     } else {
        //         echo "<a href=\"http://localhost:8000/buyTicket\">身分證字號與錢包不符返回購買頁面</a>";
        //     }
        // } else {
        //     echo "<a href=\"http://localhost:8000/buyTicket\">無此身分證字號用戶!返回購買頁面</a>";
        // }
        // return view('mail');
    }
    public function mailer()
    {
        // $this->toPass = $this->walletFromDB; //wallet to pass
        DB::table('users')->where('email', '=', $this->email1)->update(['program' => '輔大音樂會']);
        DB::table('users')->where('email', '=', $this->email2)->update(['program' => '輔大音樂會']);
        DB::table('users')->where('email', '=', $this->email3)->update(['program' => '輔大音樂會']);
        DB::table('users')->where('email', '=', $this->email4)->update(['program' => '輔大音樂會']);
        Mail::send(
            ['text' => 'mail'],
            ['name' => 'Eric'],
            function ($message) {
                // if ($walletFromBlade == $walletFromDB) {
                if ($this->email1 != ''){
                    $message->to($this->email1)->subject('Eticket 購票確認信');
                }
                if ($this->email2 != ''){
                    $message->to($this->email2)->subject('Eticket 購票確認信');
                }
                if ($this->email3 != ''){
                    $message->to($this->email3)->subject('Eticket 購票確認信');
                }
                if ($this->email4 != ''){
                    $message->to($this->email4)->subject('Eticket 購票確認信');
                }
                // $message->to($this->email2)->subject('Eticket 購票確認信');
                // $message->to($this->email3)->subject('Eticket 購票確認信');
                // $message->to($this->email4)->subject('Eticket 購票確認信');
                $message->from('wp405402508@im.fju.edu.tw', 'Eticket');
                // echo "<button onclick=\"App.setBuyer()\">Set Buyer</button>";
                echo "<script type=\"text/javascript\">alert(\"邀請寄送成功!\");</script>";
            }
        );
        return $this->passer();
        // return redirect('buffer');
    }
    public function passer()
    {
        return view('buffer')->with('toPass', $this->toPass);
    }
}