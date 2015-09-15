<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('races', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->enum('type', array('default', 'relay'));
			$table->enum('status', array('upcoming', 'in progress', 'complete'));
			$table->timestamp('started_at'); //@todo - allow and default to null
			$table->timestamps();

			$table->index('status');
		});

		//
		Schema::create('teams', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('name')->unique();
			$table->integer('race_id')->unsigned();
			$table->timestamps();

			$table->foreign('race_id')
				->references('id')->on('teams')
				->onDelete('cascade');
			$table->index('race_id');
		});

		//
		Schema::create('racers', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('racer_name');
			$table->integer('team_id')->unsigned();
			$table->timestamps();

			$table->foreign('team_id')
				->references('id')->on('teams')
				->onDelete('cascade');
			$table->index('team_id');
		});

		Schema::create('laps', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->boolean('has_driver_change');
			$table->smallInteger('number')->unsigned();
			$table->integer('time')->unsigned();
			$table->integer('racer_id')->unsigned();
			$table->integer('race_id')->unsigned();
			$table->timestamps();

			$table->foreign('racer_id')
				->references('id')->on('racers')
				->onDelete('cascade');
			$table->index('racer_id');
			$table->foreign('race_id')
				->references('id')->on('races')
				->onDelete('cascade');
			$table->index('race_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('laps');
		Schema::drop('racers');
		Schema::drop('teams');
		Schema::drop('races');
	}

}
