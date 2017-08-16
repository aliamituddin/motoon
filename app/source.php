<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class source extends Model
{
  protected $hidden = array('created_at', 'updated_at');

    public function books () {
			return $this->hasMany(Book::class);
		}
}
