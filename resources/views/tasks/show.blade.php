@extends('layouts.app')

@section('content')

    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell">

                @switch($task->task_type)
                    @case(1)
                    <h1>Brew</h1>
                    @break

                    @case(2)
                    <h1>CIP</h1>
                    @break

                    @case(3)
                    <h1>Xfer</h1>
                    @break

                    @case(4)
                    <h1>Yeast</h1>
                    @break

                    @case(5)
                    <h1>SG</h1>
                    @break

                    @case(6)
                    <h1>Crash</h1>
                    @break

                    @case(7)
                    <h1>Other</h1>
                    @break

                    @default
                    <h1>NOPE!</h1>
                @endswitch

                <div class="task">
                    <ul>
                        <li>id: {{ $task->id }}</li>
                        <li>created_at: {{ $task->created_at }}</li>
                        <li>updated_at: {{ $task->updated_at }}</li>
                        <li>date: {{ $task->date }}</li>
                        <li>user_id: {{ $task->user_id }}</li>
                        <li>user_assigned: {{ $task->user_assigned_id }}</li>
                        <li>task_type: {{ $task->task_type }}</li>
                        <li>brew_number: {{ $task->brew_number }}</li>
                        <li>tank_base: {{ $task->tank_base }}</li>
                        <li>tank_alt: {{ $task->tank_alt }}</li>
                        <li>description: {{ $task->description }}</li>
                        <li>delayable: {{ $task->delayable }}</li>
                        <li>completed: {{ $task->completed }}</li>
                        <li></li>
                        <li>user_name: {{ $task->user->name }}</li>
                    </ul>
                </div>
                <hr>
                @if (!Auth::guest())
                    @if (Auth::user()->user_type <= $task->user_type_access)

                        <a href="/tasks/{{ $task->id }}/edit" class="button">Edit</a>

                        {!! Form::open(['action' => ['TasksController@destroy', $task->id], 'method' => 'POST']) !!}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', ['class' => 'button alert']) }}
                        {!! Form::close() !!}

                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection
