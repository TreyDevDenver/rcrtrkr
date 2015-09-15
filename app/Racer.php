<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Racer extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'racers';

	public function team()
	{
		return $this->belongsTo('App\Team');
	}

	public function laps()
	{
		return $this->hasMany('App\Lap');
	}
}