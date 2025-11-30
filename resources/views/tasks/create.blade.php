<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creat Task</title>
</head>
<body>
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
</body>
</html>
