<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advt;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $advts = DB::table('advts')
            ->join('users', 'advts.user_id', '=', 'users.id')
            ->get();

        return view('index', ['advts' => $advts]);
    }

}
