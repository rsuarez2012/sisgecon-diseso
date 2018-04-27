<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class People extends Model
{
	use SoftDeletes;
	
	protected $table = 'people';
    protected $fillable = ['dni', 'first_name', 'last_name', 'place_of_birth', 'marital_status', 'address', 'telephone', 'cellphone', 'email', 'employee_type', 'position', 'status', 'gender', 'birthdate', 'date_of_admission', 'dependency_id' ];

    public function beneficiaries()
    {
    	return $this->hasMany('App\Beneficiary');
    }
    public function histories()
    {
    	return $this->hasMany('App\History', 'people_id');
    }
    public function occupationals()
    {
    	return $this->hasMany('App\OccupationalHistory', 'people_id');
    }
    public function dependencies()
    {
        return $this->belongsTo('App\Dependency', 'dependency_id');
    }
    public function reposes()
    {
    	return $this->hasMany('App\Repose', 'people_id');
    }

    public function getTypeEmployeeAttribute()
	{
		switch($this->employee_type)
		{
			case 1:
				return 'ADMINISTRATIVO';
				break;
			
			case 2:
				return 'ADMINISTRATIVO-CONTRATADO';
				break;
			case 3:
				return 'DOCENTE';
				break;
			case 4:
				return 'DOCENTE-CONTRATADO';
				break;
			case 5:
				return 'OBRERO';
				break;
			case 6:
				return 'OBRERO-JUBILADO';
				break;
			
		}
		
	}	
	public function getStatusMaritalAttribute()
	{
		switch($this->marital_status)
		{
			case 1:
				return 'SOLTERO(A)';
				break;
			
			case 2:
				return 'CASADO(A)';
				break;
						
		}
		
	}
	public function getSexAttribute()
	{
		switch($this->gender)
		{
			case 1:
				return 'FEMENINO';
				break;
			
			case 2:
				return 'MASCULINO';
				break;
						
		}
		
	}
	public function getFullNameAttribute()
	{
		return "{$this->first_name} {$this->last_name} {$this->dni}";
	}
	public function getHistoryAttribute()
	{
		return $this->dni;
	}	

}
