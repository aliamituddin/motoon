<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class hadith extends Model
{
  use Searchable;
  protected $hidden = array('created_at', 'updated_at');

  public function toArray()
  {
    $chapter = $this->chapter;
    $book = $chapter->book;
    $source = $book->source;
    $array = parent::toArray();
    $array['chapter'] = $chapter;
    return $array;
  }

  public function chapter (){
    return $this->belongsTo(Chapter::class);
  }

  public function toSearchableArray()
  {
    return [ "text" => $this->text,
    "id"=> $this->id
  ];
}

}
