<!doctype html>
<html>
<head>


    <title>IT 421</title>

</head>
<body>

<ul>
    @foreach($tasks as $task)
        <li>
            <a href="/model_view/public/tasks/{{$task->id}}">
                {{$task->body}}
            </a>
        </li>

    @endforeach
</ul>
</body>
</html>
