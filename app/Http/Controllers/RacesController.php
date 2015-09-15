<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Race as Race;

class RacesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('race.index', array(
			'races' => Race::paginate(15)
		));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function visualize($id) {
		$race = Race::findOrFail($id);
		//var_dump($race->laps);
		return view('race.visualize', array(
			'race' => $race
		));
	}

	public function lapgraph($id) {
		$race = Race::findOrFail($id);
		return view('race.lapgraph', array(
			'race' => $race
		));
	}

	public function scatter($id) {
		$race = Race::findOrFail($id);
		return view('race.scatter', array(
			'race' => $race
		));
	}
}
