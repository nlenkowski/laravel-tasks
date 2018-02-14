<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Get task model
use App\Task;

Route::get('/', function () {
    return view('welcome');
// Show all tasks
Route::get('/tasks', function () {

    $tasks = App\Task::incomplete();
    //$tasks = DB::table('tasks')->latest()->get();

    return view('tasks.index', compact('tasks'));
});

// Show single task
Route::get('/tasks/{task}', function ($id) {

    $task = App\Task::find($id);
    //$task = DB::table('tasks')->find($id);

    return view('tasks.show', compact('task'));
});
