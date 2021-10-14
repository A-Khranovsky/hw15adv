<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advt;
use Illuminate\Support\Facades\DB;

class AdvtController extends Controller
{
    public function index()
    {
        $advts = DB::table('advts')
            ->select('advts.id', 'title', 'description', 'advts.created_at', 'users.name')
            ->join('users', 'advts.user_id', '=', 'users.id')
            ->orderBy('advts.id', 'desc')
            ->get();

        return view('advts.index', ['advts' => $advts]);
    }

    public function form()
    {
        $advts = DB::table('advts')
            ->join('users', 'advts.user_id', '=', 'users.id')
            ->get();

        return view('advts.form', ['advts' => $advts]);

    }
}
