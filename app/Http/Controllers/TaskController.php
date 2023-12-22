<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {   
        $search = $request->input('search', '');

        $tasks = Task::when($search, function ($query) use ($search) {
            return $query->where('title', 'like', '%' . $search . '%');
        })->paginate(5);
    
        return view('tasks.index', compact('tasks', 'search'))
            ->with('i', ($tasks->currentPage() - 1) * $tasks->perPage());
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

    public function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
        $task = tasks::where('title','=',$search)->get();
        }else{
        $task = tasks::all();    
        }
        $data = compact('task', 'search');
        return view('tasks.create');

        $tasks = Task::paginate(5);
        return view ('tasks.index',compact('tasks'))
        ->with('i', (request()->input('page',1) - 1) * 10);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'due_date' => 'required',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index')
        ->with('success','Tasks created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view ('tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view ('tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([

        ]);
        $task->update($request->all());
        return redirect()->route('tasks.index')
        ->with('success','Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')
        ->with('success','Task deleted successfully');
    }
}
