<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advt;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $advts = Advt::orderBy('id', 'desc')->paginate(5);
        return view('index', ['advts' => $advts]);
    }

    public function edit()
    {
        $request = request();

        $this->validate($request, [
            'title' => ['required'],
            'description' => ['required']
        ]);

        $id = $request->route()->parameter('id');
        $advt['advt'] = Advt::find($id);
        if (isset($advt['advt']) && $advt['advt']->user_id !== Auth::id()) {
            return redirect()->route('home');
        }
        $advt['advt']->update([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);
        return redirect('/' . $id);
    }

    public function home()
    {
        $advts = Advt::where('user_id', Auth::id())->orderBy('id', 'desc')->get();

        return view('home.index', ['advts' => $advts]);
    }

    public function form()
    {
        $request = request();

        if ($id = $request->route()->parameter('id')) {

            $advt['advt'] = Advt::find($id);
            $advt['action'] = $id;
            $advt['buttonName'] = 'Save';
            //return redirect()->route('home');
        } else {
            $advt['action'] = '';
            $advt['buttonName'] = 'Create';
            //return redirect()->route('home');
        }
        return view('edit.form', ['advt' => $advt]);

    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => ['required'],
            'description' => ['required']
        ]);

        $advt = Advt::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'user_id' => Auth::id()
        ]);
        return redirect('/' . $advt->id);
    }

    public function advt($id)
    {
        $advt = Advt::where('id', '=', $id)->get();
        return view('edit.index', ['advts' => $advt]);
    }

    public function delete($id)
    {
        $advt = Advt::find($id);
        if (isset($advt) && $advt->user_id !== Auth::id()) {
            return redirect()->route('home');
        }
        $advt->delete();
        return redirect('/');
    }

}
