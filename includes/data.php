<?php

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

// select all products from database
$sql = 'SELECT * FROM products ORDER BY name';
$result = $db->query($sql);

// store products in $shirts array
$shirts = array();

while ( $row = $result->fetch_array(MYSQL_ASSOC) ) {
	$shirts[] = $row;
}

?>