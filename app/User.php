<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'dni', 
        'telephone', 
        'email', 
        'password', 
        'especialidad', 
        'status', 
        'image', 
        'rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //relacion con los rol
    public function roles(){
        return $this->belongsTo('App\Rol');
    }

    public function getFullSpecialistAttribute()
    {
        return "{$this->first_name} {$this->last_name} - {$this->especialidad}";
    }
}
