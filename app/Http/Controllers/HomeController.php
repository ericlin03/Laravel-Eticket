<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use Auth;


class HomeController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->middleware('auth');
        $data = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $data2 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>2]);
        $data3 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>3]);
        $data4 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>4]);
        $data5 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>5]);
        $data6 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>6]);
        $data7 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>7]);
        $data8 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $post2 = DB::select('select * from post');
        return view('home',compact('data','data2','data3','data4','data5','data6','data7','data8','post2'));
    }

    public function activity8(){
        $this->middleware('auth');
        $act = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $area = DB::select('select DISTINCT tick_price,type from program_seat where prog_id=:prog_id',['prog_id'=>8]);
        $user = Auth::user();
        $wallet = $user->wallet;
        return view('activity8',compact('act','area'));


    }

    public function pay2(){
        $this->middleware('auth');
        $user = Auth::user();
        $wallet = $user->wallet;
        $act = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $area = DB::select('select tick_price, type, owner_id from program_seat where ticket_id=:ticket_id',['ticket_id'=>1]);
        return view('payment-step2',compact('act','area', 'wallet'));
    }

    // public function updateOwner(){
    //     $this->middleware('auth');
    //     $user = Auth::user();
    //     // $wallet = $user->wallet;
    //     // $this->validate($request, ['wallet' => 'required']);
    //     // $area = DB::select('select tick_price, type, owner_id, status from program_seat where ticket_id=:ticket_id',['ticket_id'=>1]);
    //     $owner_id = $_POST["wallet"];
    //     DB::update('update program_seat set owner_id=?, status=\'sold\' where ticket_id=1',[(string)$owner_id]);
    //     // $area.save();
    // }

    public function pay3(){
        $this->middleware('auth');
        $user = Auth::user();
        $wallet = $user->wallet;
        $act = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $area = DB::select('select tick_price, type from program_seat where ticket_id=:ticket_id',['ticket_id'=>1]);
        DB::table('program_seat')->where('ticket_id', 1)->update(['owner_id' => $wallet, 'status' => 'sold']);
        return view('payment-step3',compact('act','area'));
    }

    public function personalorder(){
        $this->middleware('auth');
        $user = Auth::user();
        $id = $user->identity;
        $order = DB::select('select * from program_seat where owner_id=:owner_id',['owner_id'=>$id]);
        return view('order',compact('order'));
    }

    public function resaleList() {
        $this->middleware('auth');
        $user = Auth::user();
        $wallet = $user->wallet;
        $area = DB::select('select tick_area, type, tick_seat, prog_name from program_seat where status=\'resale\'');
        return view('resale',compact('area'));
    }

    public function resale(){
        $this->middleware('auth');
        $act = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $area = DB::select('select tick_price, type from program_seat where ticket_id=:ticket_id',['ticket_id'=>1]);
        $user = Auth::user();
        $wallet = $user->wallet;
        return view('resale-step1',compact('act','area'));
    }

    public function resale2(Request $request){
        $this->middleware('auth');
        $act = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $area = DB::select('select tick_price, type, owner_id from program_seat where ticket_id=:ticket_id',['ticket_id'=>1]);
        $user = Auth::user();
        $wallet = $user->wallet;
        return view('resale-step2',compact('act','area', 'wallet'));
    }

    public function resale3(){
        $this->middleware('auth');
        $user = Auth::user();
        $wallet = $user->wallet;
        $act = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $area = DB::select('select tick_price, type from program_seat where ticket_id=:ticket_id',['ticket_id'=>1]);
        DB::table('program_seat')->where('ticket_id', 1)->update(['owner_id' => $wallet, 'status' => 'sold']);
        return view('resale-step3',compact('act','area'));
    }

    public function orders() {
        $this->middleware('auth');
        $user = Auth::user();
        $wallet = $user->wallet;
        $act = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $area = DB::select('select tick_area, type, tick_seat, prog_name from program_seat where owner_id=?', [$wallet]);
        return view('orders',compact('act','area'));
    }

    public function programs() {
        $this->middleware('auth');
        $user = Auth::user();
        $wallet = $user->wallet;
        $act = DB::select('select * from program');
        return view('programs', compact('act'));
    }

    public function buyTicket(Request $request) {
        $this->middleware('auth');
        $user = Auth::user();
        $wallet = $user->wallet;
        $progName = $request->input('prog_name');
        $seat = DB::select('select * from program_seat');
        foreach($seat as $p) {
            if ($p->status != 'sold' || $p->status != 'resale') {
                $act = DB::select('select * from program where prog_id=?',[$p->prog_id]);
                $area = DB::select('select tick_price, type from program_seat where ticket_id=?',[$p->ticket_id]);
            }
        }
        return view('payment-step1', compact('act', 'area'));
    }

    //test

    public function test(Request $request) {
        $this->middleware('auth');
        $user = Auth::user();
        $wallet = $user->wallet;
        $id = $request->input('id');
        $data = DB::select('select * from users where id=?', [$id]);
        return view('/test2', compact('data'));
    }
}
