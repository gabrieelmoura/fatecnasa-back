<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = 't_fatec_periodos';
    public $timestamps = false;

    public function local()
    {
        $this->belongsTo(Periodo::class);
    }
}
