<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdvtController extends Controller
{
    public function index()
    {
        $advts = Advt::where('user_id', Auth::id())->orderBy('id', 'desc')->get();

        return view('advts.index', ['advts' => $advts]);
    }

    public function form()
    {
        $advt['action'] = 'Create';
        return view('advts.form', ['advt' => $advt]);

    }

    public function create(Request $request)
    {
        Advt::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => Auth::id()
        ]);
        return redirect('/advts');
    }
}
