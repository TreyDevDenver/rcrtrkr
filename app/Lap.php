<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Lap extends Model {

	use PresentableTrait;

    protected $presenter = 'App\Presenters\LapPresenter';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'laps';

	public function race()
	{
		return $this->belongsTo('App\Race');
	}

	public function racer()
	{
		return $this->belongsTo('App\Racer');
	}
}