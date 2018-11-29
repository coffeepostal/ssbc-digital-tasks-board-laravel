@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>

    <h2>All Tasks</h2>

    @if (count($tasks) > 0)
        <div class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-6">

        @foreach ($tasks as $task)
            <div class="cell">
                @switch($task->task_type)
                    @case(1)
                    {{-- <h3>Brew</h3> --}}
                    {{TaskBoard::taskBrew($task->brew_number, $task->tank_base, $task->description)}}
                    @break

                    @case(2)
                    {{-- <h3>CIP</h3> --}}
                    {{TaskBoard::taskDefault($task->tank_base, $task->description)}}
                    @break

                    @case(3)
                    {{-- <h3>Xfer</h3> --}}
                    {{TaskBoard::taskXfer($task->tank_base, $task->tank_alt, $task->description)}}
                    @break

                    @case(4)
                    {{-- <h3>Yeast</h3> --}}
                    {{TaskBoard::taskDefault($task->tank_base, $task->description)}}
                    @break

                    @case(5)
                    {{-- <h3>SG</h3> --}}
                    {{TaskBoard::taskDefault($task->tank_base, $task->description)}}
                    @break

                    @case(6)
                    {{-- <h3>Crash</h3> --}}
                    {{TaskBoard::taskDefault($task->tank_base, $task->description)}}
                    @break

                    @case(7)
                    {{-- <h3>Other</h3> --}}
                    {{TaskBoard::taskOther($task->description)}}
                    @break

                    @default
                    <h3>NOPE!</h3>
                @endswitch
                <p>Assigned to:
                @switch($task->user_assigned_id)
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
