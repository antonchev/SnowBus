<?php

namespace App\Http\Controllers\admin;


use App\Trip;
use Illuminate\Http\Request;
use App\Order;

use App\Http\Controllers\Controller;


#SELECT * FROM orders WHERE `created_at` > NOW() - INTERVAL 1 DAY
class TripController extends Controller
{
    //
    public  function index ()
    {
        $task = Order::all();
        $trip = Trip::all();
        return view('admin.trip',['tasks'=>$task,'trips'=>$trip] );
    }


    public  function store (Request $request)
    {
        $trip = new Trip();
        $trip->title = $request->get('title');
        $trip->date = $request->get('date');
        $trip->comment = ' ' . $request->get('other');
        $trip->published = $request->get('pub');
        $trip->save();
        return  redirect()->route('admin.index');
    }

    public function edit($id)
    {

        $Mytrip = Trip::find($id);
        // show the edit form and pass the nerd
        return view('admin.components.trip_edit',['Mytrip'=>$Mytrip]);
    }

    public function update(Request $request, $id)
    {

        $Mytrip = Trip::find($id);
        $Mytrip->title = $request->get('title');
        $Mytrip->date = $request->get('date');
        $Mytrip->comment = ' ' . $request->get('other');
        $Mytrip->published = $request->get('pub');
        $Mytrip->save();
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {

        Trip::find($id)->delete();
        // show the edit form and pass the nerd
        return redirect()->route('admin.index');
    }

}

