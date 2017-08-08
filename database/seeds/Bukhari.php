<?php

use Illuminate\Database\Seeder;
require_once ('database/seeds/Islamsource.php') ;

class Bukhari extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */

  public function run()
  {
    islamsourceHadith("صحيح البخاري",
    "database/seeds/bukhari-metadata.xml",
    "database/seeds/bukhari.xml") ;

  }

}
