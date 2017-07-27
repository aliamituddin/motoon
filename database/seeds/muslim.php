<?php

use Illuminate\Database\Seeder;

use App\source;
use App\Book;
use App\chapter;
use App\hadith;

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

    $muslim_metadata=simplexml_load_file("database/seeds/muslim-metadata.xml");
    $muslim_data = simplexml_load_file("database/seeds/muslim.xml");

    foreach($muslim_metadata->books->book as $book)
    {
      $book_instance = new Book ;
      $book_instance->title = $book['name'];
      $muslim->books()->save($book_instance);

      foreach($book->chapter as $chapter)
      {
        $chapter_instance = new chapter ;
        $chapter_instance->title = $chapter['name'];
        $book_instance->chapters()->save($chapter_instance);


        foreach ($muslim_data as $muslim_book ){
          if (trim($muslim_book['index']) === trim($book['index']) ){
            foreach ($muslim_book->hadith as $hadith){

              if (trim($hadith['sectionindex']) === trim($chapter['index'])){
                $hadith_instance = new hadith;
                $hadith_instance->text = $hadith['text'];
                $chapter_instance->hadiths()->save($hadith_instance);
              }
            }

          }
        }
      }

    }
  }
}
