<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

// Solution
function fahrenheitToCelsius($fahrenheit)
{
  $celcius = ($fahrenheit - 32) * 5 / 9;

  return "{$fahrenheit}F° = {$celcius}C°";
};

echo fahrenheitToCelsius(68); // 68F° = 20C°

$baseTemp =  32;
$fahrenheitToCelsius2 = function ($f) use ($baseTemp) {
  $celcius = ($f - $baseTemp) * 5 / 9;

  return "{$f}F° = {$celcius}C°";
};

echo $fahrenheitToCelsius2(68); // 68F° = 20C°


echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/
$names = ['Nami', 'Wilson', 'John', 'Anderson'];

function printNamesToUpperCase($names)
{
  foreach ($names as $name) {
    echo strtoupper($name) . ', ';
  }
};

printNamesToUpperCase($names); // NAMI, WILSON, JOHN, ANDERSON,


// Solution 2 
$printNames = fn ($name) => strtoupper($name);

$printNamesToUpperCase2 = array_map($printNames, $names);

print_r(implode(', ', $printNamesToUpperCase2)); // NAMI, WILSON, JOHN, ANDERSON


echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

$sentence = 'The quick brown fox jumped over the lazy dog on facebook';

function findLongestWord($sentence)
{
  $words = explode(' ', $sentence);

  $longestWord = '';

  foreach ($words as $word) {
    $word = trim($word);

    // Check if the current word is longer than the Longest word
    if (strlen($word) > strlen($longestWord) || $longestWord === '') {
      $longestWord = $word;
    }
  }

  return $longestWord;
};

$longestWord =
  findLongestWord($sentence);

echo $longestWord; // facebook
