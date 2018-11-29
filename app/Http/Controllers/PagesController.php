<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Task;
use App\Classes\TaskBoard;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function task_board()
    {
        // $now = Carbon::now();
        // $tasks = Task::orderBy('date', 'asc')->get()->groupBy(function($date) {
        //         return Carbon::parse($date->created_at)->format('W');
        //     });
        $tasks = Task::orderBy('date', 'asc')->get();
        return view('pages.task-board')->with('tasks', $tasks);
        // return view('pages.task-board');
    }

    public function brew_details()
    {
        return view('pages.brew-details');
    }
}
