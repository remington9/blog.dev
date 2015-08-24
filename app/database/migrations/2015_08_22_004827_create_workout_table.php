<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workout', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('person');
			$table->string('bench')->nullable();
			$table->string('curl')->nullable();
			$table->string('tris')->nullable();
			$table->string('squat')->nullable();
			$table->string('calves')->nullable();
			$table->string('military_press')->nullable();
			$table->string('deadlift')->nullable();
			$table->string('hang_clean')->nullable();
			$table->string('push_ups')->nullable();
			$table->string('sit_ups')->nullable();
			$table->string('pull_ups')->nullable();
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
		Schema::drop('workout');
	}

}
