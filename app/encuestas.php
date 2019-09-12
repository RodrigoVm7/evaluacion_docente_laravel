<?php

<<<<<<< HEAD
=======
/*Modelo "Encuestas". En el se detalla las columnas de su tabla en la Base de Datos, además de la PK.*/

>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
namespace App;

use Illuminate\Database\Eloquent\Model;

class encuestas extends Model
{
    //
    protected $fillable = ['id_encuesta','asunto','codigoCurso','rutProfesor','publicada','finalizada'];
    protected $primaryKey = 'id_encuesta';
}
