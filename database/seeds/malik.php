<?php

use Illuminate\Database\Seeder;
require_once ('database/seeds/Islamsource.php') ;

class malik extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      islamsourceHadith("موطأ مالك",
      "database/seeds/muwataa-malik-metadata.xml",
      "database/seeds/muwataa-malik.xml") ;
    }
}
