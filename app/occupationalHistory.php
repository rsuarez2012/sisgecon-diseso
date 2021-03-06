<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class occupationalHistory extends Model
{
    protected $fillable = [
    	'people_id',
		'company',
		'company1',
		'company2',
		'activity',
		'activity1',
		'activity2',
		'since',
		'since1',
		'since2',
		'until',
		'until1',
		'until2',
		'risks',
		'risks1',
		'risks2',
		'noise',
		'noise_acute',
		'noise_chronicle',
		'noise_moses',
		'noise_year',
		'hot',
		'hot_temperature',
		'hot_acute',
		'hot_chronicle',
		'hot_moses',
		'hot_year',
		'cool',
		'cool_temperature',
		'cool_acute',
		'cool_chronicle',
		'cool_moses',
		'cool_year',
		'vibrations',
		'vibrations_body',
		'vibrations_segmental',
		'vibrations_acute',
		'vibrations_chronicle',
		'vibrations_moses',
		'vibrations_year',
		'ionizing_radiation',
		'ionizing_type',
		'ionizing_moses',
		'ionizing_year',
		'no_ionizing_radiation',
		'no_ionizing_type',
		'no_ionizing_moses',
		'no_ionizing_year',
		'fumes',
		'fumes_type',
		'fumes_acute',
		'fumes_chronicle',
		'fumes_moses',
		'fumes_year',
		'dust',
		'dust_type',
		'dust_acute',
		'dust_chronicle',
		'dust_moses',
		'dust_year',
		'metals',
		'metals_type',
		'metals_acute',
		'metals_chronicle',
		'metals_moses',
		'metals_year',
		'vapors',
		'vapors_type',
		'vapors_acute',
		'vapors_chronicle',
		'vapors_moses',
		'vapors_year',
		'solvents',
		'solvents_type',
		'solvents_acute',
		'solvents_chronicle',
		'solvents_moses',
		'solvents_year',
		'sitting',
		'prolonged',
		'characteristic_chair',
		'positions_hours',
		'positions_moses',
		'positions_year',
		'standing',
		'standing_hours',
		'standing_moses',
		'standing_year',
		'knees',
		'knees_hours',
		'knees_moses',
		'knees_year',
		'cunnels',
		'cunnels_hours',
		'cunnels_moses',
		'cunnels_year',
		'load',
		'load_type',
		'load_frecuncy',
		'load_hours',
		'load_moses',
		'load_year',
		'transfer',
		'transfer_type',
		'transfer_weight',
		'transfer_distance',
		'transfer_frecuncy',
		'transfer_hours',
		'transfer_moses',
		'transfer_year',
		'push',
		'push_type',
		'push_weight',
		'push_distance',
		'push_frecuncy',
		'push_hours',
		'push_moses',
		'push_year',
		'moves',
		'moves_body',
		'moves_frecuncy',
		'moves_hours',
		'moves_moses',
		'moves_year',
		'organic',
		'animals',
		'waste',
		'biologic_hours',
		'biologic_moses',
		'biologic_year',
		'inorganic',
		'work',
		'guard',
		'others',
		'work_biologic_hours',
		'work_biologic_moses',
		'work_biologic_year',
		'other_type',
		'other_description',
		'other_time',
		'accident',
		'body_part',
		'accident_date',
		'aftermath',
		'occupational_disease',
		'inpsasel',
		'change_work',

    ];
    public function people()
    {
        return $this->belongsTo('App\People', 'people_id');
        
    }
    
}
