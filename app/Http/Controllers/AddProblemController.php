<?php

namespace App\Http\Controllers;

use App\Categores;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class AddProblemController extends Controller
{
    public function categoryfind(){
         $category = Categores::get();
         $category_list = json_decode($category);
         $array = array();
         foreach ($category_list as $cate){
             array_push($array, $cate->name);
          }
        return $array;
    }

    public function addproblem(){
        return view('add_problem')->with('category',$this->categoryfind());
    }
}
