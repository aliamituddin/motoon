<?php

use Illuminate\Database\Seeder;
require_once ('database/seeds/Islamsource.php') ;

class sunanabudawood extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      islamsourceHadith("sunanabudawood",
      "database/seeds/sunan-abu-dawood-metadata.xml",
      "database/seeds/sunan-abu-dawood.xml") ;
    }
}
