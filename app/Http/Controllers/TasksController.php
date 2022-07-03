<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Folder;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function task($id) {
        return view('task', compact('id'));
    }

    public function create(Request $request){
        $task = new Task();
        $task->title     = $request->title;
        $task->limit     = $request->limit;
        $task->state     = $request->state;
        $task->folder_id = $request->folder_id;
        $task->save();
        return redirect(route('tasks.show', ['id' => $task->folder_id]));
    }

    public function show($id){
        $folders = User::find(Auth::id())->folders;
        $tasks   = Folder::find($id)->tasks;
        return view('index', compact('folders', 'tasks', 'id'));
    }

    public function edit($id){
        $task=Task::find($id);
        return view('edit', compact('task'));
    }

    public function update(Request $request){
        $task = Task::find($request->id);
        $task->title=$request->title;
        $task->state=$request->state;
        $task->limit=$request->limit;
        $task->save();
        return redirect(route('tasks.show', ['id' => $task->folder_id]));
    }

}
