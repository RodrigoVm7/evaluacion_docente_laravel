<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    //
    protected $fillable = ['idencuesta','rutEstudiante','id_pregunta','respuesta'];
    protected $table="respuestas";
    protected $primaryKey = 'id_respuesta';
}
