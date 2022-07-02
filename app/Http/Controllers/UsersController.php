<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersController extends Controller
{
    public function register(){
        return view('register');
    }

    public function create(UserRequest $request){
        $user = new User();
        $user->name                  = $request->name;
        $user->email                 = $request->email;
        $user->password              = Hash::make($request->password);
        $user->password_confirmation = Hash::make($request->password_confirmation);
        $user->save();
        return redirect(route('index'));
    }
}
