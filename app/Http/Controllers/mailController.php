<?php
namespace App\Http\Controllers;
use DB;
use Mail;
use View;
class mailController extends Controller
{
    public function __construct()
    {
        // $this->toPass = "";
    }
    public function send()
    {
        $this->email1 = '';
        $this->email2 = '';
        $this->email3 = '';
        $this->email4 = '';

        if ($_POST['receiver1'] != '') {
            if ($_POST['receiver1'] != $_POST['receiver2'] or $_POST['receiver1'] != $_POST['receiver3'] or $_POST['receiver1'] != $_POST['receiver4'] ) {
                $this->idFromBlade1 = $_POST['receiver1'];
                $this->id1 = $_POST['receiver1'];
                $emailQuery1 = DB::table('users')->select('email')->where('identity', '=', $this->idFromBlade1)->get();
                $this->email1 = $emailQuery1[0]->email;
            } else {
                echo "<script type=\"text/javascript\">alert(\"請勿輸入兩組相同帳號!!!\");
                function goHome() {window.location.href = \"http://localhost:8000/home\";}
                </script>";
                return redirect()->back();
            }
        }

        if ($_POST['receiver2'] != '') {
            if ($_POST['receiver2'] != $_POST['receiver1'] or $_POST['receiver2'] != $_POST['receiver3'] or $_POST['receiver2'] != $_POST['receiver4'] ) {
                $this->idFromBlade2 = $_POST['receiver2'];
                $this->id2 = $_POST['receiver2'];
                $emailQuery2 = DB::table('users')->select('email')->where('identity', '=', $this->idFromBlade2)->get();
                $this->email2 = $emailQuery2[0]->email;
            } else {
                echo "<script type=\"text/javascript\">alert(\"請勿輸入兩組相同帳號!!!\");
                function goHome() {window.location.href = \"http://localhost:8000/home\";}
                </script>";
                return redirect()->back();
            }
        }

        if ($_POST['receiver3'] != '') {
            if ($_POST['receiver3'] != $_POST['receiver1'] or $_POST['receiver3'] != $_POST['receiver2'] or $_POST['receiver3'] != $_POST['receiver4'] ) {
                $this->idFromBlade3 = $_POST['receiver3'];
                $this->id3 = $_POST['receiver3'];
                $emailQuery3 = DB::table('users')->select('email')->where('identity', '=', $this->idFromBlade3)->get();
                $this->email3 = $emailQuery3[0]->email;
            } else {
                echo "<script type=\"text/javascript\">alert(\"請勿輸入兩組相同帳號!!!\");
                function goHome() {window.location.href = \"http://localhost:8000/home\";}
                </script>";
                return redirect()->back();
            }
        }
        
        if ($_POST['receiver4'] != '') {
            if ($_POST['receiver4'] != $_POST['receiver1'] or $_POST['receiver4'] != $_POST['receiver3'] or $_POST['receiver4'] != $_POST['receiver2']) {
                $this->idFromBlade4 = $_POST['receiver4'];
                $this->id4 = $_POST['receiver4'];
                $emailQuery4 = DB::table('users')->select('email')->where('identity', '=', $this->idFromBlade4)->get();
                $this->email4 = $emailQuery4[0]->email;
            } else {
                echo "<script type=\"text/javascript\">alert(\"請勿輸入兩組相同帳號!!!\");
                function goHome() {window.location.href = \"http://localhost:8000/home\";}
                </script>";
                return redirect()->back();
            }
        }
        
        return $this->mailer();
        
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
                $message->from('wp405402508@im.fju.edu.tw', 'Eticket');
                echo "<script type=\"text/javascript\">alert(\"邀請寄送成功!\");</script>";
            }
        );
        return $this->passer();
        // return redirect('buffer');
    }
    public function passer()
    {
        $walletQuery1 = DB::table('users')->select('wallet')->where('identity', '=', $this->id1)->get();
        $walletQuery2 = DB::table('users')->select('wallet')->where('identity', '=', $this->id2)->get();
        $walletQuery3 = DB::table('users')->select('wallet')->where('identity', '=', $this->id3)->get();
        // $walletQuery4 = DB::table('users')->select('wallet')->where('identity', '=', $this->id4)->get();
        $wallet1 = $walletQuery1[0]->wallet;
        $wallet2 = $walletQuery2[0]->wallet;
        $wallet3 = $walletQuery3[0]->wallet;
        // $wallet4 = $walletQuery4[0]->wallet;
        return view('buffer',compact('wallet1', 'wallet2','wallet3'));
    }
}

//passer(), buffer.blade, index.js setBuyer()