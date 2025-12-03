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
        $user = Auth::user();
        $room = $user->rooms->first();
        $roomId = $room->id ?? null;

        //var_dump($user->rooms->contains($user->id,$roomId));

        return view('tasks.create',['roomId' => $roomId]);
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
