@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-sm-6">

    <h1>{{$task->title}}</h1>



     <form action="{{$task->id}}/edit" method="post">

         <input class="form-control" type="text" placeholder="Task Created: {{ $task->created_at->diffForHumans()}}" readonly>
         <br>
         <input type="text" class="form-control" placeholder="Last Updated {{$task->updated_at->diffForHumans()}}" readonly>
         <br>

        <div class="form-group">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="taskTitle">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="title" value="{{$task->title}}">
        </div>

         <textarea class="form-control" id="body" name="description" rows="3"></textarea>

        <div class="form-group">
            <label for="taskStatus">Task Status</label>

            <select class="form-control" id="taskStatus" name="completed">
                <option value="0" {{ $task->complete == 0 ? 'selected' : '' }}>Incomplete</option>
                <option value="1" {{ $task->complete == 1 ? 'selected' : ''}}>Complete</option>
            </select>

        </div>
        <button type="submit" class="btn btn-primary btn-block">Save</button>

    </form>
    <br>

    <form action="{{$task->id}}/delete" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger btn-block">Delete</button>

    </form>
    </div>

    <br>
    <br>

    <div class="comments col-sm-6">
        <form action="{{$task->id}}/comments" method="post" >
            {{ csrf_field() }}

            <div class="form-group">
                <textarea name="body" placeholder="Your comment" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>

        <ul class="list-group">
            @foreach($task->comments as $comment)
                <li class="list-group-item">
                    {{$comment->body}}<br>
                    <small>
                        Created: {{$comment->created_at->diffForHumans()}}
                    </small>
                </li>

            @endforeach
        </ul>
    </div>
</div>
@endsection
