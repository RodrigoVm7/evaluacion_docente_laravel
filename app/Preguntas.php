<?php

<<<<<<< HEAD
=======
/*Modelo "Preguntas". En el se detalla las columnas de su tabla en la Base de Datos, además de la PK.*/

>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
	protected $fillable = ['id_pregunta','idencuesta','pregunta','alternativa_a','alternativa_b','alternativa_c','alternativa_d'];
    protected $primaryKey = 'id_pregunta';


    //
}
