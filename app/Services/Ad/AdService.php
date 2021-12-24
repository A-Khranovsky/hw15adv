<?php


namespace App\Services\Ad;

use App\Models\Advt;

class AdService implements AdServiceinterface
{
    public function index()
    {
        return Advt::orderBy('id', 'desc')->paginate(10);
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
