<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class hadith extends Model
{
  use Searchable;
  protected $hidden = array('created_at', 'updated_at');

  public function chapter (){
    return $this->belongsTo(Chapter::class);
  }

  public function toSearchableArray()
  {
    // $chapter = $this->chapter;
    // $book = $chapter->book;
    // $source = $book->source;
    // $array = $this->toArray();

      // Customize array...

      return [ "text" => $this->text,
              "id"=> $this->id
      ];
  }
}
