<?php

use Illuminate\Database\Seeder;

use App\source;
use App\Book;

class muslim extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */

  public function run()
  {
    $muslim = new source ;
    $muslim->title = "صحيح مسلم";
    $muslim->save();

    $xml=simplexml_load_file("database/seeds/muslim-metadata.xml");


    foreach($xml->books->book as $book)
    {
      $new = new Book ;
      $new->title = $book['name'];
      $muslim->books()->save($new);
    }
  }
}
