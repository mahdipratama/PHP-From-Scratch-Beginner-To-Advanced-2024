<?php

$numbers = [1, 2, 3, 4, 5];

$square = function ($number) {
  return $number * $number;
};

$squaredNumbers = array_map($square, $numbers);


print_r($squaredNumbers);
/*
output

  {
    0: "1",
    1: "4",
    2: "9",
    3: "16",
    4: "25"
  },

*/


function applyCallback($callback, $value)
{
  return $callback($value);
};

$double = function ($number) {
  return $number * 2;
};

$result = applyCallback($double, 5);

echo $result; // 10
