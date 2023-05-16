<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\task;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Todo::all(); //get all table data from Todo class in model file

        return view('todo/index',[
            'title' => 'To-Do',
            'tasks' => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo/create',[
            'title' => 'Crate Task'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Todo::create([
            'task' => $request->TodoTask   // Grab name value from form and insert data to task table in Todo class model
        ]);
        return redirect()->route('alltasks');  
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        $task = Todo::find($todo)->first();

        // dd($task);

        return view('todo/edit',[
            'title' => 'Edit Task',
            'task' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $task = Todo::find($todo)->first();
        $todo->task = $request->editedtask;
        $todo->save();

        return redirect()->route('alltasks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $task = Todo::find($todo)->first();
        $task->delete();
        
        return redirect()->route('alltasks');
    }
}
