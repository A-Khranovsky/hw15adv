<?php


namespace App\Services\Ad;

use Illuminate\Http\Request;

interface AdServiceinterface
{
    public function index();

    public function show($id);

    public function create($ad = null);

    public function save(array $data, $ad = null);

    public function delete($ad);
}
