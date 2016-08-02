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
		$input = Input::all();

		if(!isset($input['classCheck'])) {
			$error = "You must select one or more classes this spell with belong to.";
			return Redirect::back()->withError($error);
		} elseif(!isset($input['componentCheck']) ) {
			$error = "You must select one or more components this spell will use.";
			return Redirect::back()->withError($error);
		}

		var_dump($input);

		$spell = new Spells;
		$spell->spell_name = $input['nameText'];
		$spell->spell_level = $input['level'];

		switch ($input['level']) {
			// Handle 1st, 2nd, 3rd
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

		if($input['ritualOption'] == 'yes') {
			$type = $type." (ritual)";
		}

		$spell->spell_type = $type;
		$spell->casting_time = $input['castingText'];
		$spell->spell_range = $input['rangeText'];

		$components = implode(", ", $input['componentCheck']);

		if($input['componentsText'] != '') {
			$components = $components.' ('.$input['componentsText'].')';
		}

		$spell->components = $components;
		$spell->duration = $input['durationText'];
		$spell->description = $input['descriptionText'];
		$spell->higher_levels = $input['higherText'];
		$spell->enabled = 0;

		$spell->save();

		foreach($input['classCheck'] as $check) {
			$class = Classes::where('class_name', $check)->first();
			
			$class_spell = new ClassSpell;
			$class_spell->class_id = $class->class_id;
			$class_spell->spell_id = $spell->spell_id;

			$class_spell->save();
		}

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

		$spell = Spells::where('spell_id', $id)->first();

		$levels = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
		$types = ['Abjuration', 'Conjuration', 'Divination', 'Enchantment', 'Evocation', 'Illusion', 'Necromancy', 'Transmutation'];
		$components = ['V', 'S', 'M'];

		return View::make('admin.spellEdit')->with(compact('races', 'classes', 'spell', 'levels', 'types', 'components'));
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
		dd('in the update function');
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
		dd('in the destroy function');
	}
}