<?php


namespace App\Services\Ad;

use App\Models\Advt;

class AdService2 implements AdServiceinterface
{
    public function index()
    {
        return Advt::orderBy('id', 'desc')->paginate(3);
    }

    public function show($id)
    {

    }
    public function create($ad = null)
    {

    }

    public function save(array $data, $ad = null)
    {

    }

    public function delete($ad)
    {

    }
}
