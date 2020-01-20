<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria

class Communication extends Model
{
    //use SoftDeletes; //Implementamos borrado logico
    //protected $table = 'executives';

    //protected $dates = ['deleted_at']; //Registramos la nueva columna

    protected $fillable = [
    	'dependency_id', 
    	'director_id', 
    	'affair', 
    	'date', 
    	'body',
        'number',
        'annexed',
        'communication_type'
    ];

    public function executive()
    {
        return $this->belongsTo('App\Executive', 'director_id');
    }
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name} {$this->dni}";
    }
}
