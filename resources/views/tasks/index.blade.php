@extends('layouts.layout')

@section('content')

<div class="list-group tasks-list">

    @if($tasks->isEmpty())
    <h2>No tasks found.</h2>
    <a class="btn btn-primary" href="/model_view/public/tasks/new/" role="button">Create a Task</a>
    @else
        @foreach($tasks as $task)

                <a class="list-group-item {{$task->complete == 1 ? 'list-group-item-action' : 'list-group-item-warning'}}"
                   href="/model_view/public/tasks/{{$task->id}}">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$task->title}}</h5>
                        <small> {{$task->complete == 1 ? 'Complete' : 'Incomplete'}}</small>
                    </div>
                    <p class="mb-1">{{$task->description}}</p>

                </a>


        @endforeach
    @endif
</div>


    <div>
        <a class="btn btn-primary" href="/model_view/public/tasks/new/" role="button">New Task</a>
    </div>

@endsection

