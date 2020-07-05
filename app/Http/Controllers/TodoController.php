<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
public function home(){
    $todos = Todo::all();
//    dd($todos);
    return view('home',['todos' => $todos]);
}

public function store(Request $request){
//    dd($request);
//    dd($request->post('title'));
    $validateData = $request->validate([
        'title'=> 'required|max:124'
    ]);
    Todo::create($validateData);
//    $todo = new Todo;
//    $todo->title = $request->title;
//    $todo->save();
    return redirect(route('home'));
}

public function update(){
    return view('update');
}
}
