<?php

namespace App\Http\Controllers;
use App\Models\Kanban;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $todos = Kanban::where('status', 1)->get();
        $todoToInprogress = Kanban::where('status', 2)->get();
        $todoToDone = Kanban::where('status', 3)->get();
        return view('master', compact('todos', 'todoToInprogress', 'todoToDone'));
    }
}
