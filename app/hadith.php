<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hadith extends Model
{
    public function chapter (){
      return $this->belongsTo(chapter::class);
    }

}
