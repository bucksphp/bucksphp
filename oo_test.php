<?php

/**
Just testing PHP's object syntax
*/

class Animal {
	protected $name;

	public function sayName() {
		echo 'I am a '  . $this->name;
	}
}

class Dog extends Animal {
	const TEETH = 14;
	public $breed;
	private $age;
	public static $color = 'brown';

	// create a new dog
	public function __construct($age) {
		$this->name = 'dog';
		$this->age = $age;
	}

	public function sayBreed() {
		echo 'My breed is ' . $this->breed;
	}

	// kill the dog
	// this happens when the object is destroyed
	public function __destruct() {
		unset($this->name);
	}
}

function say_animal_name($name) {
	echo 'I am a ' . $name;
}

function sayDogBreed($breed) {
	echo 'My breed is ' . $breed;
}

$dog = new Dog(12);
$dog->breed = 'labrador';
$dog->sayName();
echo '<br>';
$dog->sayBreed();
echo '<br>';
echo 'the color is ' . Dog::$color;
echo '<br>';
echo 'i have ' . Dog::TEETH . ' teeth';