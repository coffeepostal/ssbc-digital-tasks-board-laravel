@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>

    @if (count($tasks) > 0)
        <div class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-6">

        @foreach ($tasks as $task)
            <div class="cell">
                <h3>Assigned to: {{$task->user_assigned}}</h3>
                <small>Assigned on: {{$task->date}}</small>
                <a href="/tasks/{{$task->id}}" class="button">ID: {{$task->id}}</a>
            </div>
        @endforeach

        </div>
    @else
        <p>No tasks found.</p>
    @endif

@endsection
