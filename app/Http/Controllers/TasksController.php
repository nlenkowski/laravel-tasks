<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{

    // Index
    public function index() {

        //$tasks = DB::table('tasks')->latest()->get();
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Use route model binding to pass in the task model instance instead of an id
    public function show(Task $task) {

        // Query no longer necessary due to route model binding
        //$task = DB::table('tasks')->find($id);
        //$task = Task::find($id);

        return view('tasks.show', compact('task'));
    }
}
