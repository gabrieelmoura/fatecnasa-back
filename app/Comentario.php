<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 't_fatec_comentarios';
    public $timestamps = false;

    public function comentario()
    {
        return $this->belongsTo(Local::class);
    }
}
