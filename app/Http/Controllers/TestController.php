<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index($name)
    {
        return view('test', ['name' => $name]);
    }
}