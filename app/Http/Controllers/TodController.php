<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guns;
class TodController extends Controller
{
    public function index(){
        $guns = Guns::all();
        return view('todosss.index',compact('guns'));
    }
    public function create(){
        return view('todosss.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            "name" => "required|min:6",
            "details" => "required"
        ]);
        $todo = new Guns();
        $todo->name = $request->name;
        $todo->details = $request->details;
        $todo->complete = false;
        $todo->save();
        return redirect('/todo');
    }
    public function show($id){

        $guns = Guns::find($id);
        return view('todosss.show',compact('guns'));
    }
    public function edit($id){
        $gunsEdit = Guns::find($id);
        return view('todosss.edit',compact('gunsEdit'));
    }
    public function update(Request $request,$id){
        $guns = Guns::find($id);
        $guns->name = $request->name;
        $guns->details = $request->details;
        $guns->complete = false;
        $guns->save();
        return redirect('/todo');
    }
    public function destroy($id){
        $guns = Guns::find($id);
        $guns->delete();
        return redirect('/todo');
    }
}
