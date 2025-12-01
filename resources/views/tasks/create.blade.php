@extends('tasks.master')
@section('title')
    create
@endsection
@section('content')
    <div>
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div>
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" value=""><br>
            </div>

            <div>
                <label for="body">Body:</label><br>
                <textarea id="body" name="body" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

@section('scripts')

@endsection

