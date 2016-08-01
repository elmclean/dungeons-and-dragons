<?php

/*
	Just a place to store helper functions
*/


/**
*	Log in the admin
*
*	@return the user's account level as an integer
*/
function authenticate($username, $password) {
	$admin = Admins::where('admin_username', $username);
	$admin = Admins::where(['admin_username' => $username, 'admin_password' => $password])->first();

	if(!empty($admin)) {
		Session::put('admin', true);
		Session::put('username', $username);
	}
}

/**
 * Returns the authenticated user's ID as specified in the Users Table
 *
 * @return the user's ID
 */
function userIsAdmin() {
	if(Session::get('admin')) {
		return true;
	} else {
		return false;
	}
}