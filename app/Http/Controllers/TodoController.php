<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //
    public function IndexTodo(){
    	$todo= Todo::all();
    	return view('index')->with('todos', $todo);

    }

    public function ShowTodo($id){
    	$task= Todo::find($id);
    	return view('show')->with('tasks', $task);

    }

    public function CreateTodo(){
    	return view('create');
    }

    public function StoreTodo(Request $request){

    	$data= $request->validate([
    		'name'=>'required|min:5',
    		'description'=>'required',
    	]);


    	$todo= new Todo;
    	$todo->name= $data['name'];
    	$todo->description= $data['description'];
    	$todo->completed= false;
    	$todo->save();

    	return redirect('/getTodo');
    }
}
