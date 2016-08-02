<?php

class ClassSpell extends \Eloquent {
	protected $fillable = [];
	
	protected $table = 'class_spells';
	public $timestamps = false;

	/**
	 * A class has many spells
	 */
	// public function spells(){
	// 	return $this->hasMany('Investigator','application_id');
	// }
}