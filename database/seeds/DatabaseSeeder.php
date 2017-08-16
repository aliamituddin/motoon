<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
	// $this->call(muslim::class);
	 // $this->call(Bukhari::class);
		// $this->call(malik::class);
		// $this->call(sunanibnumaja::class);
		$this->call(sunanaltirmithi::class);
		$this->call(sunanalnesaisughra::class);
		$this->call(sunanabudawood::class);
		$this->call(riyadalsaliheen::class);


	}
}
