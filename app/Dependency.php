<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependency extends Model
{
    protected $fillable = [
        'dependency',
        
    ];
    public function people()
    {
    	return $this->hasMany('App\People::class', 'dependency_id');
    }
    public function getInfoAttribute()
	{
		return $this->dependency;
	}
	

}
