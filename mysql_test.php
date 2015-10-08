<?php

/**
Testing a basic connection to MySQL
*/

// mysql connection variables
$db_user = 'bucksphp';
$db_pass = 'passw0rd';
$db_name = 'bucksphp_store';
$db_host = 'localhost';

// connect to mysql
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

// if a connection error is present, print message and exit
if ( $db->connect_errno ) {
  echo "Failed to connect to database!";
  die;
}

// select all rows from the products table
$sql = 'SELECT * FROM products';
$result = $db->query($sql);

// loop through results and print debug data
while ( $row = $result->fetch_array(MYSQL_ASSOC) ) {
	echo '<pre>';
	print_r($row);
	echo '</pre>';
	echo '<hr>';
}

?>