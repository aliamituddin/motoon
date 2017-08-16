<?php

namespace App;
use App\hadith;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
  protected $hidden = array('created_at', 'updated_at');

  public function hadiths () {
    return $this->hasMany(hadith::class);
  }
  public function book (){
    return $this->belongsTo(Book::class);
  }


}
