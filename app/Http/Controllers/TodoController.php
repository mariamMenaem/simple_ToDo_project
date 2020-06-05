<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::orderBy('cpmleated')->get();
        return view('todos.index')->with([
            'todos' => $todos
        ]);

    }

    public function create(){
        return view('todos.create');
    }

    public function edit(Todo $todo){
       
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request , Todo $todo){
      
       $todo->update([
           'title'=> $request->title
       ]);
        return redirect(route('todos.index'))->with('message', 'To-Do updated successfully');
    }


    public function store(Request $request){
        $request->validate([
            'title'=>'required|max:255'
        ]);
        Todo::create($request->all());
        return redirect()->back()->with('message','ToDo Created Succesfully');
    }

    public function complete(Todo $todo){
      
        $todo->update([
            'cpmleated'=> true
        ]);
         return redirect()->back()->with('message', 'Task Marked as Copmleted');
     }

     public function incomplete(Todo $todo){
      
        $todo->update([
            'cpmleated'=> false
        ]);
         return redirect()->back()->with('message', 'Task Marked as inCopmleted');
     }

     public function delete(Todo $todo){
      
        $todo->delete();
        return redirect()->back()->with('message', 'Task deleted');
     }




}
