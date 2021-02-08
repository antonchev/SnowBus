<?php

namespace App\Http\Controllers\admin;


use App\Mail\mailTest;
use App\Mail\sendMail_ok;
use App\Trip;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;



#SELECT * FROM orders WHERE `created_at` > NOW() - INTERVAL 1 DAY
class OrderController extends Controller
{

    public function destroy($id)
    {

        Order::find($id)->delete();
        // show the edit form and pass the nerd
        return redirect()->route('admin.index');
    }

    public function export($id)
    {
        $name = trip::find($id);

        return Excel::download(new OrderExport($id), ($name->title.' '.$name->date.'.xlsx'));
    }
    //
    public  function index ()
    {

        $task = Order::all();
        $trip = Trip::all();
        return view('admin.order',['tasks'=>$task,'trips'=>$trip] );
    }

    public  function noti (Request $request)


    {
        $noti = new Order;

        $req = $request->get('label');

        $noti = Order::where('id_num',  $req)->first();
        $noti->pay = '1';
      // $noti->report= $request->all();

       $noti->save();

        $this->send_ok($noti->e_mail,$noti->id_num,$noti->f_Name);


    }

    public  function store (Request $request)
    {
        $task = new Order;



        function generateBarcodeNumber() {
            $number = mb_strtoupper( substr(md5(microtime()),rand(0,26),5));
            return $number;
        }

        function barcodeNumberExists($id) {
            // query the database and return a boolean
            // for instance, it might look like this in Laravel
            return Order::whereid_num($id)->exists();
        }
        $con = true;


        function your_function($gen,$task) {
            //do your stuff here

            if(barcodeNumberExists($gen)==true) {

                return true;

            } else {
                $task->id_num = $gen;
                return false;
            }
        }



        while($con)
        {
            if($con) {$con = your_function(generateBarcodeNumber(),$task);}
        }

        $fSize = $request->get('fSize');
        $sfSize = $request->get('sfSize');
        $task->fSize = $fSize.' '.$sfSize;
        $ekip = implode(" ", $request->get('ekip'));
        $task->foot = ' '. $request->get('foot');
        $task->ekip =$ekip;
        $task->report = ' '. $request->get('report');
        $task->pay = '0';
        $task->fill($request->all());
        $task->save();
        $this->send($task->e_mail,$task->id_num,$task->f_Name);

return  redirect()->route('id.index', ['id_num' => $task->id_num]);
    }

    public  function send ($e_mail,$id,$name)
    {
        Mail::to($e_mail)->send (new sendMail($id,$name));

    }

    public  function send_ok ($e_mail,$id,$name)
    {
        $emails = [$e_mail, 'kickabality@gmail.com'];
        Mail::to($emails)->send (new sendMail_ok($id,$name));

    }

    public  function mailTest ()
    {

        Mail::to('admin@snow-bus.ru')->send (new mailTest());

    }

    public  function show ($id_num)
    {



        $tasks = Order::where('id_num', $id_num)->first();

        if ($tasks==null)
           return abort(404);
        else
        return view('id',['task'=>$tasks] );



    }


}

