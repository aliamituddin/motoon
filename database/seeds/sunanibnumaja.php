<?php

use Illuminate\Database\Seeder;
require_once ('database/seeds/Islamsource.php') ;

class sunanibnumaja extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      islamsourceHadith("سنن إبن ماجة",
      "database/seeds/sunan-ibnu-maja-metadata.xml",
      "database/seeds/sunan-ibnu-maja.xml") ;
    }
}
