<?php
$output = null;

$user = [
    'name' => 'John',
    'email' => 'John@gmail.com',
    'password' => '123456',
    'hobbies' => ['tennis', 'video games',]
];

/*  output : 
User Array:
     Array
(
    [name] => John
    [email] => John@gmail.com
    [password] => 123456
    [hobbies] => Array
        (
            [0] => tennis
            [1] => video games
        )

)
*/

// access elements
$output = $user['name']; // John
$output = $user['email']; // John@gmail.com

$output = $user['hobbies'][0]; // tennis

// add element
$user['address'] = '12 main St';
/*  output : 
User Array:
     Array
(
    [name] => John
    [email] => John@gmail.com
    [password] => 123456
    [hobbies] => Array
        (
            [0] => tennis
            [1] => video games
        )
    [address] => 12 main St
)
*/

// Delete element
unset($user['address']);
/*  output : 
User Array:
     Array
(
    [name] => John
    [email] => John@gmail.com
    [password] => 123456
    [hobbies] => Array
        (
            [0] => tennis
            [1] => video games
        )

)
*/

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
            <h2 class="text-xl font-semibold my-4">
                User Array:
            </h2>
            <p>
            <pre>
                    <?php print_r($user) ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>