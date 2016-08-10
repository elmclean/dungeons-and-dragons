<?php

class RandomController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /random
	 *
	 * @return Response
	 */
	public function encounterIndex()
	{
		// grab everything for side links
		$races = Races::get();
		$classes = Classes::get();

		return View::make('encounter')->with(compact('races', 'classes'));
	}

	/**
	 * Display a listing of the resource.
	 * GET /random
	 *
	 * @return Response
	 */
	public function magicIndex()
	{
		// grab everything for side links
		$races = Races::get();
		$classes = Classes::get();

		// for select box values
		$rarity = ['Common', 'Uncommon', 'Rare', 'Very Rare', 'Legendary'];
		$types = ['Armor', 'Potion', 'Ring', 'Rod', 'Scroll', 'Staff', 'Wand', 'Weapon', 'Wondrous Item'];

		$items = MagicItems::all();  // select all magic items

		return View::make('magicDrop')->with(compact('races', 'classes', 'items', 'rarity', 'types'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /random
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /random/{id}
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
	 * GET /random/{id}/edit
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
	 * PUT /random/{id}
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
	 * DELETE /random/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}