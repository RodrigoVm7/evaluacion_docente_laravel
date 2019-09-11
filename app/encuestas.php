<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class encuestas extends Model
{
    //
    protected $fillable = ['id_encuesta','asunto','codigoCurso','rutProfesor','publicada','finalizada'];
    protected $primaryKey = 'id_encuesta';
}
