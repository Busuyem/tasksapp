<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Getting all tasks and paginate in five data

        $tasks = Task::orderBy('created_at', 'DESC')->paginate(5);

        //passing all tasks to the home view which is the user's dashboard

        return view('crud.list', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //displaying form to create task
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating request data

            $data = $this->validate($request, [

                'task' => 'required'
        ]);

            //Storing new task

            Task::create($data);

            return redirect()->route('task.index')->with('store', 'Your task has been saved successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //Displaying the edit form

        return view('crud.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //Validating task
        $data = $this->validate($request, [

            'task' => 'required'
        ]);

        //Updating the validated task

        $task->update($data);

        return redirect()->route('task.index')->with('update', 'Your task has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //Deleting tasks

        $task->delete();

        return redirect()->route('task.index')->with('destroy', 'Your task has been deleted successfully.');
    }
}
