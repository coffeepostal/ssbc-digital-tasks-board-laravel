@extends('layouts.app')

@section('content')

    <div class="grid-container">
        <h1>Create Task</h1>
    </div>

    {!! Form::open(['action' => 'TasksController@store', 'method' => 'POST']) !!}

    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="small-12 medium-4 large-2 cell">
                {{Form::label('task_type', 'Task Type')}}
                {{Form::select('task_type', ['1' => 'Brew', '2' => 'CIP', '3' => 'Xfer', '4' => 'Yeast', '5' => 'SG', '6' => 'Crash', '7' => 'Other'], null, ['placeholder' => 'Pick a task type...'])}}
            </div>
            <div class="small-6 medium-4 large-2 cell">
                {{Form::label('date', 'Task Date')}}
                {{Form::date('date', \Carbon\Carbon::now(), ['data-toggle' => 'datepicker','placeholder' => 'YYYY-MM-DD'])}}
            </div>
            <div class="small-6 medium-4 large-2 cell">
                {{Form::label('brew_number', 'Brew Number')}}
                {{Form::text('brew_number', null, ['placeholder' => '####'])}}
            </div>
            <div class="small-6 medium-6 large-2 cell">
                {{Form::label('tank_base', 'Tank')}}
                {{Form::select('tank_base', ['Fermentors' => ['FV1' => 'FV1', 'FV2' => 'FV2', 'FV3' => 'FV3', 'FV4' => 'FV4', 'FVA' => 'FVA', 'FVB' => 'FVB'], 'Brite Tank' => ['BT1' => 'BT1', 'BT2' => 'BT2', 'BT3' => 'BT3', 'BT4' => 'BT4', 'BT5' => 'BT5', 'BT6' => 'BT6', 'BT7' => 'BT7', 'BT8' => 'BT8', 'BT9' => 'BT9', 'BT10' => 'BT10', 'BT11' => 'BT11', 'BT12' => 'BT12', 'BT13' => 'BT13', 'BT14' => 'BT14', 'BT15' => 'BT15', 'BT16' => 'BT16', 'BT17' => 'BT17', 'BT18' => 'BT18', 'BT19' => 'BT19'],], null, ['placeholder' => 'Pick a tank...'])}}
            </div>
            <div class="small-6 medium-6 large-2 cell">
                {{Form::label('tank_alt', 'Tank (Alt.)')}}
                {{Form::select('tank_alt',['Fermentors' => ['FV1' => 'FV1', 'FV2' => 'FV2', 'FV3' => 'FV3', 'FV4' => 'FV4', 'FVA' => 'FVA', 'FVB' => 'FVB'], 'Brite Tank' => ['BT1' => 'BT1', 'BT2' => 'BT2', 'BT3' => 'BT3', 'BT4' => 'BT4', 'BT5' => 'BT5', 'BT6' => 'BT6', 'BT7' => 'BT7', 'BT8' => 'BT8', 'BT9' => 'BT9', 'BT10' => 'BT10', 'BT11' => 'BT11', 'BT12' => 'BT12', 'BT13' => 'BT13', 'BT14' => 'BT14', 'BT15' => 'BT15', 'BT16' => 'BT16', 'BT17' => 'BT17', 'BT18' => 'BT18', 'BT19' => 'BT19'],], null, ['placeholder' => 'Pick a tank...'])}}
            </div>
            <div class="small-8 medium-8 large-2 cell">
                {{Form::label('user_assigned', 'Assigned Employee')}}
                {{Form::select('user_assigned', [1 => 'Adam Farnsworth', 2 => 'Shannon Vincent', 3 => 'Tor Flemming', 4 => 'Stacia Sasso'], null, ['placeholder' => 'Assign someone...'])}}
            </div>
            <div class="small-2 medium-2 large-1 cell">
                {{Form::label('delayable', 'Delayable')}}
                {{Form::checkbox('delayable', TRUE)}}
            </div>
            <div class="small-2 medium-2 large-1 cell">
                {{Form::label('complete', 'Complete')}}
                {{Form::checkbox('complete', TRUE)}}
            </div>
            <div class="small-12 large-10 cell">
                {{Form::label('description', 'Additional Text (Description)')}}
                {{Form::text('description', null, ['placeholder' => 'eg: brew style, count, task description, etc.'])}}
            </div>
            <div class="small-12 cell">
                {{Form::hidden('user_creator', 'coffeepostal')}}
                {{Form::submit('Create Task', ['class' => 'button expanded large'])}}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
