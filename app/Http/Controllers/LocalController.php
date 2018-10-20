<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local;

class LocalController extends Controller
{
    public function read()
    {
        $query = Local::query();
        return $query->get();
    }

    public function find()
    {
        $query = Local::query();
        $query->with(['periodos', 'tipoDesastre', 'comentarios']);
        return $query->find(request()->route('id'));
    }

    public function create()
    {
        Local::create(request()->all());
    }

    public function update()
    {
        $local = Local::find(request()->route('id'));
        $local->fill(request()->all());
        $local->save();
    }

    public function delete()
    {
        Local::destroy(request()->route('id'));
    }
}
