<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
    	'people_id',
    	'beneficiary_id',
        'speciality_id',
        'appointment' 
    ];
    public function people()
    {
        return $this->belongsTo('App\People');
    }
    public function beneficiary()
    {
        return $this->belongsTo('App\Beneficiary', 'beneficiary_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'speciality_id');
    }
	
}
