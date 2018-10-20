<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class ComentarioController extends Controller
{
    public function read()
    {
        $query = Comentario::query();
        return $query->get();
    }

    public function find()
    {
        return Comentario::find(request()->route('id'));
    }

    public function create()
    {
        Comentario::create(request()->all());
    }

    public function update()
    {
        $comentario = Comentario::find(request()->route('id'));
        $comentario->fill(request()->all());
        $comentario->save();
    }

    public function delete()
    {
        Comentario::destroy(request()->route('id'));
    }
}
