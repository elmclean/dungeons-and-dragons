<?php

class MagicItems extends \Eloquent {
	protected $fillable = [];
	
	protected $table = 'magic_items';
    protected $primaryKey = "item_id";
	public $timestamps = false;

	/**
	 * A class has many spells
	 */
	// public function spells(){
	// 	return $this->hasMany('Investigator','application_id');
	// }
}