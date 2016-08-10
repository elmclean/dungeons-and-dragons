<?php

class RaceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /race
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /race/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /race
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /race/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{
		// grab everything for side links
		$races = Races::get();
		$classes = Classes::get();

		// singular race with associated subrace
		$race = Races::where('race_name', $name)->first();
		$subraces = Subraces::where('race_id', $race->race_id)->get();
		
		return View::make('race')->with(compact('races', 'classes', 'race', 'subraces'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /race/{id}/edit
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
	 * PUT /race/{id}
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
	 * DELETE /race/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}