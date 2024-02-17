<?php
$output = null;

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Sum Of An Array</h3>';
$numbers = [1, 2, 3, 4, 5];
$sum = array_sum($numbers);
$amount = count($numbers);
// var_dump($sum, $amount);

function printString($sum, $amount)
{
  print_r("The sum of the $amount numbers is: $sum");
};

printString($sum, $amount);

echo '<br/>';
echo '<br/>';



/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
$reversedColors = array_reverse($colors);
array_push($reversedColors, 'purple', 'orange');

// Using array_merge 
$reversedColors = array_merge($colors, ['purple', 'orange']);

array_splice($reversedColors, 1, 1, 'pink');

print_r($reversedColors);

echo '<br/>';
echo '<br/>';


/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';
$listings = [
  [
    'id' => '1',
    'job_title' => 'Web Dev',
    'company' => 'whatever.inc',
    'contact_email' => 'whatever.inc@gmail.com',
    'contact_phone' => '233-9982',
    'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
  ],
  [
    'id' => '2',
    'job_title' => 'Frontend Dev',
    'company' => 'fabulous.corp',
    'contact_email' => 'fabulous.corp@gmail.com',
    'contact_phone' => '233-9982',
    'skills' => ['Next.js', 'React.js', 'JavaScript', 'HTML', 'CSS']
  ],
  [
    'id' => '3',
    'job_title' => 'Backend Dev',
    'company' => 'whatever.inc',
    'contact_email' => 'whatever.inc@gmail.com',
    'contact_phone' => '233-9982',
    'skills' => ['PHP', 'MySQL', 'JavaScript', 'MongoDB', 'Django']
  ],
];

$newList =  [
  'id' => '4',
  'job_title' => 'Fullstack Dev',
  'company' => 'whatever.inc',
  'contact_email' => 'whatever.inc@gmail.com',
  'contact_phone' => '233-9982',
  'skills' => ['PHP', 'MySQL', 'JavaScript', 'MongoDB', 'Django', 'React.js', 'TypeScript', 'Next.js']
];

array_push($listings, $newList);

$output = $listings[1]['job_title']; // Frontend Dev 

$output = $listings[2]['skills'][0]; // PHP

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
      <p>
      <pre>
          <?php print_r($listings) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>