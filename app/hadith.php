<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class hadith extends Model
{
      use Searchable;
    public function chapter (){
      return $this->belongsTo(chapter::class);
    }

}
