<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ocorrencia;

class OcorrenciaController extends Controller
{
    public function read()
    {
        $query = Ocorrencia::query();
        return $query->get();
    }

    public function find()
    {
        return Ocorrencia::find(request()->route('id'));
    }

    public function create()
    {
        Ocorrencia::create(request()->all());
    }

    public function update()
    {
        $comentario = Ocorrencia::find(request()->route('id'));
        $comentario->fill(request()->all());
        $comentario->save();
    }

    public function delete()
    {
        Ocorrencia::destroy(request()->route('id'));
    }
}
