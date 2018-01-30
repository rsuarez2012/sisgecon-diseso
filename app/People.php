<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
	protected $table = 'people';
    protected $fillable = ['dni', 'first_name', 'last_name', 'place_of_birth', 'marital_status', 'address', 'telephone', 'cellphone', 'email', 'employee_type', 'position', 'status', 'gender', 'birthdate', 'date_of_admission' ];

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

}
