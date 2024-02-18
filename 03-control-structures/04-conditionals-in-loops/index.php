<?php
$number = 1;

while ($number <= 10) {
  if ($number % 2 == 0) {
    echo $number . ' is Even <br/>';
  } else {
    echo $number . ' is Odd <br/>';
  }
  $number++;
}
/*  Output : 
  1 is Odd
  2 is Even
  3 is Odd
  4 is Even
  5 is Odd
  6 is Even
  7 is Odd
  8 is Even
  9 is Odd
  10 is Even
*/

// Break out of a loop
for ($i = 0; $i <= 10; $i++) {
  if ($i == 5) {
    break;
  }

  echo $i . '<br/>';
}
/* output
0
1
2
3
4
*/


// Skip and continue 
for ($i = 1; $i <= 10; $i++) {
  if ($i == 5) {
    continue;
  }

  echo $i . '<br/>';
}
/* output
1
2
3
4
6
7
8
9
10
*/

$studentGrades = array(
  'Jack' => 75,
  'John' => 92,
  'Jill' => 100,
  'Johnson' => 80,
);


foreach ($studentGrades as $name => $grade) {
  if ($grade >= 90) {
    echo $name . ' has an excellent grade <br/>';
  } else if ($grade <= 90 && $grade >= 80) {
    echo $name . ' has a good grade <br/>';
  } else {
    echo $name . ' has a enought grade <br/>';
  }
}
