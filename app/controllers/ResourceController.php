<?php

class ResourceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /resource
	 *
	 * @return Response
	 */
	public function index()
	{
		// grab everything for side links
		$races = Races::get();
		$classes = Classes::get();

		return View::make('index')->with(compact('races', 'classes'));
	}

	/**
	 * Display a listing of the resource.
	 * GET /resource
	 *
	 * @return Response
	 */
	public function loginIndex()
	{
		return View::make('layouts.login');
	}

	/**
	 * Display a listing of the resource.
	 * GET /resource
	 *
	 * @return Response
	 */
	public function login()
	{
		// grab all form input values
		$inputs = Input::all();

		// call to helpers.php function authenticate()
		authenticate($inputs['username'], $inputs['password']);

		if(userIsAdmin()){  // if authentication successful
			return Redirect::route('dnd.index');
		} else {  // if authentication not successul
			$error = "Incorrect username or password";
			return Redirect::route('dnd.login')->withError($error);
		}
	}

	/**
	 * Display a listing of the resource.
	 * GET /resource
	 *
	 * @return Response
	 */
	public function logout()
	{
		// remove all information from the session
		Session::flush();
		return Redirect::route('dnd.index');
	}

	/**
	 * Display a listing of the resource.
	 * GET /resource
	 *
	 * @return Response
	 */
	public function rules()
	{
		// grab everything for side links
		$races = Races::get();
		$classes = Classes::get();

		return View::make('basic')->with(compact('races', 'classes'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /resource/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /resource
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /resource/{id}
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
	 * GET /resource/{id}/edit
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
	 * PUT /resource/{id}
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
	 * DELETE /resource/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}