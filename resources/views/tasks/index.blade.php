@extends('layouts.layout')

@section('content')

<div class="list-group tasks-list">
    @foreach($tasks as $task)

            <a class="list-group-item list-group-item-action"
               href="/model_view/public/tasks/{{$task->id}}">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$task->body}}</h5>
                    <small>{{$task->complete}}</small>
                </div>

            </a>


    @endforeach
</div>


    <div>
        <a class="btn btn-primary" href="/model_view/public/tasks/new/" role="button">New Task</a>
    </div>

@endsection

