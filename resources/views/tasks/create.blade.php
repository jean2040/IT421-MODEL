@extends('layouts.layout')

@section('content')

    <h1>New Task</h1>

    <form action="store" method="post" class="col-sm-8">

        <div class="form-group">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            <label for="taskTitle">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="body">
        </div>
        <div class="form-group">
            <label for="taskStatus">Task Status</label>

            {{Form::select('completed',['Incomplete','Complete'],0, ['class'=>'form-control', 'id'=>'taskStatus'])}}
        </div>
        <button type="submit" class="btn btn-primary">Save</button>

    </form>



@endsection
