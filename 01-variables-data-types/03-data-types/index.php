<?php

/*
  PHP DATA TYPES:

- String: Sequence of characters, Enclosed in quotes
- Integer: Whole number. It can be positive or negative 
- Float: Number with decimal point
- Boolean: True or False
- Array: Holds multiple values
- Object: Collection of properties & methods
- NULL: Represent a variable with no value
- Resource
*/

// String
$name = 'Wilson Peterson';
$name2 = "Wilson Peterson";

var_dump($name);
echo '<br/>';
echo getType($name2);

echo '<br/>';

// Integer 
$age = 35;
var_dump($age);
echo '<br/>';

// Float 
$rating = 4.5;
var_dump($rating);
echo '<br/>';

// Boolean 
$isLoaded = true;
var_dump($isLoaded);
echo '<br/>';

// Array
$friends = ['John', 'Jax', 'Bob'];
var_dump($friends);
echo '<br/>';

// Object 
$person = new stdClass();
var_dump($person);

// Null 
$car = null;
var_dump($car);

// Resource 
// $file = fopen('/03-data-types/sample.txt', 'r');
// var_dump($file);
