<?php

class Races extends \Eloquent {
	protected $fillable = [];

	protected $table = 'races';
    protected $primaryKey = "race_id";
	public $timestamps = false;

	/**
	 * A race has many subraces
	 */
	// public function subraces(){
	// 	return $this->hasMany('Subraces', 'race_id');
	// }
}