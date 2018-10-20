<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodo;

class PeriodoController extends Controller
{
    public function read()
    {
        $query = Periodo::query();
        return $query->get();
    }

    public function find()
    {
        return Periodo::find(request()->route('id'));
    }

    public function create()
    {
        Periodo::create(request()->all());
    }

    public function update()
    {
        $periodo = Periodo::find(request()->route('id'));
        $periodo->fill(request()->all());
        $periodo->save();
    }

    public function delete()
    {
        Periodo::destroy(request()->route('id'));
    }
}
