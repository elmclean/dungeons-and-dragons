<?php

class Classes extends \Eloquent {
	protected $fillable = [];
	
	protected $table = 'classes';
    protected $primaryKey = "class_id";
	public $timestamps = false;

	/**
	 * A class has many spells
	 */
	// public function spells(){
	// 	return $this->hasMany('Investigator','application_id');
	// }
}