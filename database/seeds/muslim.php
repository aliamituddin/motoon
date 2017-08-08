<?php

use Illuminate\Database\Seeder;
require_once ('database/seeds/Islamsource.php') ;

class muslim extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */

  public function run()
  {
    islamsourceHadith("صحيح مسلم",
    "database/seeds/muslim-metadata.xml",
    "database/seeds/muslim.xml") ;
  }
}
