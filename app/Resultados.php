<?php

<<<<<<< HEAD
=======
/*Modelo "Resultados". En el se detalla las columnas de su tabla en la Base de Datos, además de la PK.*/

>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    //
    protected $fillable = ['idencuesta','id_pregunta','pregunta','alternativa_a','alternativa_b','alternativa_c','alternativa_d','frecuencia_a','frecuencia_b','frecuencia_c','frecuencia_d'];
    protected $table="resultados";
    protected $primaryKey = 'id_resultado';
}
