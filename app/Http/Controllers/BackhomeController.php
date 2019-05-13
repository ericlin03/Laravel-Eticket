<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
//use App\Program;
use DB;
use Auth;
use Redirect;


class BackhomeController extends Controller
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
        $data = DB::select('select * from program where prog_id=:prog_id', ['prog_id' => 1]);
        $data2 = DB::select('select * from program where prog_id=:prog_id', ['prog_id' => 2]);
        $data3 = DB::select('select * from program where prog_id=:prog_id', ['prog_id' => 3]);
        $data4 = DB::select('select * from program where prog_id=:prog_id', ['prog_id' => 4]);
        $data5 = DB::select('select * from program where prog_id=:prog_id', ['prog_id' => 5]);
        $data6 = DB::select('select * from program where prog_id=:prog_id', ['prog_id' => 6]);
        $post2 = DB::select('select * from post');

        return view('backhome', compact('data', 'data2', 'data3', 'data4', 'data5', 'data6', 'post2'));
    }

    public function activity8()
    {
        $act = DB::select('select * from program where prog_id=:prog_id', ['prog_id' => 8]);
        $area = DB::select('select DISTINCT tick_area from program_seat');
        $seat = DB::select('select * from program_seat where prog_id=:prog_id', ['prog_id' => 8]);
        return view('activity8', compact('act', 'seat'));
    }



    public function personalorder()
    {
        $this->middleware('auth');
        $user = Auth::user();
        $id = $user->identity;
        $order = DB::select('select * from program_seat where owner_id=:owner_id', ['owner_id' => $id]);
        return view('order', compact('order'));
    }

    //public function newprogram()
    //{
    // return View::make('newprogram')
    //          ->with('title', '新增');/}

    public function insert(Request $request)
    {
        $prog_name = $request['prog_name'];
        $prog_content = $request['prog_content'];
        $prog_price = $request['prog_price'];
        $prog_date = $request['prog_date'];
        $prog_selldate = $request['prog_selldate'];
        $prog_organizer = $request['prog_organizer'];
        $site_name = $request['site_name'];
        $img = $request['img'];
        $imgprice = $request['imgprice'];
        $section = $request['section'];

        $data = array(
            'prog_name' => $prog_name, 'prog_content' => $prog_content, 'prog_price' => $prog_price, 'prog_date' => $prog_date,
            'prog_selldate' => $prog_selldate, 'prog_organizer' => $prog_organizer, 'site_name' => $site_name, 'img' => $img, 'imgprice' => $imgprice,
            'section' => $section
        );

        DB::table('program')->insert($data);
        return Redirect::to('backhome');
    }

    //   function getData(){
    //     // $rows = DB::select('SELECT COUNT(*) FROM program');
    //     $programs = DB::select('SELECT * FROM program');
    //     return view('programsmanager', compact('programs'));
    //     //   $data['data'] = DB::table('program')->get();
    //     //   if(count($data) > 0)
    //     //   {
    //     //       return view('programsmanager','data');
    //     //   }else{
    //     //     return view('programsmanager');
    //     //   }
    //   }

    public function getData()
    {
        $this->middleware('auth');
        $user = Auth::user();
        $wallet = $user->wallet;
        $act = DB::select('select * from program');
        return view('programsmanager', compact('act'));
    }


    function delete($prog_id)
    {
        DB::table('program')->where('prog_id', $prog_id)->delete();
        return redirect('backhome');
    }

    public function insertpost(Request $req)
    {
        $title = $req->input('title');
        $content = $req->input('content');
        

        $data = array(
            'title' => $title, 'content' => $content,             
        );

        DB::table('post')->insert($data);
        return Redirect::to('backhome');
    }



    function edit($prog_id)
    {

        $act = DB::select('SELECT * FROM program WHERE prog_id=?', [$prog_id]);

        return view('edit', compact('act'));
    }

    function update(Request $request)
    {

        $this->validate($request, [
            'prog_name' => 'required',
            'prog_content' => 'required',
            'prog_price' => 'required',
            'prog_date' => 'required',
            'prog_selldate' => 'required',
            'prog_organizer' => 'required',
            'img' => 'required',
            'imgprice' => 'required',


        ]);

        // $program =DB::select('SELECT * FROM program WHERE prog_id=?', [$prog_id]);
        // $program -> prog_name = $request ->get('prog_name');
        $prog_id =  $request['prog_id'];
        $prog_name =  $request['prog_name'];
        $prog_content =  $request['prog_content'];
        $prog_price =  $request['prog_price'];
        $prog_date =  $request['prog_date'];
        $prog_selldate =  $request['prog_selldate'];
        $prog_organizer =  $request['prog_organizer'];
        $img =  $request['img'];
        $imgprice =  $request['imgprice'];
        // $program -> prog_content = $request ->p('prog_content');
        // $program -> prog_price = $request ->get('prog_price');
        // $program -> prog_date = $request ->get('prog_date');
        // $program -> prog_selldate = $request ->get('prog_selldate');
        // $program -> prog_organizer = $request ->get('prog_organizer');
        // $program -> img = $request ->get('img');
        // $program -> imgprice = $request ->get('imgprice');

        // DB::update('UPDATE program SET prog_name=?,prog_content=?,prog_price=?,prog_date=?,prog_selldate=?,prog_organizer=?,img=?,imgprice=? WHERE prog_id=?',
        //     [$prog_name, $prog_content, $prog_price, $prog_date, $prog_selldate, $prog_organizer, $img, $imgprice, $prog_id]
        // );

        DB::table('program')->where('prog_id', $prog_id)->update(['prog_name' => $prog_name, 'prog_content' => $prog_content, 'prog_price' => $prog_price, 'prog_date' => $prog_date, 'prog_selldate' =>  $prog_selldate , 'prog_organizer' => $prog_organizer, 'img' => $img, 'imgprice' => $imgprice]);
        // $program -> save();
        return redirect('/programsmanager');
        // return view('programsmanager');



    }
}
