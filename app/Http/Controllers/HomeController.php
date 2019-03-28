<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
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
        $data = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>1]);
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

    public function pay(){
        $this->middleware('auth');
        $act = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $area = DB::select('select tick_price, type from program_seat where ticket_id=:ticket_id',['ticket_id'=>1]);
        $user = Auth::user();
        $wallet = $user->wallet;
        return view('payment-step1',compact('act','area'));
    }

    public function pay2(){
        $this->middleware('auth');
        $act = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $area = DB::select('select tick_price, type from program_seat where ticket_id=:ticket_id',['ticket_id'=>1]);
        $user = Auth::user();
        $wallet = $user->wallet;
        return view('payment-step2',compact('act','area'));
    }



    public function personalorder(){
        $this->middleware('auth');
        $user = Auth::user();
        $id = $user->identity;
        $order = DB::select('select * from program_seat where owner_id=:owner_id',['owner_id'=>$id]);
        return view('order',compact('order'));
    }


}
