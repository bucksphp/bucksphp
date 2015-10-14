<?php

/**
In this file we'll test how sessions work in PHP
*/

// to use session data, we first have to call session_start()
// note that this must be called before any content is printed to the browser
session_start();

if ( isset($_GET['action']) && $_GET['action'] == 'destroy' ) {
  // this will destroy all data stored in the session and start a new one
	session_destroy();
	session_start();
}

// set a session variable
$_SESSION['name'] = 'ken';

// check if count session variable exists
// if it does, increment it
if ( isset($_SESSION['count']) ) {
	$_SESSION['count']++;
}
// if it doesn't, create it
else {
	$_SESSION['count'] = 1;
}

// print count variable
echo $_SESSION['count'] . '<br>';

// this is where session data is saved to disk
echo session_save_path() . '<br>';

// say hello to user
echo 'hello, ' . $_SESSION['name'];