<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        {!! Vite::content('resources/css/app.css') !!}
    </style>
    <title>Tasks</title>
</head>
<body>
<div>
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

<script>
    {!! Vite::content('resources/js/app.js') !!}
</script>
<script type="text/javascript">
    window.Echo.channel('taskCreated')
        .listen('AddNewTaskEvent',e =>{
            console.log('new task added successfully');
            console.log(e)
        })

</script>
</body>
</html>
