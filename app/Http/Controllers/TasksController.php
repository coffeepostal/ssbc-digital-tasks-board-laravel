<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tasks = Task::all();    //  Return all tasks
        // return Task::where('user_creator', 'coffeepostal')->get();; //  Returns all tasks craeted by "coffeepostal"
        // $tasks = Task::orderBy('date', 'asc')->take(1)->get();  //  Returns only the first task
        // $tasks = Task::orderBy('date', 'asc')->paginate(12);    //  Paginate after 12 tasks, add {{$tasks->links()}} in Blade template where you want the pagination links

        $tasks = Task::orderBy('date', 'asc')->get();
        return view('tasks.index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'task_type' => 'required',
            'date' => 'required',
            'user_assigned' => 'required'
        ]);

        //  Create Task
        $task = new Task;
        $task->task_type = $request->input('task_type');
        $task->date = $request->input('date');
        $task->brew_number = $request->input('brew_number');
        $task->tank_base = $request->input('tank_base');
        $task->tank_alt = $request->input('tank_alt');
        $task->user_assigned = $request->input('user_assigned');
        $task->user_creator = auth()->user()->id;
        $task->description = $request->input('description');
        $task->delayable = $request->input('delayable');
        $task->completed = $request->input('completed');

        $task->save();

        return redirect('/tasks')->with('success', 'Task Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'task_type' => 'required',
            'date' => 'required',
            'user_assigned' => 'required'
        ]);

        //  Create Task
        $task = Task::find($id);
        $task->task_type = $request->input('task_type');
        $task->date = $request->input('date');
        $task->brew_number = $request->input('brew_number');
        $task->tank_base = $request->input('tank_base');
        $task->tank_alt = $request->input('tank_alt');
        $task->user_assigned = $request->input('user_assigned');
        $task->description = $request->input('description');
        $task->delayable = $request->input('delayable');
        $task->completed = $request->input('completed');

        $task->save();

        return redirect('/tasks')->with('success', 'Task Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks')->with('success', 'Task Removed');
    }
}
