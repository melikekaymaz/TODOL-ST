<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodoController extends Controller
{
    
    public function index()
    {
        $notes=Post::all();
        return view('index',compact('notes'));
        
    }

    public function form()
    {
        return view('form');
        
    }
    
    public function create()
    {
        $datas =Todo::all();

        return view('create',compact('datas'));
    
    }

    public function store(Request $request)
    {
        $todo=new Todo();
        $todo->task=$request->task;
        $todo->save();
        return redirect('/todos/create');
        
    
       
    }


    public function note(Request $request){

        $note=$request->all();
        Post::form($note);
        return redirect('/');
    }

    


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
      $data=Todo::find($id);
      $data->delete();
      return redirect('/todos/create');
        


    }
}
