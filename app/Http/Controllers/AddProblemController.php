<?php

namespace App\Http\Controllers;

use App\Problems;
use App\Categores;
use Session;
use Illuminate\Support\Facades\Auth;
use \Request;
use App\Http\Requests\AddProblemRequest;
use phpDocumentor\Reflection\Types\Array_;


class AddProblemController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }

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
        //Sprawdzanie czy jestem zalogowany
        //return Auth::user();
        return view('add_problem')->with('category',$this->categoryfind());
    }

    /**
     * @param AddProblemRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addproblem(AddProblemRequest $request){

        Problems::create($request->all());
        Session::flash('problem_created', 'Twój wpis został dodany');
        return redirect('panel');
    }

    public function edit($id)
    {
        $problem = Problems::findOrFail($id);
        return view('edit')->with('problem', $problem)->with('category', $this->categoryfind());
    }

    public function update(AddProblemRequest $request, $id)
    {
        $problem = Problems::findOrFail($id);
        $problem->update($request->all());
        return redirect('research');
    }
}
