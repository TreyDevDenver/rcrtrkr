<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

use App\Team as Team;

class TeamTableSeeder extends Seeder {

	/**
	 * [run description]
	 * @return [type] [description]
	 */
	public function run()
	{
		DB::table('teams')->delete();

		$race = Db::table('races')
			->select('id')
			->first();

		Team::create(array(
			'name' => 'Schnell',
			'race_id' => $race->id
		));
		Team::create(array(
			'name' => 'Ichi Ban',
			'race_id' => $race->id
		));
		Team::create(array(
			'name' => 'Team Pizza',
			'race_id' => $race->id
		));
		Team::create(array(
			'name' => 'Mostly New Guys',
			'race_id' => $race->id
		));
		Team::create(array(
			'name' => 'Team Mongolia',
			'race_id' => $race->id
		));
	}
}
