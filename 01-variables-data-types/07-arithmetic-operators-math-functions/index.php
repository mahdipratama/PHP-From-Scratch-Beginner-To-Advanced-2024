<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/


$output = null;

$num1 = 20;
$num2 = 10;


// Basic Math
$output = "$num1 + $num2 = " . $num1 + $num2; // 20 + 10 = 30 
$output = "$num1 - $num2 = " . $num1 - $num2; // 20 - 10 = 10 
$output = "$num1 x $num2 = " . $num1 * $num2; // 20 x 10 = 200 
$output = "$num1 / $num2 = " . $num1 / $num2; // 20 / 10 = 2 
$output = "$num1 % $num2 = " . $num1 % $num2; // 20 % 10 = 0 


// Assignment Operator 
$num3 = 10;
// $num3 = $num3 + 20; 
// $output = $num3; // 30
// $num3 += 20;
// $output = $num3; // 30
$num3 -= 20;
$output = $num3;



// Built-in PHP function 

// rand();
$output = rand(); // to get a random number
$output = getrandmax(); // to get a max random number
$output = rand(1, 10); // to get a random number between 1 to 10

// round()
$output = round(4.2); // 4 -> rount down 

// ceil()
$output = ceil(4.2); // 5 -> round up 

// floor()
$output = floor(4.9); // 4 -> round down

// sqrt()
$output = sqrt(64); // 8  

// pi 
$output = pi(); // 3.1415926535898

// abs()
$output = abs(-2.3); // 2.3

// max()
$output = max(1, 29, 98, 2, 4, 50); // 98
$output = max([1, 29, 88, 2, 4, 50]); // 88

// min()
$output = min(2, 9, 33, 29, 9); // 2

// Number Format
$output = number_format(1234567.191234, 2, '.', ','); // 1,234,567.19

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

      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>