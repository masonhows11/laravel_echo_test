<?php

namespace App\Http\Controllers;

use App\Events\AddNewTaskEvent;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    public function index()
    {

        return view('tasks.tasks', ['tasks' => Task::all()]);
    }

    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        event(new AddNewTaskEvent($task));

        return redirect('/tasks');
    }
}
