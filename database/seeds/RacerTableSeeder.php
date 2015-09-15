<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

use App\Racer as Racer;

class RacerTableSeeder extends Seeder {

	/**
	 * [run description]
	 * @return [type] [description]
	 */
	public function run()
	{
		DB::table('racers')->delete();

		// get team IDs
		$teamNames = array('Schnell', 'Ichi Ban', 'Team Pizza', 'Mostly New Guys', 'Team Mongolia');
		$teamIds = array();
		foreach ($teamNames as $name) {
			$team = Db::table('teams')
				->where('name', '=', $name)
				->select('id')
				->first();
			if (!empty($team->id)) {
				$teamIds[$name] = $team->id;
			}
		}

		// seed Racers
		// schnell
		Racer::create(array(
			'first_name' => 'Trey',
			'last_name' => 'Metrailer',
			'racer_name' => 'The Blue Wire',
			'team_id' => $teamIds['Schnell']
		));
		Racer::create(array(
			'first_name' => 'Robert',
			'last_name' => 'Long',
			'racer_name' => '',
			'team_id' => $teamIds['Schnell']
		));
		Racer::create(array(
			'first_name' => 'David',
			'last_name' => 'Smith',
			'racer_name' => '',
			'team_id' => $teamIds['Schnell']
		));
		Racer::create(array(
			'first_name' => 'Jon',
			'last_name' => 'Jones',
			'racer_name' => '',
			'team_id' => $teamIds['Schnell']
		));
		Racer::create(array(
			'first_name' => 'Jean',
			'last_name' => 'Washington',
			'racer_name' => '',
			'team_id' => $teamIds['Schnell']
		));

		// Ichi Ban
		Racer::create(array(
			'first_name' => 'Bobby',
			'last_name' => 'Torres',
			'racer_name' => '',
			'team_id' => $teamIds['Ichi Ban']
		));
		Racer::create(array(
			'first_name' => 'Charles',
			'last_name' => 'Anderson',
			'racer_name' => '',
			'team_id' => $teamIds['Ichi Ban']
		));
		Racer::create(array(
			'first_name' => 'Mike',
			'last_name' => 'Russell',
			'racer_name' => '',
			'team_id' => $teamIds['Ichi Ban']
		));
		Racer::create(array(
			'first_name' => 'Janet',
			'last_name' => 'Parker',
			'racer_name' => '',
			'team_id' => $teamIds['Ichi Ban']
		));

		// Team Pizza
		Racer::create(array(
			'first_name' => 'Keith',
			'last_name' => 'Morgan',
			'racer_name' => '',
			'team_id' => $teamIds['Team Pizza']
		));
		Racer::create(array(
			'first_name' => 'Edward',
			'last_name' => 'Russell',
			'racer_name' => '',
			'team_id' => $teamIds['Team Pizza']
		));
		Racer::create(array(
			'first_name' => 'Donald',
			'last_name' => 'Duncan',
			'racer_name' => '',
			'team_id' => $teamIds['Team Pizza']
		));
		Racer::create(array(
			'first_name' => 'Paula',
			'last_name' => 'Kelly',
			'racer_name' => '',
			'team_id' => $teamIds['Team Pizza']
		));

		// Mostly New Guys
		Racer::create(array(
			'first_name' => 'Ruth',
			'last_name' => 'Butler',
			'racer_name' => '',
			'team_id' => $teamIds['Mostly New Guys']
		));
		Racer::create(array(
			'first_name' => 'Melissa',
			'last_name' => 'Ramirez',
			'racer_name' => '',
			'team_id' => $teamIds['Mostly New Guys']
		));
		Racer::create(array(
			'first_name' => 'Shawn',
			'last_name' => 'Barnes',
			'racer_name' => '',
			'team_id' => $teamIds['Mostly New Guys']
		));
		Racer::create(array(
			'first_name' => 'Earl',
			'last_name' => 'Mitchell',
			'racer_name' => '',
			'team_id' => $teamIds['Mostly New Guys']
		));

		// Team Mongolia
		Racer::create(array(
			'first_name' => 'Theresa',
			'last_name' => 'Roberts',
			'racer_name' => '',
			'team_id' => $teamIds['Team Mongolia']
		));
		Racer::create(array(
			'first_name' => 'Jason',
			'last_name' => 'Bennett',
			'racer_name' => '',
			'team_id' => $teamIds['Team Mongolia']
		));
		Racer::create(array(
			'first_name' => 'Jessica',
			'last_name' => 'Price',
			'racer_name' => '',
			'team_id' => $teamIds['Team Mongolia']
		));
		Racer::create(array(
			'first_name' => 'Jimmy',
			'last_name' => 'Hughes',
			'racer_name' => 'I RAM U',
			'team_id' => $teamIds['Team Mongolia']
		));
	}
}