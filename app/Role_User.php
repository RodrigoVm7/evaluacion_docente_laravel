<?php

<<<<<<< HEAD
=======
/*Modelo "Role_User". En el se detalla las columnas de su tabla en la Base de Datos, además de la PK.*/

>>>>>>> 80d32b5e3a86f2cc8107eb131dd79e28b6d6cc39
namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
	protected $table ="role_user";
    protected $fillable = ['id','user_rut','role_id'];
    protected $primaryKey = 'id';

}
