<?php
$names = array('John', 'Jack', 'Jill'); // array(3) { [0]=> string(4) "John" [1]=> string(4) "Jack" [2]=> string(4) "Jill" }
/*
array(3) {
  [0]=>
  string(4) "John"
  [1]=>
  string(4) "Jack"
  [2]=>
  string(4) "Jill"
}
*/

$numbers = [1, 2, 3, 4, 5, 6]; // array(6) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) [5]=> int(6) }
/*
with <pre></pre>
array(6) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
  [5]=>
  int(6)
}
*/

function inspect($value)
{
  echo '<pre>'; // to formating nicely while debugging
  var_dump($value);
  echo '</pre>';
}

inspect($names);
inspect($numbers);

print_r($names);


// echo $names; // Warning: Array to string conversion in
// echo $names[2]; // Jill


// Add element to array 
$numbers[6] = 100;
$numbers[] = 101;
inspect($numbers);
/*
array(8) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
  [5]=>
  int(6)
  [6]=>
  int(100)
  [7]=>
  int(101)
}
*/

// Update value array
$numbers[3] = 200;
inspect($numbers);
/*
array(8) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(200)
  [4]=>
  int(5)
  [5]=>
  int(6)
  [6]=>
  int(100)
  [7]=>
  int(101)
}
*/

// Delete value 
unset($numbers[3]);

inspect($numbers);
/*
array(8) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [4]=>
  int(5)
  [5]=>
  int(6)
  [6]=>
  int(100)
  [7]=>
  int(101)
}
*/

// re-value array
$numbers = array_values($numbers);
inspect($numbers);

/*
array(8) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(5)
  [4]=>
  int(6)
  [5]=>
  int(100)
  [6]=>
  int(101)
}
*/