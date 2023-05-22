<?php

namespace App\Http\Controllers\ToDo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TD\todolist;

class ListControler extends Controller
{
    public function index()
    {
        $todoList = todolist::all();
        return view('TD.index', compact('todoList'));
        // return view('TD.index');
    }
}
