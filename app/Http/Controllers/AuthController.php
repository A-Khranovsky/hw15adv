<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credential = $request->only('name', 'password');
        if (Auth::attempt($credential)) {
//            $advts = DB::table('advts')
//                ->join('users', 'advts.user_id', '=', 'users.id')
//                ->get();
            //return view('advts.index', ['advts' => $advts]);
            return redirect('/home');
        } else {
            return redirect('/');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
