<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index() {
        return view('tasks.index', ['tasks' => task::orderBy('created_at')->get()]);
    }
    public function create() {
        return view('tasks.create');
    }
    public function store(Request $request) {
        $task = new task();

        $task->fill($request->all());
        $task->save();
        return redirect()->route('tasks.index');
    }
 
    public function edit(task $task){
        return view('tasks.edit', ['task' => $task]);
    }
 
    public function update(Request $request, task $task){
        $task->fill($request->all());
        $task->save();
        return redirect()->route('tasks.index');
    }
 
     public function destroy(task $task){
         $task->delete();
         return redirect()->route('tasks.index');
     }
}