<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->date('start_date');
			$table->date('end_date');
			$table->string('event_title');
			$table->text('description');
			$table->string('location');
			$table->string('category');
			$table->integer('price');
			$table->string('site_URL');
			$table->timestamps();

			$table->foreign('user_id')
					->references('id')
					->on('users')
					->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
