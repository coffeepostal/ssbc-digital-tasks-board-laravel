@extends('layouts.app')

@section('content')
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell small-12 large-6 large-offset-3">
                <h1>Dashboard</h1>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <p>You are logged in!</p>
                <a href="/tasks/create" class="button">Create Task</a>
                <h2>Your Tasks</h2>

                @if (count($tasks) > 0)

                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Task Type</th>
                            <th></th>
                            <th></th>
                        </tr>

                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{$task->date}}</td>
                                @switch($task->task_type)
                                    @case(1)
                                    <td>Brew</td>
                                    @break

                                    @case(2)
                                    <td>CIP</td>
                                    @break

                                    @case(3)
                                    <td>Xfer</td>
                                    @break

                                    @case(4)
                                    <td>Yeast</td>
                                    @break

                                    @case(5)
                                    <td>SG</td>
                                    @break

                                    @case(6)
                                    <td>Crash</td>
                                    @break

                                    @case(7)
                                    <td>Other</td>
                                    @break

                                    @default
                                    <td>NOPE!</td>
                                @endswitch
                                <td><a href="/tasks/{{$task->id}}" class="button">View</a></td>
                                <td><a href="/tasks/{{$task->id}}/edit" class="button">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['TasksController@destroy', $task->id], 'method' => 'POST']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'button alert'])}}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    </table>
                @else
                    <p>You have no tasks.</p>
                @endif

            </div>
        </div>
    </div>
@endsection
