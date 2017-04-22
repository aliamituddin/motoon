<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('people', function (Blueprint $table) {
			$table->increments('id');
			$table->string('firstName')->nullable();
			$table->string('lastName')->nullable();
			$table->string('knownAsShort')->nullable();
			$table->string('knownAsLong')->nullable();
			$table->date('dateOfBirthH')->nullable();
			$table->date('dateOfBirthG')->nullable();
			$table->date('dateOfDeathH')->nullable();
			$table->date('dateOfDeathG')->nullable();
			$table->timestamps();
		});

		Schema::create('people_tookfrom', function (Blueprint $table) {
			$table->integer('person_id')->unsigned();
			$table->integer('tookfrom_id')->unsigned();
			$table->foreign('person_id')
			->references('id')
			->on('people')
			->onDelete('cascade');
			$table->foreign('tookfrom_id')
			->references('id')
			->on('people')
			->onDelete('cascade');
			$table->primary(['person_id','tookfrom_id']);
		});

		Schema::create('people_gaveto', function (Blueprint $table) {
			$table->integer('person_id')->unsigned();
			$table->integer('gaveto_id')->unsigned();
			$table->foreign('person_id')
			->references('id')
			->on('people')
			->onDelete('cascade');
			$table->foreign('gaveto_id')
			->references('id')
			->on('people')
			->onDelete('cascade');
			$table->primary(['person_id','gaveto_id']);
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::dropIfExists('people');
	}
}
