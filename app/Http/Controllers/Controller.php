<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome(){
        $data = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>12]);
        $data2 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>2]);
        $data3 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>3]);
        $data4 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>4]);
        $data5 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>5]);
        $data6 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>6]);
        $data7 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>7]);
        $data8 = DB::select('select * from program where prog_id=:prog_id',['prog_id'=>8]);
        $post = DB::select('select * from post');
        return view('welcome',compact('data','data2','data3','data4','data5','data6','data7','data8','post'));
        
    }

    public function programs() {
        $act = DB::select('select * from program');
        return view('programs', compact('act'));
    }

    public function resaleList() {
        $area = DB::select('select section, type, tick_seat, prog_name, prog_id, ticket_id, tick_price from program_seat where status=\'resale\'');
        foreach($area as $p) {
            $price = $p->tick_price * 1.05;
        }
        return view('resale',compact('area', 'price'));
    }

    public function post(){
        $post = DB::select('select * from post');
        return view('news', compact('post'));
    }
}
