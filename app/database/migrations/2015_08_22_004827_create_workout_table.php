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
			$table->string('bench_sets')->nullable();
			$table->string('bench_reps')->nullable();
			$table->string('curl')->nullable();
			$table->string('curl_sets')->nullable();
			$table->string('curl_reps')->nullable();
			$table->string('tris')->nullable();
			$table->string('tris_sets')->nullable();
			$table->string('tris_reps')->nullable();
			$table->string('squat')->nullable();
			$table->string('squat_sets')->nullable();
			$table->string('squat_reps')->nullable();
			$table->string('calves')->nullable();
			$table->string('calves_sets')->nullable();
			$table->string('calves_reps')->nullable();
			$table->string('military_press')->nullable();
			$table->string('military_press_sets')->nullable();
			$table->string('military_press_reps')->nullable();
			$table->string('deadlift')->nullable();
			$table->string('deadlift_sets')->nullable();
			$table->string('deadlift_reps')->nullable();
			$table->string('hang_clean')->nullable();
			$table->string('hang_clean_sets')->nullable();
			$table->string('hang_clean_reps')->nullable();
			$table->string('push_ups')->nullable();
			$table->string('push_ups_sets')->nullable();
			$table->string('push_ups_reps')->nullable();
			$table->string('sit_ups')->nullable();
			$table->string('sit_ups_sets')->nullable();
			$table->string('sit_ups_reps')->nullable();
			$table->string('pull_ups')->nullable();
			$table->string('pull_ups_sets')->nullable();
			$table->string('pull_ups_reps')->nullable();
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
