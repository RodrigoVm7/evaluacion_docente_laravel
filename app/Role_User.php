<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
	protected $table ="role_user";
    protected $fillable = ['id','user_rut','role_id'];
    protected $primaryKey = 'id';

}
