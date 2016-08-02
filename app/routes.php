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

Route::get('/dnd/login', array('as' => 'dnd.login', 'uses' => 'ResourceController@loginIndex'));
Route::post('/dnd/login', array('as' => 'function.login', 'uses' => 'ResourceController@login'));
Route::get('/dnd/logout', array('as' => 'function.logout', 'uses' => 'ResourceController@logout'));

Route::get('/dnd/basic-rules', array('as' => 'dnd.rules', 'uses' => 'ResourceController@rules'));

Route::get('/dnd/race/{name}', array('as' => 'dnd.race', 'uses' => 'RaceController@show'));
Route::get('/dnd/class/{name}', array('as' => 'dnd.class', 'uses' => 'ClassController@show'));

Route::get('/dnd/spell-list', array('as' => 'dnd.spells', 'uses' => 'SpellController@index'));
Route::get('/dnd/monster-list', array('as' => 'dnd.monsters', 'uses' => 'MonsterController@index'));
Route::get('/dnd/item-list', array('as' => 'dnd.items', 'uses' => 'ItemsController@index'));

Route::get('/dnd/homebrew', array('as' => 'dnd.homebrew', 'uses' => 'HomebrewController@index'));
Route::post('/dnd/homebrew/spell', array('as' => 'spell.store', 'uses' => 'SpellController@store'));


Route::group(array('before' => 'userIsAdmin'), function(){
	Route::get('/dnd/admin/spell-list', array('as' => 'admin.spells', 'uses' => 'SpellController@adminIndex'));
	Route::get('dnd/admin/spell-list/{id}', array('as' => 'spell.show', 'uses' => 'SpellController@show'));
	Route::post('dnd/admin/spell-list/{id}/update', array('as' => 'spell.update', 'uses' => 'SpellController@update'));
	Route::delete('dnd/admin/spell-list/{id}/delete', array('as' => 'spell.destroy', 'uses' => 'SpellController@destroy'));
});







