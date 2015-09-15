<?php
namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class LapPresenter extends Presenter {

/**
 * Format lap time from milliseconds to M:SS.sss
 * @return [type] [description]
 */
	public function laptime()
	{
		$seconds = $this->time / 1000;
		$minutes = floor($seconds / 60);
		if ($minutes) {
			$seconds = $seconds - ($minutes * 60);
		}
		$seconds = explode('.', number_format($seconds, 3));
		$seconds = sprintf('%02d.%03d', $seconds[0], $seconds[1]);
		return "$minutes:$seconds";
	}
}