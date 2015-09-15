<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

use App\Race as Race;

class RaceTableSeeder extends Seeder {

	/**
	 * [run description]
	 * @return [type] [description]
	 */
	public function run()
	{
		DB::table('races')->delete();

		Race::create(array(
			'type' => 'relay',
			'status' => 'completed',
		));
	}
}
