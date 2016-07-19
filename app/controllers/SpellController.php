<?php

class SpellController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /spell
	 *
	 * @return Response
	 */
	public function index()
	{
		// grab everything for side links
		$races = Races::get();
		$classes = Classes::get();

		// grab all spells
		$spells = Spells::get();

		return View::make('spells')->with(compact('races', 'classes', 'spells'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /spell/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /spell
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /spell/{id}
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
	 * GET /spell/{id}/edit
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
	 * PUT /spell/{id}
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
	 * DELETE /spell/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}