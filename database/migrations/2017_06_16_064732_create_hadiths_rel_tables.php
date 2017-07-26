<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHadithsRelTables extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('sources', function (Blueprint $table) {
				$table->increments('id');
				$table->string('title');
				$table->timestamps();
		});

		Schema::create('books', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('source_id')->unsigned()->index();
			$table->foreign('source_id')
			->references('id')
			->on('sources')
			->onDelete('cascade');
			$table->string('title');
			$table->timestamps();
		});

		Schema::create('chapters', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('book_id')->unsigned()->index();
			$table->foreign('book_id')
			->references('id')
			->on('books')
			->onDelete('cascade');
			$table->string('title');
			$table->timestamps();
		});

		Schema::create('hadiths', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('chapter_id')->unsigned()->index();
			$table->foreign('chapter_id')
			->references('id')
			->on('chapters')
			->onDelete('cascade');
			$table->string('text');
			$table->timestamps();
		});

	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('sources');
		Schema::dropIfExists('books');
		Schema::dropIfExists('chapters');
		Schema::dropIfExists('hadiths');


	}
}
