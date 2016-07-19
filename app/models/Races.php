<?php

class Races extends \Eloquent {
	protected $fillable = [];

	protected $table = 'races';
    protected $primaryKey = "id";
	public $timestamps = false;

	/**
	 * A race has many subraces
	 */
	// public function subraces(){
	// 	return $this->hasMany('Investigator','application_id');
	// }
}