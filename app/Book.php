<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\source;
use App\chapter;

class Book extends Model
{
	// public function source (){
	// 	return $this->belongsTo(source::class);
	// }

	public function chapters () {
		return $this->hasMany(chapter::class);
	}
	
    public function author () {
      return $this->belongstoMany('App\People');
    }
}
