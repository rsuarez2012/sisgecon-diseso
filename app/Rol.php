<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name', 'description', 'condition'];

    //relacion con los users
    public function users(){
        return $this->hasMany('App\User');
    }
    
    public function getFullRolAttribute()
	{
		return "{$this->name} - {$this->description} ";
	}
}
