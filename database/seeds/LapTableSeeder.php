<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

use App\Lap as Lap;

class LapTableSeeder extends Seeder {

	/**
	 * [run description]
	 * @return [type] [description]
	 */
	public function run()
	{
		DB::table('laps')->delete();

		$racerNames = array(
			'Trey', 'Robert', 'David', 'Jon', 'Jean',
			'Bobby', 'Charles', 'Mike', 'Janet',
			'Keith', 'Edward', 'Donald', 'Ruth',
			'Ruth', 'Melissa', 'Shawn', 'Earl',
			'Theresa', 'Jason', 'Jessica', 'Jimmy',
		);
		$racerIds = array();
		foreach ($racerNames as $name) {
			$racer = Db::table('racers')
				->where('first_name', '=', $name)
				->select('id')
				->first();
			if (!empty($racer->id)) {
				$racerIds[$name] = $racer->id;
			}
		}

		$race = Db::table('races')
			->select('id')
			->first();

		// Team Ichi Ban
		// Charles stint 1
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 1,
			'race_id' => $race->id,
			'time' => 34731,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 2,
			'race_id' => $race->id,
			'time' => 35569,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 3,
			'race_id' => $race->id,
			'time' => 34645,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 4,
			'race_id' => $race->id,
			'time' => 33778,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 5,
			'race_id' => $race->id,
			'time' => 36366,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 6,
			'race_id' => $race->id,
			'time' => 36433,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 7,
			'race_id' => $race->id,
			'time' => 36510,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 8,
			'race_id' => $race->id,
			'time' => 36253,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 9,
			'race_id' => $race->id,
			'time' => 33758,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 10,
			'race_id' => $race->id,
			'time' => 34807,
			'racer_id' => $racerIds['Charles']
		));
		// Bobby stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 11,
			'race_id' => $race->id,
			'time' => 108362,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 12,
			'race_id' => $race->id,
			'time' => 35688,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 13,
			'race_id' => $race->id,
			'time' => 36141,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 14,
			'race_id' => $race->id,
			'time' => 36039,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 15,
			'race_id' => $race->id,
			'time' => 36866,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 16,
			'race_id' => $race->id,
			'time' => 35433,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 17,
			'race_id' => $race->id,
			'time' => 35290,
			'racer_id' => $racerIds['Bobby']
		));
		// Mike stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 18,
			'race_id' => $race->id,
			'time' => 80609,
			'racer_id' => $racerIds['Mike']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 19,
			'race_id' => $race->id,
			'time' => 42001,
			'racer_id' => $racerIds['Mike']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 20,
			'race_id' => $race->id,
			'time' => 41704,
			'racer_id' => $racerIds['Mike']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 21,
			'race_id' => $race->id,
			'time' => 41689,
			'racer_id' => $racerIds['Mike']
		));
		// Janet stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 22,
			'race_id' => $race->id,
			'time' => 73563,
			'racer_id' => $racerIds['Janet']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 23,
			'race_id' => $race->id,
			'time' => 36653,
			'racer_id' => $racerIds['Janet']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 24,
			'race_id' => $race->id,
			'time' => 35547,
			'racer_id' => $racerIds['Janet']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 25,
			'race_id' => $race->id,
			'time' => 35452,
			'racer_id' => $racerIds['Janet']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 26,
			'race_id' => $race->id,
			'time' => 34307,
			'racer_id' => $racerIds['Janet']
		));
		// Charles stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 27,
			'race_id' => $race->id,
			'time' => 59033,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 28,
			'race_id' => $race->id,
			'time' => 32482,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 29,
			'race_id' => $race->id,
			'time' => 31966,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 30,
			'race_id' => $race->id,
			'time' => 32398,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 31,
			'race_id' => $race->id,
			'time' => 34222,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 32,
			'race_id' => $race->id,
			'time' => 32922,
			'racer_id' => $racerIds['Charles']
		));
		// Bobby stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 33,
			'race_id' => $race->id,
			'time' => 63674,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 34,
			'race_id' => $race->id,
			'time' => 33198,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 35,
			'race_id' => $race->id,
			'time' => 32610,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 36,
			'race_id' => $race->id,
			'time' => 32198,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 37,
			'race_id' => $race->id,
			'time' => 32566,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 38,
			'race_id' => $race->id,
			'time' => 33243,
			'racer_id' => $racerIds['Bobby']
		));
		// Mike stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 39,
			'race_id' => $race->id,
			'time' => 81050,
			'racer_id' => $racerIds['Mike']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 40,
			'race_id' => $race->id,
			'time' => 36868,
			'racer_id' => $racerIds['Mike']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 41,
			'race_id' => $race->id,
			'time' => 39095,
			'racer_id' => $racerIds['Mike']
		));
		// Janet stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 42,
			'race_id' => $race->id,
			'time' => 67448,
			'racer_id' => $racerIds['Janet']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 43,
			'race_id' => $race->id,
			'time' => 35456,
			'racer_id' => $racerIds['Janet']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 44,
			'race_id' => $race->id,
			'time' => 33338,
			'racer_id' => $racerIds['Janet']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 45,
			'race_id' => $race->id,
			'time' => 34392,
			'racer_id' => $racerIds['Janet']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 46,
			'race_id' => $race->id,
			'time' => 34447,
			'racer_id' => $racerIds['Janet']
		));
		// Charles stint 3
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 47,
			'race_id' => $race->id,
			'time' => 66694,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 48,
			'race_id' => $race->id,
			'time' => 31867,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 49,
			'race_id' => $race->id,
			'time' => 34286,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 50,
			'race_id' => $race->id,
			'time' => 33205,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 51,
			'race_id' => $race->id,
			'time' => 31433,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 52,
			'race_id' => $race->id,
			'time' => 32355,
			'racer_id' => $racerIds['Charles']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 53,
			'race_id' => $race->id,
			'time' => 32481,
			'racer_id' => $racerIds['Charles']
		));
		// Bobby stint 3
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 54,
			'race_id' => $race->id,
			'time' => 54028,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 55,
			'race_id' => $race->id,
			'time' => 33239,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 56,
			'race_id' => $race->id,
			'time' => 31959,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 57,
			'race_id' => $race->id,
			'time' => 33340,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 58,
			'race_id' => $race->id,
			'time' => 32576,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 59,
			'race_id' => $race->id,
			'time' => 31699,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 60,
			'race_id' => $race->id,
			'time' => 32590,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 61,
			'race_id' => $race->id,
			'time' => 31337,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 62,
			'race_id' => $race->id,
			'time' => 31390,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 63,
			'race_id' => $race->id,
			'time' => 32430,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 64,
			'race_id' => $race->id,
			'time' => 32299,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 65,
			'race_id' => $race->id,
			'time' => 32518,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 66,
			'race_id' => $race->id,
			'time' => 31797,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 67,
			'race_id' => $race->id,
			'time' => 32591,
			'racer_id' => $racerIds['Bobby']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 68,
			'race_id' => $race->id,
			'time' => 32348,
			'racer_id' => $racerIds['Bobby']
		));
		// end Team Ichi Ban

		// Team Pizza
		// Keith stint 1
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 1,
			'race_id' => $race->id,
			'time' => 39100,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 2,
			'race_id' => $race->id,
			'time' => 34314,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 3,
			'race_id' => $race->id,
			'time' => 32897,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 4,
			'race_id' => $race->id,
			'time' => 32522,
			'racer_id' => $racerIds['Keith']
		));
		// Edward stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 5,
			'race_id' => $race->id,
			'time' => 68923,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 6,
			'race_id' => $race->id,
			'time' => 36527,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 7,
			'race_id' => $race->id,
			'time' => 39283,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 8,
			'race_id' => $race->id,
			'time' => 36753,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 9,
			'race_id' => $race->id,
			'time' => 37196,
			'racer_id' => $racerIds['Edward']
		));
		// Donald stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 10,
			'race_id' => $race->id,
			'time' => 79122,
			'racer_id' => $racerIds['Donald']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 11,
			'race_id' => $race->id,
			'time' => 44155,
			'racer_id' => $racerIds['Donald']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 12,
			'race_id' => $race->id,
			'time' => 43357,
			'racer_id' => $racerIds['Donald']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 13,
			'race_id' => $race->id,
			'time' => 41375,
			'racer_id' => $racerIds['Donald']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 14,
			'race_id' => $race->id,
			'time' => 39372,
			'racer_id' => $racerIds['Donald']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 15,
			'race_id' => $race->id,
			'time' => 40805,
			'racer_id' => $racerIds['Donald']
		));
		// Ruth stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 16,
			'race_id' => $race->id,
			'time' => 89146,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 17,
			'race_id' => $race->id,
			'time' => 40513,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 18,
			'race_id' => $race->id,
			'time' => 41014,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 19,
			'race_id' => $race->id,
			'time' => 41872,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 20,
			'race_id' => $race->id,
			'time' => 39392,
			'racer_id' => $racerIds['Ruth']
		));
		// Keith stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 21,
			'race_id' => $race->id,
			'time' => 61373,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 22,
			'race_id' => $race->id,
			'time' => 33221,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 23,
			'race_id' => $race->id,
			'time' => 33186,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 24,
			'race_id' => $race->id,
			'time' => 33248,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 25,
			'race_id' => $race->id,
			'time' => 32481,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 26,
			'race_id' => $race->id,
			'time' => 32723,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 27,
			'race_id' => $race->id,
			'time' => 31986,
			'racer_id' => $racerIds['Keith']
		));
		// Edward stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 28,
			'race_id' => $race->id,
			'time' => 69414,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 29,
			'race_id' => $race->id,
			'time' => 35521,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 30,
			'race_id' => $race->id,
			'time' => 35095,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 31,
			'race_id' => $race->id,
			'time' => 34911,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 32,
			'race_id' => $race->id,
			'time' => 34400,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 33,
			'race_id' => $race->id,
			'time' => 36569,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 34,
			'race_id' => $race->id,
			'time' => 35712,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 35,
			'race_id' => $race->id,
			'time' => 35043,
			'racer_id' => $racerIds['Edward']
		));
		// Donald stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 36,
			'race_id' => $race->id,
			'time' => 91584,
			'racer_id' => $racerIds['Donald']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 37,
			'race_id' => $race->id,
			'time' => 38073,
			'racer_id' => $racerIds['Donald']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 38,
			'race_id' => $race->id,
			'time' => 36663,
			'racer_id' => $racerIds['Donald']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 39,
			'race_id' => $race->id,
			'time' => 38165,
			'racer_id' => $racerIds['Donald']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 40,
			'race_id' => $race->id,
			'time' => 39408,
			'racer_id' => $racerIds['Donald']
		));
		// Ruth stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 41,
			'race_id' => $race->id,
			'time' => 66786,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 42,
			'race_id' => $race->id,
			'time' => 37357,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 43,
			'race_id' => $race->id,
			'time' => 37574,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 44,
			'race_id' => $race->id,
			'time' => 36951,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 45,
			'race_id' => $race->id,
			'time' => 37721,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 46,
			'race_id' => $race->id,
			'time' => 36086,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 47,
			'race_id' => $race->id,
			'time' => 35290,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 48,
			'race_id' => $race->id,
			'time' => 36836,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 49,
			'race_id' => $race->id,
			'time' => 37294,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 50,
			'race_id' => $race->id,
			'time' => 35047,
			'racer_id' => $racerIds['Ruth']
		));
		// Keith stint 3
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 51,
			'race_id' => $race->id,
			'time' => 57787,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 52,
			'race_id' => $race->id,
			'time' => 31673,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 53,
			'race_id' => $race->id,
			'time' => 32034,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 54,
			'race_id' => $race->id,
			'time' => 33487,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 55,
			'race_id' => $race->id,
			'time' => 33825,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 56,
			'race_id' => $race->id,
			'time' => 32389,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 57,
			'race_id' => $race->id,
			'time' => 35913,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 58,
			'race_id' => $race->id,
			'time' => 32298,
			'racer_id' => $racerIds['Keith']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 59,
			'race_id' => $race->id,
			'time' => 32899,
			'racer_id' => $racerIds['Keith']
		));
		// Edward stint 3
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 60,
			'race_id' => $race->id,
			'time' => 54207,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 61,
			'race_id' => $race->id,
			'time' => 33609,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 62,
			'race_id' => $race->id,
			'time' => 33687,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 63,
			'race_id' => $race->id,
			'time' => 33678,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 64,
			'race_id' => $race->id,
			'time' => 33726,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 65,
			'race_id' => $race->id,
			'time' => 34688,
			'racer_id' => $racerIds['Edward']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 66,
			'race_id' => $race->id,
			'time' => 33133,
			'racer_id' => $racerIds['Edward']
		));
		// end Team Pizza

		// Mostly New Guys
		// Ruth stint 1
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 1,
			'race_id' => $race->id,
			'time' => 43570,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 2,
			'race_id' => $race->id,
			'time' => 38096,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 3,
			'race_id' => $race->id,
			'time' => 37510,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 4,
			'race_id' => $race->id,
			'time' => 37127,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 5,
			'race_id' => $race->id,
			'time' => 36347,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 6,
			'race_id' => $race->id,
			'time' => 36678,
			'racer_id' => $racerIds['Ruth']
		));
		// Melissa stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 7,
			'race_id' => $race->id,
			'time' => 71217,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 8,
			'race_id' => $race->id,
			'time' => 35621,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 9,
			'race_id' => $race->id,
			'time' => 35291,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 10,
			'race_id' => $race->id,
			'time' => 35402,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 11,
			'race_id' => $race->id,
			'time' => 35422,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 12,
			'race_id' => $race->id,
			'time' => 38282,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 13,
			'race_id' => $race->id,
			'time' => 35043,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 14,
			'race_id' => $race->id,
			'time' => 34708,
			'racer_id' => $racerIds['Melissa']
		));
		// Shawn stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 15,
			'race_id' => $race->id,
			'time' => 108334,
			'racer_id' => $racerIds['Shawn']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 16,
			'race_id' => $race->id,
			'time' => 46153,
			'racer_id' => $racerIds['Shawn']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 17,
			'race_id' => $race->id,
			'time' => 41258,
			'racer_id' => $racerIds['Shawn']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 18,
			'race_id' => $race->id,
			'time' => 40848,
			'racer_id' => $racerIds['Shawn']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 19,
			'race_id' => $race->id,
			'time' => 41454,
			'racer_id' => $racerIds['Shawn']
		));
		// Earl stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 20,
			'race_id' => $race->id,
			'time' => 72905,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 21,
			'race_id' => $race->id,
			'time' => 36409,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 22,
			'race_id' => $race->id,
			'time' => 35268,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 23,
			'race_id' => $race->id,
			'time' => 34609,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 24,
			'race_id' => $race->id,
			'time' => 34819,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 25,
			'race_id' => $race->id,
			'time' => 33957,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 26,
			'race_id' => $race->id,
			'time' => 34277,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 27,
			'race_id' => $race->id,
			'time' => 37397,
			'racer_id' => $racerIds['Earl']
		));
		// Ruth stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 28,
			'race_id' => $race->id,
			'time' => 67115,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 29,
			'race_id' => $race->id,
			'time' => 35860,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 30,
			'race_id' => $race->id,
			'time' => 36222,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 31,
			'race_id' => $race->id,
			'time' => 35590,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 32,
			'race_id' => $race->id,
			'time' => 34809,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 33,
			'race_id' => $race->id,
			'time' => 34829,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 34,
			'race_id' => $race->id,
			'time' => 38139,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 35,
			'race_id' => $race->id,
			'time' => 36146,
			'racer_id' => $racerIds['Ruth']
		));
		// Melissa stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 36,
			'race_id' => $race->id,
			'time' => 65217,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 37,
			'race_id' => $race->id,
			'time' => 33769,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 38,
			'race_id' => $race->id,
			'time' => 38000,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 39,
			'race_id' => $race->id,
			'time' => 36768,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 40,
			'race_id' => $race->id,
			'time' => 35370,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 41,
			'race_id' => $race->id,
			'time' => 33652,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 42,
			'race_id' => $race->id,
			'time' => 34303,
			'racer_id' => $racerIds['Melissa']
		));
		// Shawn stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 43,
			'race_id' => $race->id,
			'time' => 76585,
			'racer_id' => $racerIds['Shawn']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 44,
			'race_id' => $race->id,
			'time' => 41338,
			'racer_id' => $racerIds['Shawn']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 45,
			'race_id' => $race->id,
			'time' => 37898,
			'racer_id' => $racerIds['Shawn']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 46,
			'race_id' => $race->id,
			'time' => 37953,
			'racer_id' => $racerIds['Shawn']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 47,
			'race_id' => $race->id,
			'time' => 36636,
			'racer_id' => $racerIds['Shawn']
		));
		// Earl stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 48,
			'race_id' => $race->id,
			'time' => 65760,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 49,
			'race_id' => $race->id,
			'time' => 33799,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 50,
			'race_id' => $race->id,
			'time' => 34485,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 51,
			'race_id' => $race->id,
			'time' => 33110,
			'racer_id' => $racerIds['Earl']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 52,
			'race_id' => $race->id,
			'time' => 32312,
			'racer_id' => $racerIds['Earl']
		));
		// Ruth stint 3
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 53,
			'race_id' => $race->id,
			'time' => 65760,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 54,
			'race_id' => $race->id,
			'time' => 33768,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 55,
			'race_id' => $race->id,
			'time' => 34364,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 56,
			'race_id' => $race->id,
			'time' => 32956,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 57,
			'race_id' => $race->id,
			'time' => 33402,
			'racer_id' => $racerIds['Ruth']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 58,
			'race_id' => $race->id,
			'time' => 33264,
			'racer_id' => $racerIds['Ruth']
		));
		// Melissa stint 3
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 59,
			'race_id' => $race->id,
			'time' => 55237,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 60,
			'race_id' => $race->id,
			'time' => 35175,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 61,
			'race_id' => $race->id,
			'time' => 32147,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 62,
			'race_id' => $race->id,
			'time' => 32832,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 63,
			'race_id' => $race->id,
			'time' => 32456,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 64,
			'race_id' => $race->id,
			'time' => 32176,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 65,
			'race_id' => $race->id,
			'time' => 31564,
			'racer_id' => $racerIds['Melissa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 66,
			'race_id' => $race->id,
			'time' => 31366,
			'racer_id' => $racerIds['Melissa']
		));
		// end Mostly New Guys

		// start Team Mongolia
		// Theresa stint 1
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 1,
			'race_id' => $race->id,
			'time' => 45339,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 2,
			'race_id' => $race->id,
			'time' => 37517,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 3,
			'race_id' => $race->id,
			'time' => 36290,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 4,
			'race_id' => $race->id,
			'time' => 37210,
			'racer_id' => $racerIds['Theresa']
		));
		// G stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 5,
			'race_id' => $race->id,
			'time' => 83979,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 6,
			'race_id' => $race->id,
			'time' => 36667,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 7,
			'race_id' => $race->id,
			'time' => 35992,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 8,
			'race_id' => $race->id,
			'time' => 36683,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 9,
			'race_id' => $race->id,
			'time' => 36900,
			'racer_id' => $racerIds['Jason']
		));
		// Jessica stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 10,
			'race_id' => $race->id,
			'time' => 94474,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 11,
			'race_id' => $race->id,
			'time' => 43013,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 12,
			'race_id' => $race->id,
			'time' => 40620,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 13,
			'race_id' => $race->id,
			'time' => 38248,
			'racer_id' => $racerIds['Jessica']
		));
		// Jimmy stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 14,
			'race_id' => $race->id,
			'time' => 64080,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 15,
			'race_id' => $race->id,
			'time' => 37095,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 16,
			'race_id' => $race->id,
			'time' => 34041,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 17,
			'race_id' => $race->id,
			'time' => 38308,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 18,
			'race_id' => $race->id,
			'time' => 36149,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 19,
			'race_id' => $race->id,
			'time' => 32801,
			'racer_id' => $racerIds['Jimmy']
		));
		// Theresa stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 20,
			'race_id' => $race->id,
			'time' => 77578,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 21,
			'race_id' => $race->id,
			'time' => 35182,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 22,
			'race_id' => $race->id,
			'time' => 40385,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 23,
			'race_id' => $race->id,
			'time' => 36198,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 24,
			'race_id' => $race->id,
			'time' => 34592,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 25,
			'race_id' => $race->id,
			'time' => 35663,
			'racer_id' => $racerIds['Theresa']
		));
		// G stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 26,
			'race_id' => $race->id,
			'time' => 60666,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 27,
			'race_id' => $race->id,
			'time' => 33751,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 28,
			'race_id' => $race->id,
			'time' => 33972,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 29,
			'race_id' => $race->id,
			'time' => 34116,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 30,
			'race_id' => $race->id,
			'time' => 34203,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 31,
			'race_id' => $race->id,
			'time' => 33992,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 32,
			'race_id' => $race->id,
			'time' => 32932,
			'racer_id' => $racerIds['Jason']
		));
		// Jessica stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 33,
			'race_id' => $race->id,
			'time' => 60887,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 34,
			'race_id' => $race->id,
			'time' => 36037,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 35,
			'race_id' => $race->id,
			'time' => 36142,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 36,
			'race_id' => $race->id,
			'time' => 35747,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 37,
			'race_id' => $race->id,
			'time' => 35017,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 38,
			'race_id' => $race->id,
			'time' => 34449,
			'racer_id' => $racerIds['Jessica']
		));
		// Jimmy stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 39,
			'race_id' => $race->id,
			'time' => 58459,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 40,
			'race_id' => $race->id,
			'time' => 32547,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 41,
			'race_id' => $race->id,
			'time' => 32992,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 42,
			'race_id' => $race->id,
			'time' => 33854,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 43,
			'race_id' => $race->id,
			'time' => 33356,
			'racer_id' => $racerIds['Jimmy']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 44,
			'race_id' => $race->id,
			'time' => 31872,
			'racer_id' => $racerIds['Jimmy']
		));
		// Theresa stint 3
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 45,
			'race_id' => $race->id,
			'time' => 83584,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 46,
			'race_id' => $race->id,
			'time' => 34999,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 47,
			'race_id' => $race->id,
			'time' => 33957,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 48,
			'race_id' => $race->id,
			'time' => 36369,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 49,
			'race_id' => $race->id,
			'time' => 59045,
			'racer_id' => $racerIds['Theresa']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 50,
			'race_id' => $race->id,
			'time' => 34730,
			'racer_id' => $racerIds['Theresa']
		));
		// G stint 3
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 51,
			'race_id' => $race->id,
			'time' => 56353,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 52,
			'race_id' => $race->id,
			'time' => 32650,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 53,
			'race_id' => $race->id,
			'time' => 32904,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 54,
			'race_id' => $race->id,
			'time' => 33933,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 55,
			'race_id' => $race->id,
			'time' => 33248,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 56,
			'race_id' => $race->id,
			'time' => 33210,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 57,
			'race_id' => $race->id,
			'time' => 33466,
			'racer_id' => $racerIds['Jason']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 58,
			'race_id' => $race->id,
			'time' => 33227,
			'racer_id' => $racerIds['Jason']
		));
		// Jessica stint 3
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 59,
			'race_id' => $race->id,
			'time' => 65291,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 60,
			'race_id' => $race->id,
			'time' => 33227,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 60,
			'race_id' => $race->id,
			'time' => 33227,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 61,
			'race_id' => $race->id,
			'time' => 33330,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 62,
			'race_id' => $race->id,
			'time' => 33313,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 63,
			'race_id' => $race->id,
			'time' => 34432,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 64,
			'race_id' => $race->id,
			'time' => 32673,
			'racer_id' => $racerIds['Jessica']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 65,
			'race_id' => $race->id,
			'time' => 34228,
			'racer_id' => $racerIds['Jessica']
		));
		// end Team Mongolia

		// start Schnell
		// Robert stint 1
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 1,
			'race_id' => $race->id,
			'time' => 48184,
			'racer_id' => $racerIds['Robert']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 2,
			'race_id' => $race->id,
			'time' => 44186,
			'racer_id' => $racerIds['Robert']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 3,
			'race_id' => $race->id,
			'time' => 44837,
			'racer_id' => $racerIds['Robert']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 4,
			'race_id' => $race->id,
			'time' => 44232,
			'racer_id' => $racerIds['Robert']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 5,
			'race_id' => $race->id,
			'time' => 42995,
			'racer_id' => $racerIds['Robert']
		));
		// Jon stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 6,
			'race_id' => $race->id,
			'time' => 89103,
			'racer_id' => $racerIds['Jon']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 7,
			'race_id' => $race->id,
			'time' => 36454,
			'racer_id' => $racerIds['Jon']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 8,
			'race_id' => $race->id,
			'time' => 36838,
			'racer_id' => $racerIds['Jon']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 9,
			'race_id' => $race->id,
			'time' => 37884,
			'racer_id' => $racerIds['Jon']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 10,
			'race_id' => $race->id,
			'time' => 37828,
			'racer_id' => $racerIds['Jon']
		));
		// David stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 11,
			'race_id' => $race->id,
			'time' => 72974,
			'racer_id' => $racerIds['David']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 12,
			'race_id' => $race->id,
			'time' => 39797,
			'racer_id' => $racerIds['David']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 13,
			'race_id' => $race->id,
			'time' => 38871,
			'racer_id' => $racerIds['David']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 14,
			'race_id' => $race->id,
			'time' => 37373,
			'racer_id' => $racerIds['David']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 15,
			'race_id' => $race->id,
			'time' => 39006,
			'racer_id' => $racerIds['David']
		));
		// Trey stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 16,
			'race_id' => $race->id,
			'time' => 72974,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 17,
			'race_id' => $race->id,
			'time' => 36719,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 18,
			'race_id' => $race->id,
			'time' => 34195,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 19,
			'race_id' => $race->id,
			'time' => 32799,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 20,
			'race_id' => $race->id,
			'time' => 33479,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 21,
			'race_id' => $race->id,
			'time' => 32761,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 22,
			'race_id' => $race->id,
			'time' => 32205,
			'racer_id' => $racerIds['Trey']
		));
		// Jean stint 1
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 23,
			'race_id' => $race->id,
			'time' => 64391,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 24,
			'race_id' => $race->id,
			'time' => 33577,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 25,
			'race_id' => $race->id,
			'time' => 33528,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 26,
			'race_id' => $race->id,
			'time' => 34011,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 27,
			'race_id' => $race->id,
			'time' => 33078,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 28,
			'race_id' => $race->id,
			'time' => 33093,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 29,
			'race_id' => $race->id,
			'time' => 31666,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 30,
			'race_id' => $race->id,
			'time' => 31715,
			'racer_id' => $racerIds['Jean']
		));
		// Robert stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 31,
			'race_id' => $race->id,
			'time' => 70231,
			'racer_id' => $racerIds['Robert']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 32,
			'race_id' => $race->id,
			'time' => 39254,
			'racer_id' => $racerIds['Robert']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 33,
			'race_id' => $race->id,
			'time' => 41137,
			'racer_id' => $racerIds['Robert']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 34,
			'race_id' => $race->id,
			'time' => 40111,
			'racer_id' => $racerIds['Robert']
		));
		// Jon stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 35,
			'race_id' => $race->id,
			'time' => 71000,
			'racer_id' => $racerIds['Jon']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 36,
			'race_id' => $race->id,
			'time' => 33542,
			'racer_id' => $racerIds['Jon']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 37,
			'race_id' => $race->id,
			'time' => 35346,
			'racer_id' => $racerIds['Jon']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 38,
			'race_id' => $race->id,
			'time' => 37273,
			'racer_id' => $racerIds['Jon']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 39,
			'race_id' => $race->id,
			'time' => 36612,
			'racer_id' => $racerIds['Jon']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 40,
			'race_id' => $race->id,
			'time' => 39413,
			'racer_id' => $racerIds['Jon']
		));
		// David stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 41,
			'race_id' => $race->id,
			'time' => 102682,
			'racer_id' => $racerIds['David']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 42,
			'race_id' => $race->id,
			'time' => 38964,
			'racer_id' => $racerIds['David']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 43,
			'race_id' => $race->id,
			'time' => 36998,
			'racer_id' => $racerIds['David']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 44,
			'race_id' => $race->id,
			'time' => 37927,
			'racer_id' => $racerIds['David']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 45,
			'race_id' => $race->id,
			'time' => 36295,
			'racer_id' => $racerIds['David']
		));
		// Trey stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 46,
			'race_id' => $race->id,
			'time' => 57447,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 47,
			'race_id' => $race->id,
			'time' => 32463,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 48,
			'race_id' => $race->id,
			'time' => 31796,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 49,
			'race_id' => $race->id,
			'time' => 31655,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 50,
			'race_id' => $race->id,
			'time' => 31376,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 51,
			'race_id' => $race->id,
			'time' => 31903,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 52,
			'race_id' => $race->id,
			'time' => 31772,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 53,
			'race_id' => $race->id,
			'time' => 31248,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 54,
			'race_id' => $race->id,
			'time' => 59851,
			'racer_id' => $racerIds['Trey']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 55,
			'race_id' => $race->id,
			'time' => 31923,
			'racer_id' => $racerIds['Trey']
		));
		// Jean stint 2
		Lap::create(array(
			'has_driver_change' => true,
			'number' => 56,
			'race_id' => $race->id,
			'time' => 68601,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 57,
			'race_id' => $race->id,
			'time' => 32114,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 58,
			'race_id' => $race->id,
			'time' => 34016,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 59,
			'race_id' => $race->id,
			'time' => 32029,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 60,
			'race_id' => $race->id,
			'time' => 31607,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 61,
			'race_id' => $race->id,
			'time' => 30997,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 62,
			'race_id' => $race->id,
			'time' => 31921,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 63,
			'race_id' => $race->id,
			'time' => 31028,
			'racer_id' => $racerIds['Jean']
		));
		Lap::create(array(
			'has_driver_change' => false,
			'number' => 64,
			'race_id' => $race->id,
			'time' => 32867,
			'racer_id' => $racerIds['Jean']
		));
		// end Schnell
	}
}
