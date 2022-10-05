<?php

namespace App\Http\Controllers;

use App\Models\Kanban;
use Illuminate\Http\Request;

class KanbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kanban::create([
            'title' => request()->title,
            'status' => 1
            ]); 
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kanban  $kanban
     * @return \Illuminate\Http\Response
     */
    public function show(Kanban $kanban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kanban  $kanban
     * @return \Illuminate\Http\Response
     */
    public function edit(Kanban $kanban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kanban  $kanban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kanban $kanban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kanban  $kanban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kanban $kanban)
    {
        //
    }
}
