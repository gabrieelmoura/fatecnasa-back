<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    protected $table = 't_fatec_ocorrencias';
    public $timestamps = false;

    public function local()
    {
        return $this->belongsTo(Local::class);
    }
}
