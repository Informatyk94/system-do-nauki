<?php

namespace App\Http\Controllers;

use App\Categores;
use App\Problems;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class ResearchController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }
    //displaying everything
    public function research(){
        $problems = Problems::get();
        // loop replacing category id with names
        foreach($problems as $problem){
            $this->categoryfind($problem);
        }
        return view('research')->with('problems', $problems);
    }
    //single display
    public function show($id){
        $problem = Problems::findOrFail($id);
        // change the category id to the category name
        $this->categoryfind($problem);
        return view('showproblem')->with('problem', $problem);
    }

//function looking for id category and changing its name
public function categoryfind($object){
    $category = Categores::findOrFail($object->category);
    $object->category = $category->name;
    return $object;
}
}
