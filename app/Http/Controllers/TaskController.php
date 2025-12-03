<?php

namespace App\Http\Controllers;

use App\Events\TaskCreated;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        event(new TaskCreated($task,Auth::user()));

        return redirect()->back();
        //return redirect('/tasks');
    }
}
