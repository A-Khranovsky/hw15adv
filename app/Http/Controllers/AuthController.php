<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credential = $request->only('name', 'password');
        if(Auth::attempt($credential)){
            return redirect('/');
        } else {
            User::create([
                'name' => $request->input('name'),
                'email' => '',
                'password' => bcrypt($request->input('password')),
                'remember_token' => $request->input('_token'),
            ]);
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
