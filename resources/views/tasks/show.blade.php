@extends('layouts.layout')

@section('content')

    <div class="">

    <h1>{{$task->body}}</h1>

    <p>
        <input class="form-control" type="text" placeholder="Created: {{ $task->created_at->diffForHumans()}}" readonly>
        <br>
        <input type="text" class="form-control" placeholder="Updated {{$task->updated_at->diffForHumans()}}" readonly>
        <br>
    </p>

     <form action="{{$task->id}}/edit" method="post" class="col-sm-8">

        <div class="form-group">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <label for="taskTitle">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="body" value="{{$task->body}}">
        </div>
        <div class="form-group">
            <label for="taskStatus">Task Status</label>

            <select class="form-control" id="taskStatus" name="completed">
                <option value="0" {{ $task->complete == 0 ? 'selected' : '' }}>Incomplete</option>
                <option value="1" {{ $task->complete == 1 ? 'selected' : ''}}>Complete</option>
            </select>
            <!--
            {{Form::select('completed2',['Incomplete','Complete'],$task->complete, ['class'=>'form-control', 'id'=>'taskStatus'])}}
        -->
        </div>
        <button type="submit" class="btn btn-primary btn-block">Save</button>

    </form>
    <br>

    <form action="{{$task->id}}/delete" method="post" class="col-sm-8">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger btn-block">Delete</button>

    </form>

    </div>

@endsection
