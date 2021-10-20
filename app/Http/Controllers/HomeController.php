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
            ->select('advts.id', 'title', 'description', 'advts.created_at', 'users.username')
            ->join('users', 'advts.user_id', '=', 'users.id')
            ->orderBy('advts.id', 'desc')
            ->paginate(5);
        return view('index', ['advts' => $advts]);
    }

    public function edit()
    {
//        $advt['button_name'] = 'Create';
//        return view('edit.form', ['advt' => $advt]);
    }

    public function home()
    {
        $advts = Advt::where('user_id', Auth::id())->orderBy('id', 'desc')->get();

        return view('home.index', ['advts' => $advts]);
    }

    public function form()
    {
        $advt['action'] = 'Create';
        return view('edit.form', ['advt' => $advt]);

    }

    public function create(Request $request)
    {
        $advt = Advt::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => Auth::id()
        ]);
        return redirect('/' . $advt->id);
    }

    public function advt($id)
    {
        $advt = DB::table('advts')
            ->select('advts.id', 'title', 'description', 'advts.created_at', 'users.username')
            ->join('users', 'advts.user_id', '=', 'users.id')
            ->where ([['advts.id', '=', $id],['users.id','=', Auth::id()]])->get();
        //$advt = Advt::where('id', $id)->get();
        return view('edit.index', ['advts'=>$advt]);
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
