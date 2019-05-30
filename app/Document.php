<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
    	'people_id',
    	'file' 
    ];
    public function people()
    {
        return $this->belongsTo('App\People');
    }

    public function getUrlPathAtributte()
    {
    	return \Storage::url($this->path);
    }
	
}
