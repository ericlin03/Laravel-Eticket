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
        $id = $_POST['id'];
        $walletFromBlade = $_POST['receiver'];
        $emailQuery = DB::table('users') -> select('email') -> where('identity', '=', $id) -> get();
        $walletQuery = DB::table('users') -> select('wallet') -> where('identity', '=', $id) -> get();
        $sizeOfWalletQuery = sizeof($walletQuery);
        $sizeOfEmailQuery = sizeof($emailQuery);
        // $check = false;
        if ($sizeOfWalletQuery == 1 and $sizeOfEmailQuery == 1) {
            $this->walletFromDB = $walletQuery[0] -> wallet;
            $this->email = $emailQuery[0] -> email;
            // $check = true;
            if($this->walletFromDB == $walletFromBlade){
            return $this->mailer();
            }
            else{
                echo "<a href=\"http://localhost:8000/buyTicket\">身分證字號與錢包不符返回購買頁面</a>";
            }
        } else {
            echo "<a href=\"http://localhost:8000/buyTicket\">無此身分證字號用戶!返回購買頁面</a>";
        }
        // return view('mail');
    }
    public function mailer()
    {
        $this->toPass = $this->walletFromDB;//wallet to pass
        Mail::send(
            ['text' => 'mail'],
            ['name' => 'Eric'],
            function ($message) {
                // if ($walletFromBlade == $walletFromDB) {
                $message -> to($this->email, '') -> subject('Eticket 購票確認信');
                $message -> from('wp405402508@im.fju.edu.tw', 'Eticket');
                $this->verification = true;
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