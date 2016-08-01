<?php

class Admins extends \Eloquent {
	protected $fillable = [];
	
	protected $table = 'Admins';
    protected $primaryKey = "admin_id";
	public $timestamps = false;

	/**
	 * A class has many spells
	 */
	// public function spells(){
	// 	return $this->hasMany('Investigator','application_id');
	// }
}