<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home(){
        $title = "Todo | Home";
        return view('welcome', ['name' => 'Aro website','title' => $title]);
    }

    public function about(){
        return view('about', ['name' => 'About us','title' => 'Todo | About']);
    }
}
