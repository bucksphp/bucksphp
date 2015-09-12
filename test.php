<?php

/**
Just a bunch of junk to demonstrate PHP syntax.
*/

// this is a constant
define('VERBOSE_MODE', true);

// string variable
$animal = "dog";

// float variable
$animal_count = 2.234;

// cast float to integer
$animal_count = (int)$animal_count;

// boolean variables
$animals_might_exist = true;
$animals_might_not_exist = false;

// simple array
$other_animals = array(
	"cat",
	"mouse",
	"walrus",
	"moose",
);

// keyed array (a hash in most other languages)
$animal_colors = array(
	'cat' => 'brown',
	'walrus' => 'black',
	'mouse' => 'pink',
	'moose' => 'orange'
);

// multi-dimensional array
$multidimensional_animals = array(
	'animals' => array(
		'dog',
		'cat',
		'goat'
	),
	'colors' => array(
		'red',
		'green',
		'blue'
	),
	'price' => 14.50
);

// an example function
// this one prints debug information inside a <pre> tag
function pre($value) {
	echo '<pre>';
	print_r($value);
	echo '</pre><hr>';
}

// another example function
// this one takes two arguments. the second is optional
function test_truthiness($value, $name='value') {
	if ( $value ) {
		echo "$name is true<br>";
	}
	else {
		echo "$name is false<br>";
	}
}

// print debug info for multi-dimensional array
pre($multidimensional_animals);

// print a single item from the multi-dimensional array
echo $multidimensional_animals['animals'][2];
echo '<hr>';

// debugging functions
echo '<pre>';
print_r($other_animals);
var_dump($other_animals);
echo '</pre>';
echo '<hr>';

// print a single item from the simple array
echo $other_animals[1] . "<hr>";

// foreach loop example
foreach ( $other_animals as $i => $animal ) {
	echo "$i: $animal $animal_colors[$animal]<br>";
}
echo "<hr>";

// for loop example
for ( $i = 0; $i < count($other_animals); $i += 2 ) {
	echo $other_animals[$i] . "<br>";
}
echo "<hr>";

// while loop example
$i = 0;
while ( $i < count($other_animals) ) {
	echo $other_animals[$i] . "<br>";
	$i++;
}
echo "<hr>";

// do-while loop example
$i = 0;
do {
	echo $other_animals[$i] . "<br>";
	$i += 1;
}
while ( $i < 2 );
echo "<hr>";

if ( $animal_count > 0 ) {
	$animals_exist = true;
}
else {
	$animals_exist = false;
}

if ( $animal_count !== 13 ) {
	$animal_count = $animal_count + 1;
}

// testing truthiness
$space = " ";
$null = null;
$false = false;
$empty_string = "";

test_truthiness($space, 'space');
test_truthiness($null, 'null');
test_truthiness($false, 'false');
test_truthiness($empty_string, 'empty_string');
echo "<hr>";

// if/else conditionals
if ( $animals_exist ) {
	echo "hello, there are $animal_count $animal";

	if ( ($animal_count > 10 || $animal_count < 4) && VERBOSE_MODE ) {
		echo "<br>That's a lot (or a little)!";
	}
}
else if ( $animals_might_exist || $animals_might_not_exist ) {
	echo "hard to say";
}
// this will never be reached because of the previous condition
else if ( $animals_might_not_exist ) {
	echo "possibly not";
}
else {
	echo "animals do not exist";
}

// switches
echo "<hr>";
foreach ( $other_animals as $animal ) {
	echo "<b>$animal</b>: ";

	switch ( $animal ) {
		case "dog":
			echo "it's a dog<br>";
			break;
		case "cat":
			echo "it's a cat<br>";
			break;
		case "moose":
			echo "it's a moose<br>";
			break;
		case "walrus":
			echo "it's a walrus<br>";
			break;
		default:
			echo "i don't know this animal<br>";
	}
}
echo "<hr>";

?>

<!-- HTML tag with PHP echo/print shorthard -->
<p>some words <?= 'again' ?></p>
