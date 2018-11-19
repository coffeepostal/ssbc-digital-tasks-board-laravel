<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function task_board()
    {
        return view('pages.task-board');
    }

    public function brew_details()
    {
        return view('pages.brew-details');
    }
}
