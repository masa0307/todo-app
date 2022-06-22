<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;


class FoldersController extends Controller
{
    public function index(){
        $folders=Folder::get();
        return view('index')->with('folders', $folders)->with('id', 1);
    }

    public function folder() {
        return view('folder');
    }

    public function create(Request $request){
        $folder = new Folder();
        $folder->name = $request->name;
        $folder->save();
        return redirect()->route('index');
    }

    public function show($id){
        $folders=Folder::get();
        return view('index')->with('folders', $folders)->with('id', $id);
    }
}
