<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = [
    	'people_id',
    	'dni', 
    	'first_name', 
    	'last_name',  
    	'gender', 
    	'birthdate', 
    	'relationship' 
    ];
    public function people()
    {
        return $this->belongsTo('App\People');
    }

    public function getTypeRelationshipAttribute()
	{
		switch($this->relationship)
		{
			//1=madre,2=padre,3=hijo(a),4=conyuge,5=otro,
			case 1:
				return 'MADRE';
				break;
			
			case 2:
				return 'PADRE';
				break;
			case 3:
				return 'HIJO(A)';
				break;
			case 4:
				return 'CONYUGE';
				break;
			case 5:
				return 'OTRO';
				break;			
		}
		
	}
	public function getFullNameAttribute()
	{
		return "{$this->first_name} {$this->last_name} ";
	}	
}
