@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>

    @if (count($tasks) > 0)
        <div class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-6">

        @foreach ($tasks as $task)
            <div class="cell">
                @switch($task->task_type)
                    @case(1)
                    <h2>Brew</h2>
                    @break

                    @case(2)
                    <h2>CIP</h2>
                    @break

                    @case(3)
                    <h2>Xfer</h2>
                    @break

                    @case(4)
                    <h2>Yeast</h2>
                    @break

                    @case(5)
                    <h2>SG</h2>
                    @break

                    @case(6)
                    <h2>Crash</h2>
                    @break

                    @case(7)
                    <h2>Other</h2>
                    @break

                    @default
                    <h2>NOPE!</h2>
                @endswitch
                <p>Assigned to:
                @switch($task->user_assigned)
                    @case(1)
                    Adam Farnsworth</p>
                    @break

                    @case(2)
                    Shannon Vincent</p>
                    @break

                    @case(3)
                    Tor Flemming</p>
                    @break

                    @case(4)
                    Stacia Sasso</p>
                    @break

                    @default
                    NO ONE!</p>
                @endswitch
                <p>Assigned on: {{$task->date}}</p>
                <a href="/tasks/{{$task->id}}" class="button small">View: {{$task->id}}</a>
            </div>
        @endforeach

        </div>
    @else
        <p>No tasks found.</p>
    @endif

@endsection
