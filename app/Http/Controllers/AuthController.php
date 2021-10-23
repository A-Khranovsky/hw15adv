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
        $request->validate([
            'username'=>['required'],
            'password'=>['required']
        ]);
//        $credential = $request->only('username', 'password');
//        if(Auth::attempt($credential)){
//            return redirect('/');
//        } else {
//            $user = User::create([
//                'username' => $request->input('username'),
//                'email' => '',
//                'password' => bcrypt($request->input('password')),
//                'remember_token' => $request->input('_token'),
//            ]);
//            Auth::login($user);
//            return redirect('/');
//        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
