@extends('tasks.master')
@section('title')
    tasks
@endsection
@section('content')
    <div class="mx-auto flex justify-center ">
        <h1 class="text-3xl font-bold mt-4">Task list</h1>
    </div>
    <div class="mx-auto w-full flex justify-center mt-5">
        <table>
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>body</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title  }}</td>
                    <td>{{ $task->body  }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
   @vite('resources/js/tasks.js')
@endsection
