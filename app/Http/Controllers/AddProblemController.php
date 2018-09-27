<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProblemController extends Controller
{
    public function addproblem(){
        return view('add_problem');
    }
}
