<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function  __construct()
    {
        //do sprawdzenia czy przejdzie do głównej strony 
        $this->middleware('auth', ['only' => ['panel','addproblem']]);
    }
    public function panel(){
        return view('panel');
    }

    public function addproblem(){
        return view('add_problem');
    }

    public function home(){
        return view('home');
    }
}
