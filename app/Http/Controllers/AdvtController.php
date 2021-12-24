<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\Ad\AdService;
use App\Services\Ad\AdServiceinterface;
use Illuminate\Http\Request;
use App\Models\Advt;
use Illuminate\Support\Facades\Auth;

class AdvtController extends Controller
{
    protected AdServiceinterface $adService;

    public function __construct(AdServiceinterface  $adService)
    {
        $this->adService = $adService;
    }
    public function index()
    {
        $advts = $this->adService->index();
        return view('index', ['advts' => $advts]);
    }

    public function edit(Advt $advt = null, Request $request)
    {
        $data = $request->validate(
            [
                'title' => ['required'],
                'description' => ['required']
            ]
        );

        $data['user_id'] = Auth::id();

        Advt::updateOrCreate(['id' => $advt->id ?? null], $data);
        return redirect()->route('home');
    }

    public function form(Advt $advt = null)
    {
        if (!Auth::user()->can('update', $advt) && $advt !== null) {
            return redirect()->route('home');
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

        if (!Auth::user()->can('delete', $advt)) {
            return redirect()->route('home');
        }
        $advt->delete();
        return back();
    }
}
