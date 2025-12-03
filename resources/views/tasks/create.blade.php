@extends('tasks.master')
@section('title')
    create
@endsection
@section('content')
    <div class="mx-auto flex justify-center">
        <h1 class="text-3xl font-bold mt-4">New Task</h1>
    </div>
    <input type="hidden" id="room" value="{{ $roomId }}">
    <div class="w-full mx-auto flex justify-center">
        <form class="w-96" action="{{ route('store') }}" method="post">
            @csrf
            <div>
                <label for="title">Title:</label><br>
                <input class="border rounded-lg w-full" type="text" id="title" onkeydown="typingWisper(event)"
                    name="title" value=""><br>
            </div>

            <div>
                <label for="body">Body:</label><br>
                <textarea class="border rounded-lg w-full" id="body" name="body" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input class="border rounded-lg p-3" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    {{-- <script>
        function typingWisper(event) {
            console.log(event.target.value);

        }
    </script> --}}
@endsection
