<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //línea necesaria

class Repose extends Model
{
    use SoftDeletes; //Implementamos borrado logico
    //protected $table = 'reposes';

    //protected $dates = ['deleted_at']; //Registramos la nueva columna

    protected $fillable = [
    	'people_id', 
    	'date', 
    	'pathology', 
    	'since', 
    	'until', 
    	'doctor_issues', 
    	'valid_doctor', 
    	'specialty', 
    	'rest_days'
    ];

    public function people()
    {
        return $this->belongsTo('App\People');
    }
}
