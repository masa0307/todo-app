<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthRequest $request){
        $validated = $request->validated();
        if(Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->route('index');
        }

        return back()->withErrors([
            'error' => '登録されている情報と一致しませんでした',
        ])->onlyInput('email');

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/menu');
    }
}
