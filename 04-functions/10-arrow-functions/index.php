<?php

// Arrow Function => only one liner, can't add another line inside of this function

// Can not do this:
// $add = fn ($a, $b) => {
//   return $a + $b;
// };

$add = fn ($a, $b) => $a + $b;

echo $add(1, 2); // 3

// Arrow functions for callbacks
$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);

print_r($squaredNumbers);
