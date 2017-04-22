<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function tookfrom () {
			return $this->belongsToMany('App\People', 'people_tookfrom', 'person_id', 'tookfrom_id');
		}

		public function gaveto () {
			return $this->belongsToMany('App\People', 'people_tookfrom', 'tookfrom_id','person_id');
		}
}
