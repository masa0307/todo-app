<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\Task;

class FoldersController extends Controller
{
    public function index(){
        $folders=Folder::all();
        $tasks=Task::all();
        $id =1;
        return view('index', compact('folders', 'tasks', 'id'));
    }

    public function folder() {
        return view('folder');
    }

    public function create(Request $request){
        $folder = new Folder();
        $folder->name = $request->name;
        $folder->save();
        return redirect(route('tasks.show', ['id' => $folder->id]));
    }
}
