<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function list(){
        return view('list');
    }
}
