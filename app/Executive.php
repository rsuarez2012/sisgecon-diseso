<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria

class Executive extends Model
{
    //use SoftDeletes; //Implementamos borrado logico
    protected $table = 'executives';

    //protected $dates = ['deleted_at']; //Registramos la nueva columna

    protected $fillable = [
    	'first_name', 
    	'last_name', 
    	'dni', 
    	'resolution', 
    	'status'
    ];
    public function communication()
    {
        return $this->hasMany('App\Communication', 'director_id');
    }

    public function people()
    {
        return $this->belongsTo('App\People');
    }
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name} {$this->dni}";
    }
}
