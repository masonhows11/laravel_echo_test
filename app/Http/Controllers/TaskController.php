<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    public function index(){

        return  view('tasks.tasks',['tasks' => Task::all()]);
    }

    public function create(){

        \App\Models\Task::create([
            'title' => request()->title,
            'body' => request()->description,
        ]);
    }
}
