<?php

/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/
echo '<h3>Multiplication Table</h3>';

for ($i = 1; $i <= 10; $i++) {
  for ($j = 1; $j <= 10; $j++) {
    echo $i . ' x ' . $j . ' = ' . $i * $j . '<br />';
  }
};

/*
  Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbers = [1, 2, 3, 4, 5];

// Foreach loop
$sum = 0;
foreach ($numbers as $number) {
  $sum += $number;
};

print_r($sum);

echo '<br/>';
echo '<br/>';

// For... loop
$sum2 = 0;
for ($i = 0; $i <= count($numbers); $i++) {
  $sum2 += $i;
}
print_r($sum2);

/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'. 

  1. Create an array of students with their names and grades (0 - 100)
	2. Iterate over the students array with a foreach loop
	3. Calculate the average grade for each student
*/

echo '<h3>Average Grade</h3>';

$students = [
  [
    'name' => 'Emma',
    'grades' => [89, 99, 79, 98, 85]
  ],
  [
    'name' => 'Wilson',
    'grades' => [70, 77, 79, 65, 50]
  ],
  [
    'name' => 'Watson',
    'grades' => [80, 88, 75, 70, 85]
  ],
];



foreach ($students as $student) {
  echo 'name: ' . $student['name'] . '<br/>';
  echo 'grades: ' . implode(', ', $student['grades']) . '<br/>';

  // My Solution 
  // $average = 0;
  // foreach ($student['grades'] as $number) {
  //   $average += $number / count($student['grades']);
  // };

  // Brad Solution
  $average = array_sum($student['grades']) / count($student['grades']);

  echo 'averages: ' . $average . '<br/>' . '<br/>';
}
