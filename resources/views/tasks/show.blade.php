@extends('layouts.layout')

@section('content')

    <h1>{{$task->body}}</h1>

     <form action="{{$task->id}}/edit" method="post" class="col-sm-8">

        <div class="form-group">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="taskTitle">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="body" value="{{$task->body}}">
        </div>
        <div class="form-group">
            <label for="taskStatus">Task Status</label>

            {{Form::select('completed',['Incomplete','Complete'],$task->complete, ['class'=>'form-control', 'id'=>'taskStatus'])}}
        </div>
        <button type="submit" class="btn btn-primary">Save</button>

    </form>
    <p>
    <form action="{{$task->id}}/delete" method="post" class="col-sm-8">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-primary">Delete</button>

    </form>
    Created at: {{date("F d, Y h:i:s", strtotime($task->created_at))}}</br>
    Updated at: {{$task->updated_at}}</br>
    </p>


@endsection
