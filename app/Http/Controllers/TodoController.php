<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // return $request->input('name');
        $res=new todo;
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','Data Submitted');
        return redirect('todo_show');
    }

    public function show(todo $todo)
    {
        // return view('todo'); //another way to execute a (.blade) file
        return view('todo')->with('todoArr',Todo::all()); //to access data using array
    }

    public function edit(todo $todo,$id)
    {
        return view('edit')->with('todoArr',Todo::find($id)); //with is used to sent data
    }
    
    public function update(Request $request, todo $todo)
    {
        // return redirect('todo_show');
        // print_r($request->id);
        // print_r($request->input());
        $res=todo::find($request->id);
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','Data Updated');
        return redirect('todo_show');
    }

    public function destroy(todo $todo,$id)
    {
        Todo::destroy(array('id',$id));
        return redirect('todo_show');
    }
}
