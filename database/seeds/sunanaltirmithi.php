<?php

use Illuminate\Database\Seeder;
require_once ('database/seeds/Islamsource.php') ;

class sunanaltirmithi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      islamsourceHadith("سنن الترمذي",
      "database/seeds/sunan-al-tirmithi-metadata.xml",
      "database/seeds/sunan-al-tirmithi.xml") ;
    }
}
