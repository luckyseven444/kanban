<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kanban;

class TodoController extends Controller
{
    public function todoToInprogress(Kanban $kanban){
       $kanban->status = 2;
       $kanban->save();
       return redirect()->route('home');
    }

    public function todoToDone(Kanban $kanban){
        $kanban->status = 3;
        $kanban->save();
        return redirect()->route('home');
     }
}
