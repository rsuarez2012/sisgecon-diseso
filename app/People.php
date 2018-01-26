<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['dni', 'first_name', 'last_name', 'place_of_birth', 'marital_status', 'address', 'telephone', 'cellphone', 'email', 'employee_type', 'position', 'status', 'gender', 'birthdate', 'date_of_admission' ];
}
