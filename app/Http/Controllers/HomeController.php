<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $advts = DB::table('advts')
            ->select('advts.id', 'title', 'description', 'advts.created_at', 'users.name')
            ->join('users', 'advts.user_id', '=', 'users.id')
            ->orderBy('advts.id', 'desc')
            ->get();
        return view('index', ['advts' => $advts]);
    }

    public function edit()
    {
//        $advt['button_name'] = 'Create';
//        return view('edit.form', ['advt' => $advt]);
    }

//    public function createAdvt(Request $request)
//    {
//        Advt::create([
//            'title' => $request->get('title'),
//            'description' => $request->get('description'),
//            'user_id' => Auth::id()
//        ]);
//        return redirect('/');
//    }

}
