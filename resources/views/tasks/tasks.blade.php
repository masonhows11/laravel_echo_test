@extends('tasks.master')
@section('title')
    tasks
@endsection
@section('content')
    <div class="mx-auto flex justify-center ">
        <h1 class="text-3xl font-bold mt-4">Task list</h1>
    </div>
    <div class="mx-auto w-full flex justify-center mt-5 ">
        <table class="p-4 table-auto rounded rounded-lg border-separate border-spacing-2 border-collapse border  border-gray-400">
            <thead>
            <tr class="font-sans font-serif">
                <th colspan="2" class="text-center">id</th>
                <th colspan="2" class="text-center">title</th>
                <th colspan="2" class="text-center">body</th>
                <th colspan="1" class="text-center">edit</th>
                <th colspan="1" class="text-center">delete</th>
            </tr>
            </thead>
            <tbody class="">
            @foreach($tasks as $task)
                <tr class="p-2 my-2 text-center">
                    <td class="p-2" colspan="2">{{ $task->id }}</td>
                    <td class="p-2" colspan="2">{{ $task->title  }}</td>
                    <td class="p-2" colspan="2">{{ $task->body  }}</td>
                    <td class="p-2"><a href="#">edit</a></td>
                    <td class="p-2"><a href="#">delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mx-auto flex justify-center mt-4">
        <a class="text-2xl py-1 px-3 border-gray-300 border border-lg rounded-lg" href="{{ route('home') }}">Home</a>
    </div>
@endsection
@section('scripts')
    @vite('resources/js/tasks.js')
@endsection
