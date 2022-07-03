<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FoldersController extends Controller
{
    public function index(){
        $folders = User::find(Auth::id())->folders;
        $id = $folders->first()->id ?? 1;
        if(Folder::find($id)!==null){
            $tasks = Folder::find($id)->tasks;
        }else{
            $tasks = [];
        }
        return view('index', compact('folders', 'tasks', 'id'));
    }

    public function folder() {
        return view('folder');
    }

    public function create(Request $request){
        $folder = new Folder();
        $folder->name = $request->name;
        $folder->user_id = Auth::id();
        $folder->save();
        return redirect(route('tasks.show', ['id' => $folder->id]));
    }
}
