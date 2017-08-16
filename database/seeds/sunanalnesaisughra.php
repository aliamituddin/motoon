<?php

use Illuminate\Database\Seeder;
require_once ('database/seeds/Islamsource.php') ;

class sunanalnesaisughra extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      islamsourceHadith("sunanalnesaisughra",
      "database/seeds/sunan-alnesai-sughra-metadata.xml",
      "database/seeds/sunan-alnesai-sughra.xml") ;
    }
}
