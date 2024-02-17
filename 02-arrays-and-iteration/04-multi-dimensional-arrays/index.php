<?php
$output = null;

// Arrays inside of Arrays

$fruits = [
  ['Apple', 'Red'],
  ['Banana', 'Orange'],
  ['Avocado', 'Grape']
];

// var_dump($fruits[0][0]); // string(5) "Apple"

$output = $fruits[0][0]; // Apple 
$output = $fruits[0][1]; // Red 

// Add new array
$fruits[] = ['Kiwi', 'Green'];
/*
Red

          Array
(
    [0] => Array
        (
            [0] => Apple
            [1] => Red
        )

    [1] => Array
        (
            [0] => Banana
            [1] => Orange
        )

    [2] => Array
        (
            [0] => Avocado
            [1] => Grape
        )

    [3] => Array
        (
            [0] => Kiwi
            [1] => Green
        )

)
*/

$users = [
  ['name' => 'John', 'email' => 'John@gmail.com', 'password' => '123456'],
  ['name' => 'Marry', 'email' => 'marry@gmail.com', 'password' => '123456'],
  ['name' => 'Nami', 'email' => 'nami@gmail.com', 'password' => '123456']
];

/*
        Array
(
    [0] => Array
        (
            [name] => John
            [email] => John@gmail.com
            [password] => 123456
        )

    [1] => Array
        (
            [name] => Marry
            [email] => marry@gmail.com
            [password] => 123456
        )

    [2] => Array
        (
            [name] => Nami
            [email] => nami@gmail.com
            [password] => 123456
        )
)
*/

// Add arrays
$users[] = ['name' => 'Wilson', 'email' => 'wilson@gmail.com', 'password' => '123456'];

$newUsers = ['name' => 'Anderson', 'email' => 'anderson@gmail.com', 'password' => '123456'];
array_push($users, $newUsers);
/*
        Array
(
    [0] => Array
        (
            [name] => John
            [email] => John@gmail.com
            [password] => 123456
        )

    [1] => Array
        (
            [name] => Marry
            [email] => marry@gmail.com
            [password] => 123456
        )

    [2] => Array
        (
            [name] => Nami
            [email] => nami@gmail.com
            [password] => 123456
        )

    [3] => Array
        (
            [name] => Wilson
            [email] => wilson@gmail.com
            [password] => 123456
        )

    [4] => Array
        (
            [name] => Anderson
            [email] => anderson@gmail.com
            [password] => 123456
        )
)
*/

// Remove the last index 
array_pop($users);
/*
        Array
(
    [0] => Array
        (
            [name] => John
            [email] => John@gmail.com
            [password] => 123456
        )

    [1] => Array
        (
            [name] => Marry
            [email] => marry@gmail.com
            [password] => 123456
        )

    [2] => Array
        (
            [name] => Nami
            [email] => nami@gmail.com
            [password] => 123456
        )

    [3] => Array
        (
            [name] => Wilson
            [email] => wilson@gmail.com
            [password] => 123456
        )
)
*/

array_shift($users);
/*
Array
(
    [0] => Array
        (
            [name] => Marry
            [email] => marry@gmail.com
            [password] => 123456
        )

    [1] => Array
        (
            [name] => Nami
            [email] => nami@gmail.com
            [password] => 123456
        )

    [2] => Array
        (
            [name] => Wilson
            [email] => wilson@gmail.com
            [password] => 123456
        )

)
*/

// remove specific index
unset($users[1]);
/*
          Array
(
    [0] => Array
        (
            [name] => Marry
            [email] => marry@gmail.com
            [password] => 123456
        )

    [2] => Array
        (
            [name] => Wilson
            [email] => wilson@gmail.com
            [password] => 123456
        )

)
*/


// $output = $users[1]['email']; // marry@gmail.com

$output = count($users); // 2
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
          <?php print_r($users) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>