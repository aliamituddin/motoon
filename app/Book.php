<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\source;
use App\Chapter;

class Book extends Model
{
	protected $hidden = array('created_at', 'updated_at');

	// public function source (){
	// 	return $this->belongsTo(source::class);
	// }

	public function chapters () {
		return $this->hasMany(Chapter::class);
	}

    public function author () {
      return $this->belongstoMany('App\People');
    }

		public function source () {
			return $this->belongsTo('App\source');
		}
}
