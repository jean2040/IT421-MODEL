@extends('layouts.layout')

@section('content')

<div class="list-group tasks-list">
    @foreach($tasks as $task)

            <a class="list-group-item list-group-item-action"
               href="/model_view/public/tasks/{{$task->id}}">
                {{$task->body}}
            </a>


    @endforeach
</div>

@endsection

