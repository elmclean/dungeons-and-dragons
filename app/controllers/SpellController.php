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
		$spells = Spells::where('enabled', 1)->get();

		return View::make('spells')->with(compact('races', 'classes', 'spells'));
	}

	/**
	 * Display a listing of the resource.
	 * GET /spell
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
		// grab everything for side links
		$races = Races::get();
		$classes = Classes::get();

		// grab all spells
		$spells = Spells::where('enabled', 0)->get();

		return View::make('admin.spells')->with(compact('races', 'classes', 'spells'));
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
		$input = Input::all();	// get all inputs from the form

		// if no checkbox options are checked redirrect back to the form with errors
		if(!isset($input['classCheck'])) {
			$error = "You must select one or more classes this spell with belong to.";
			return Redirect::back()->withError($error);
		} elseif(!isset($input['componentCheck']) ) {
			$error = "You must select one or more components this spell will use.";
			return Redirect::back()->withError($error);
		}

		// create a new Spells object
		$spell = new Spells;
		$spell->spell_name = $input['nameText'];
		$spell->spell_level = $input['level'];

		// add ordinal indicators to the level numbers for spell_type field
		switch ($input['level']) {
			// handle 1st, 2nd, 3rd
			case "0": $type = strtolower($input['type']).' cantrip';
				break;
			case "1": $type = $input['level'].'st-level '.strtolower($input['type']);
				break;
			case "2": $type = $input['level'].'nd-level '.strtolower($input['type']);
				break;
			case "3": $type = $input['level'].'rd-level '.strtolower($input['type']);
				break;
			default: $type = $input['level'].'th-level '.strtolower($input['type']);
		}

		// check if spell can be cast as a ritual for spell_type field
		if($input['ritualOption'] == 'yes') {
			$type = $type." (ritual)";
		}

		$spell->spell_type = $type;
		$spell->casting_time = $input['castingText'];
		$spell->spell_range = $input['rangeText'];

		$components = implode(", ", $input['componentCheck']);	// create array from string

		// if text box is not empty, add to components field
		if($input['componentsText'] != '') {
			$components = $components.' ('.$input['componentsText'].')';
		}

		$spell->components = $components;
		$spell->duration = $input['durationText'];
		$spell->description = $input['descriptionText'];
		$spell->higher_levels = $input['higherText'];
		$spell->enabled = 0;  // set to 0, not visible to regular users

		$spell->save(); // save new entry in the table

		// loop through class checkboxes and create new class_spells table entries 
		foreach($input['classCheck'] as $check) {
			$class = Classes::where('class_name', $check)->first();  // select a class from the table
			
			$class_spell = new ClassSpell;  // create a new ClassSpell object
			$class_spell->class_id = $class->class_id;
			$class_spell->spell_id = $spell->spell_id;

			$class_spell->save();  // save new entry in the table
		}

		// success message
		$message = "The spell ".$spell->spell_name." has been submitted. If it is approved by the site admins it will be available on the spell list page";
		return Redirect::route('dnd.homebrew')->withMessage($message);
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
		// grab everything for side links
		$races = Races::get();
		$classes = Classes::get();

		$spell = Spells::where('spell_id', $id)->first();  // select a spell from the table

		$type = explode(" ", $spell->spell_type);  // split spell_type string into an array
		if(strcspn($spell->spell_type, '0123456789') != strlen($spell->spell_type)) {
			$typeName = ucfirst($type[1]);  // if spell_type string contains a number, grab the 2nd index
		} else {
			$typeName = ucfirst($type[0]); // else spell_type string doesn't contain a number, grab the 1st index
		}

		// if the spell_type string contains "ritual"
		if (strpos($spell->spell_type, 'ritual') !== FALSE) {
			$ritual = true;
		} else {
			$ritual = false;
		}

		$mainComponents = explode(", ", $spell->components);  // split components string into an array
		$primaryComponents = [];  // create empty array

		// loop through the components array
		foreach($mainComponents as $main) {
			$main = strtok($main, " ");  // remove any text after spaces
			array_push($primaryComponents, $main);  // push string character into the new array
		}

		preg_match('#\((.*?)\)#', $spell->components, $other);  // remove text between "()" into new array
		if(!empty($other)) {  // if new array isn't empty
			$otherComponents = $other[1];  // grab the 2nd index
		} else {  // new array is empty
			$otherComponents = NULL;  // no other components
		}

		$classSpell = ClassSpell::where('spell_id', $spell->spell_id)->get();  // select all class spells from table

		$spellClasses = [];  // create empty array
		// loop through all class spells
		foreach($classSpell as $cs) {
			$class = Classes::where('class_id', $cs->class_id)->first();  // select a class from the table using class spells
			array_push($spellClasses, $class->class_name);  // push class name into the new array
		}

		// define arrays for the static select and checkbox form objects
		$levels = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
		$types = ['Abjuration', 'Conjuration', 'Divination', 'Enchantment', 'Evocation', 'Illusion', 'Necromancy', 'Transmutation'];
		$components = ['V', 'S', 'M'];

		return View::make('admin.spellEdit')->with(compact('races', 'classes', 'spell', 'levels', 'types', 'typeName', 'ritual', 'components', 'primaryComponents', 'otherComponents', 'spellClasses'));
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
	 * Update the specified resource from storage.
	 * PUT /spell/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function publish($id)
	{
		dd('in the publish function');
	}

	/**
	 * Update the specified resource from storage.
	 * PUT /spell/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function unpublish($id)
	{
		dd('in the unpublish function');
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
		$input = Input::all();  // get all inputs from the form

		// if no checkbox options are checked redirrect back to the form with errors
		if(!isset($input['classCheck'])) {
			$error = "You must select one or more classes this spell with belong to.";
			return Redirect::back()->withError($error);
		} elseif(!isset($input['componentCheck']) ) {
			$error = "You must select one or more components this spell will use.";
			return Redirect::back()->withError($error);
		}

		// create a new Spells object
		$spell = Spells::where('spell_id', $id)->first(); // select a spell from the table
		$spell->spell_name = $input['nameText'];
		$spell->spell_level = $input['level'];

		// add ordinal indicators to the level numbers for spell_type field
		switch ($input['level']) {
			// handle 1st, 2nd, 3rd
			case "0": $type = strtolower($input['type']).' cantrip';
				break;
			case "1": $type = $input['level'].'st-level '.strtolower($input['type']);
				break;
			case "2": $type = $input['level'].'nd-level '.strtolower($input['type']);
				break;
			case "3": $type = $input['level'].'rd-level '.strtolower($input['type']);
				break;
			default: $type = $input['level'].'th-level '.strtolower($input['type']);
		}

		// check if spell can be cast as a ritual for spell_type field
		if($input['ritualOption'] == 'yes') {
			$type = $type." (ritual)";
		}

		$spell->spell_type = $type;
		$spell->casting_time = $input['castingText'];
		$spell->spell_range = $input['rangeText'];

		$components = implode(", ", $input['componentCheck']);  // create array from string

		// if text box is not empty, add to components field
		if($input['componentsText'] != '') {
			$components = $components.' ('.$input['componentsText'].')';
		}

		$spell->components = $components;
		$spell->duration = $input['durationText'];
		$spell->description = $input['descriptionText'];
		$spell->higher_levels = $input['higherText'];
		$spell->enabled = 0;  // set to 0, not visible to regular users

		$spell->save();  // update existing entry in the table

		DB::table('class_spells')->where('spell_id', $id)->delete();  // drop previous spell rows from class_spells table

		// loop through class checkboxes and create new class_spells table entries 
		foreach($input['classCheck'] as $check) {
			$class = Classes::where('class_name', $check)->first();  // select a class from the table

			$class_spell = new ClassSpell;  // create a new ClassSpell object
			$class_spell->class_id = $class->class_id;
			$class_spell->spell_id = $spell->spell_id;

			$class_spell->save();  // save new entry in the table
		}

		// success message
		$message = "The spell ".$spell->spell_name." has been updated.";
		return Redirect::route('admin.spells')->withMessage($message);
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
		$spell = Spells::where('spell_id', $id)->first();  // select a spell from the table
		DB::table('class_spells')->where('spell_id', $id)->delete();  // drop spell from class_spells table

		$spell->delete();  // drop spell from the spell table

		// success message
		$message = "The spell ".$spell->spell_name." has been deleted.";		
		return Redirect::back()->withMessage($message);
	}
}