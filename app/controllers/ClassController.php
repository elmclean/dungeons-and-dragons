<?php

class ClassController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /class
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /class/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /class
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /class/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{
		// grab everything for side links
		$races = Races::get();
		$classes = Classes::get();

		// singular class
		$class = Classes::where('class_name', $name)->first();
		return View::make('class')->with(compact('races', 'classes', 'class'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /class/{id}/edit
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
	 * PUT /class/{id}
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
	 * DELETE /class/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}