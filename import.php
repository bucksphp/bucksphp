<?php

/**
This file populates the database with sample data.
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

// starting data for products table
$products = array(
  'butterfly_kittens' => array(
    'name' => "Butterfly Kittens",
    'price' => 15.0,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    'link' => "http://etsy.com/butterfly-kittens-shirt123213",
    'image' => "images/butterfly_kittens.jpg"
  ),
  'cat_tacos' => array(
    'name' => "Cat Tacos",
    'price' => 15.50,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    'link' => "http://etsy.com/cat-tacos",
    'image' => "images/cat_tacos.jpg"
  ),
  'cool_cat_sweatshirt' => array(
    'name' => "Cool Cat Sweatshirt",
    'price' => 30.00,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/cool_cat_sweatshirt.jpg"
  ),
  'freaky_cat' => array(
    'name' => "Freaky Cat",
    'price' => 18.00,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/freaky_cat.jpg"
  ),
  'galaxy_cat' => array(
    'name' => "Galaxy Cat",
    'price' => 18.00,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/galaxy_cat.jpg"
  ),
  'hero_cat' => array(
    'name' => "Hero Cat",
    'price' => 18.00,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/hero_cat.jpg"
  ),
  'karate_cat' => array(
    'name' => "Karate Cat",
    'price' => 18.50,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/karate_cat.jpg"
  ),
  'keyboard_cats' => array(
    'name' => "Keyboard Cats",
    'price' => 15.50,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/keyboard_cats.jpg"
  ),
  'laser_cat' => array(
    'name' => "Laser Cat",
    'price' => 15,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/laser_cat.jpg"
  ),
  'nirvana_cat' => array(
    'name' => "Nirvana Cat",
    'price' => 17,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/nirvana_cat.jpg"
  ),
  'paws' => array(
    'name' => "PAWS",
    'price' => 17.0,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/paws.jpg"
  ),
  'pilot_cat' => array(
    'name' => "Pilot Cat",
    'price' => 16.0,
    'description' => "<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
    'link' => "http://etsy.com/dasdasdsa",
    'image' => "images/pilot_cat.jpg"
  ),
);

// loop through shirt data to populate products table
foreach ( $products as $product ) {
	// first check if the product already exists
	$sql = 'SELECT * FROM products WHERE name = "' . $db->escape_string($product['name']) . '"';
	$result = $db->query($sql);

	// if a product with this name already exists, we're done
	if ( $result->num_rows > 0 ) {
		echo 'Product already exists: ' . $product['name'] . '<br>';
	}
	// otherwise, insert new product row
	else {
		$sql = 'INSERT INTO products 
				  (name, price, description, link, image)
				VALUES (
					"' . $db->escape_string($product['name']) . '",
					' . (float)$product['price'] . ',
					"' . $db->escape_string($product['description']) . '",
					"' . $db->escape_string($product['link']) . '",
					"' . $db->escape_string($product['image']) . '"
				)';

		// execute query. if it works, print success message
		if ( $db->query($sql) ) {
			echo 'Added product: ' . $product['name'] . '<br>';
		}
		// if it doesn't work, print error message
		else {
			echo 'Query failed: ' . $sql . '<br>';
			echo $db->error . '<br>';
		}
	}
}
