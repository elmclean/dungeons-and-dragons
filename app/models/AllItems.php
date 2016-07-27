<?php

class AllItems extends \Eloquent {
	protected $fillable = [];
	
	protected $table = 'all_items';
    protected $primaryKey = "item_id";
	public $timestamps = false;

	/**
	 * A class has many spells
	 */
	// public function spells(){
	// 	return $this->hasMany('Investigator','application_id');
	// }
}