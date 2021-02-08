<?php

namespace App\Http\Controllers\admin;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trip;
use App\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail_ok;



use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;



class DashboardController extends Controller
{
    //Dashboard
    public  function index ()
    {
        $task = Order::orderBy('created_at', 'desc')->paginate(10);
        $trip = Trip::paginate(10);

        return view('admin.dashboard',['tasks'=>$task,'trips'=>$trip] );

    }


}
