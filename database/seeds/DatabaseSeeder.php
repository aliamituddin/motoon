<?php

use Illuminate\Database\Seeder;
use App\source;
use App\Book;

class DatabaseSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{

		$xml=simplexml_load_file("database/seeds/muslim-metadata.xml");

		$muslim = source::create([
		]);
		foreach($xml->books->book as $book)
		{
			$new = Book::create([
				'title' => $book['name'],
			]);
			$muslim->books()->save($new);
		}
		// $this->call(UsersTableSeeder::class);
	}
}
