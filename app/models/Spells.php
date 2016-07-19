<?php

class Spells extends \Eloquent {
	protected $fillable = [];

	protected $table = 'spells_list';
    protected $primaryKey = "spell_id";
	public $timestamps = false;

	/**
	 * A race has many subraces
	 */
	// public function subraces(){
	// 	return $this->hasMany('Investigator','application_id');
	// }
}