<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credential = $request->only('name','password');
        if(Auth::attempt($credential))
        {
            return redirect('/');
        }
        else {
            return redirect('advts');
        }
    }
}
