<?php

class Subraces extends \Eloquent {
	protected $table = 'subraces';
    protected $primaryKey = "id";
	public $timestamps = false;

	/**
	 * A subrace has many ?
	 */
	// public function investigator(){
	// 	return $this->hasMany('Investigator','application_id');
	// }
}