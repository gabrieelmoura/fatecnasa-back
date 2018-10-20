<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDesastre extends Model
{
    protected $table = 't_fatec_tipos_desastre';
    public $timestamps = false;

    public function locais()
    {
        return $this->hasMany(Local::class);
    }
}
