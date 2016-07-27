<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::route('dnd.index');
});

Route::get('/dnd', array('as' => 'dnd.index', 'uses' => 'ResourceController@index'));
Route::get('/dnd/basic-rules', array('as' => 'dnd.rules', 'uses' => 'ResourceController@rules'));

Route::get('/dnd/race/{name}', array('as' => 'dnd.race', 'uses' => 'RaceController@show'));
Route::get('/dnd/class/{name}', array('as' => 'dnd.class', 'uses' => 'ClassController@show'));

Route::get('/dnd/spell-list', array('as' => 'dnd.spells', 'uses' => 'SpellController@index' ));
Route::get('/dnd/monster-list', array('as' => 'dnd.monsters', 'uses' => 'MonsterController@index' ));