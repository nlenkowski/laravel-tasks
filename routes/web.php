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

// Index
Route::get('/', function () {

    $name = 'Nathan';
    $age = 39;

    // Eloquent method
    $tasksCount = Task::count();

    // Query builder method
    //$tasksCount = DB::table('tasks')->count();

    return view('welcome', compact('name', 'age', 'tasksCount'));

    // Alternate methods of returning data
    // return view('welcome', [ 'name' => $name ]);
    // return view('welcome')->with('name', $name);

});

// Tasks index
Route::get('/tasks', 'TasksController@index');

// Show single task
Route::get('/tasks/{task}', 'TasksController@show');
