<?php
use App\source;
use App\Book;
use App\Chapter;
use App\hadith;
/*
This function will handle resources that were imported from http://islamsource.info/

*/

function islamsourceHadith ($title, $metadatafile , $datafile)
{
  $source = new source ;
  $source->title = $title ;
  $source->save();

  $source_metadata=simplexml_load_file($metadatafile);
  $source_data = simplexml_load_file($datafile);

  foreach($source_metadata->books->book as $book)
  {
    $book_instance = new Book ;
    $book_instance->title = $book['name'];
    $source->books()->save($book_instance);

    foreach($book->chapter as $chapter)
    {
      $chapter_instance = new Chapter ;
      $chapter_instance->title = $chapter['name'];
      $book_instance->chapters()->save($chapter_instance);

      foreach ($source_data as $source_book ){
        if (trim($source_book['index']) === trim($book['index']) ){
          foreach ($source_book->hadith as $hadith){

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
