<?php

class Subraces extends \Eloquent {
	protected $table = 'subraces';
    protected $primaryKey = "subrace_id";
	public $timestamps = false;

	/**
	 * A subrace belongs to a race
	 */
	// public function races(){
	// 	return $this->belongsTo('Races', 'race_id');
	// }
}