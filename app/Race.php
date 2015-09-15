<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'races';


	public function laps() {
		return $this->hasMany('App\Lap');
	}
}