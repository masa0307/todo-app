<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Folder;

class TasksController extends Controller
{
    public function task($id) {
        return view('task')->with('id', $id);
    }

    public function create(Request $request){
        $task = new Task();
        $task->title     = $request->title;
        $task->limit     = $request->limit;
        $task->state     = $request->state;
        $task->folder_id = $request->folder_id;
        $task->save();
        return redirect(route('tasks.show', ['id' => $task->folder_id,]));
    }

    public function show($id){
        $folders=Folder::get();
        $tasks=Task::where('folder_id',$id)->get();
        return view('index')->with('folders', $folders)->with('id', $id)->with('tasks', $tasks);
    }

}
