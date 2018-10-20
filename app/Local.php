<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = 't_fatec_locais';
    public $timestamps = false;

    public function periodos()
    {
        return $this->hasMany(Periodo::class);
    }

    public function tipoDesastre()
    {
        return $this->belongsTo(TipoDesastre::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Periodo::class);
    }
}
