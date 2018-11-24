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
            </div>
        </div>
    </div>
@endsection
