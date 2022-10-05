<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\TodoController;
use App\Models\Kanban;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('kanbans', KanbanController::class);
Route::post('todo-to-inprogress/{kanban}', [TodoController::class, 'todoToInprogress'])->name('todoToInprogress');
Route::post('todo-to-done/{kanban}', [TodoController::class, 'todoToDone'])->name('todoToDone');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
