<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('task', compact('tasks'));
    }

    public function create(Request $request){

        // dd($request->all());
        $validator = validator($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);
        
        if($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = \Auth::user();
        // dd($user);
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = 'pending';
        $task->user_id = $user->id;
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');

    }

    public function edit($id){
        $task = Task::find($id);
        return view('editTask', compact('task'));
    }

    public function destroy($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
