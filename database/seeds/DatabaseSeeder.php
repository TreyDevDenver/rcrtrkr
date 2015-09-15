<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('RaceTableSeeder');
		$this->call('TeamTableSeeder');
		$this->call('RacerTableSeeder');
		$this->call('LapTableSeeder');
	}

}
