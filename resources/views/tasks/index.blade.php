@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>
    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
            <div class="task">
                <h3>Assigned to: {{$task->user_assigned}}</h3>
                <small>Assigned on: {{$task->date}}</small>
                <a href="/tasks/{{$task->id}}" class="button">ID: {{$task->id}}</a>
            </div>
        @endforeach
    @else
        <p>No tasks found.</p>
    @endif
@endsection
