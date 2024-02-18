<?php
// Anonymous function
// we can use this function by put it into variable or we can passed it into another function as a callback 
$square = function ($number) {
  return $number * $number;
};

echo "The square of 5 is {$square(5)} <br/>"; // The square of 5 is 25

// CLosures
function createCounter()
{
  $count = 0;

  // use(&$variableName) is to access a variable outside its scope 
  $counter = function () use (&$count) {
    return ++$count;
  };

  return $counter;
}

$counter = createCounter();

echo $counter() . '<br/>'; // 1
echo $counter() . '<br/>'; // 2
echo $counter() . '<br/>'; // 3
