<?php

namespace App\Http\Controllers;

use App\Problems;
use App\Categores;
use \Request;
use phpDocumentor\Reflection\Types\Array_;

class AddProblemController extends Controller
{
    public function categoryfind(){
         $category = Categores::get();
         $category_list = json_decode($category);
         $array = array();
         array_push($array, " ");
         foreach ($category_list as $cate){
             array_push($array, $cate->name);
          }
        return $array;
    }

    public function addproblemform(){
        return view('add_problem')->with('category',$this->categoryfind());
    }

    public function addproblem(){
        $input = Request::all();
        Problems::create($input);
        return redirect('panel');
    }
}
