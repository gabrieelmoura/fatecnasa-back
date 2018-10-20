<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDesastre;

class TipoDesastreController extends Controller
{
    public function read()
    {
        $query = TipoDesastre::query();
        return $query->get();
    }

    public function find()
    {
        return TipoDesastre::find(request()->route('id'));
    }

    public function create()
    {
        TipoDesastre::create(request()->all());
    }

    public function update()
    {
        $tipoDesastre = TipoDesastre::find(request()->route('id'));
        $tipoDesastre->fill(request()->all());
        $tipoDesastre->save();
    }

    public function delete()
    {
        TipoDesastre::destroy(request()->route('id'));
    }
}
