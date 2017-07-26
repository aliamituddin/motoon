<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;
class source extends Model
{
    public function books () {
			return $this->hasMany(Book::class)
		}
}
