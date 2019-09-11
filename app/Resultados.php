<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    //
    protected $fillable = ['idencuesta','id_pregunta','pregunta','alternativa_a','alternativa_b','alternativa_c','alternativa_d','frecuencia_a','frecuencia_b','frecuencia_c','frecuencia_d'];
    protected $table="resultados";
    protected $primaryKey = 'id_resultado';
}
