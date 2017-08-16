<?php

use Illuminate\Database\Seeder;
require_once ('database/seeds/Islamsource.php') ;

class riyadalsaliheen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      islamsourceHadith("riyadalsaliheen",
      "database/seeds/riyad-alsaliheen-metadata.xml",
      "database/seeds/riyad-alsaliheen.xml") ;
    }
}
