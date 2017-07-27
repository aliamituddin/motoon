<?php

namespace App;
use App\hadith;

use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
  public function hadiths () {
    return $this->hasMany(hadith::class);
  }}
