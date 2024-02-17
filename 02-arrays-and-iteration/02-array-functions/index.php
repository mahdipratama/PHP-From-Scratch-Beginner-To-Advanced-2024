<?php
$output = null;

$ids = [10, 22, 5, 45, 67];
$users = ['user3', 'user1', 'user2'];

// Count functions
$output = count($ids); // 5

// sort function 
sort($ids);
/*
IDs Array:
    Array
(
    [0] => 5
    [1] => 10
    [2] => 22
    [3] => 45
    [4] => 67
)
*/

sort($users);
/*
Users Array:
    Array
(
    [0] => user1
    [1] => user2
    [2] => user3
)
 */


// rsort => reverse sort
rsort($ids);
/*
IDs Array:
    Array
(
    [0] => 67
    [1] => 45
    [2] => 22
    [3] => 10
    [4] => 5
)
*/


// array_push 
array_push($ids, 100); // push it into the end of array
/*
IDs Array:
    Array
(
    [0] => 67
    [1] => 45
    [2] => 22
    [3] => 10
    [4] => 5
    [5] => 100
)
*/

array_push($users, 'user4');
/*
    Users Array:
          Array
(
    [0] => user1
    [1] => user2
    [2] => user3
    [3] => users4
)
*/

// array_pop => to pop the element off in the end of an array 
array_pop($ids);
/*
IDs Array:
    Array
(
    [0] => 67
    [1] => 45
    [2] => 22
    [3] => 10
    [4] => 5
)
*/


array_pop($users);
/*
    Users Array:
          Array
(
    [0] => user1
    [1] => user2
    [2] => user3
)
*/

// array_shift => take off the first element of an orray
array_shift($ids);
/*
IDs Array:
    Array
(
    [1] => 45
    [2] => 22
    [3] => 10
    [4] => 5
)
*/

array_shift($users);
/*
    Users Array:
          Array
(
    [1] => user2
    [2] => user3
    [3] => users4
)
*/

// array_unshift => to put an element to beginning of an array 
array_unshift($ids, 100);
/*
IDs Array:
    Array
(
    [0] => 100
    [1] => 45
    [2] => 22
    [3] => 10
    [4] => 5
)
*/
array_unshift($users, 'user1');
/*
Users Array:
      Array
(
    [0] => user1
    [1] => user2
    [2] => user3
)
*/

// array_slice => to slice an array into a new array and it doesn't effect the array that we are targetting (no side effect)
$ids2 = array_slice($ids, 2, 3);
// var_dump($ids2); // array(3) { [0]=> int(22) [1]=> int(10) [2]=> int(5) }

// array_splice => manupulating the targetting array 
array_splice($ids, 1, 1, 'New ID');
/*
IDs Array:
    Array
(
    [0] => 100
    [1] => New ID
    [2] => 22
    [3] => 10
    [4] => 5
)
*/
array_splice($users, 0, 1, ['New User', 'okay']);
/*
Users Array:
      Array
(
    [0] => New User
    [1] => okay 
    [2] => user2
    [3] => user3
)
*/

// array_sum
$output = 'Sum of IDs: ' . array_sum($ids); // Sum of IDs: 137

// array_search
$output = 'User 2 is at index: ' . array_search('user2', $users); // User 2 is at index: 2

array_push($users, 'user3');
// in_array
$output = 'User 3 Exists: ' . in_array('user3', $users); // User 3 Exists: 1

// explode => turn a string into an array 
$tags = 'tech,code,programming';
$tagsArr = explode(',', $tags);
// var_dump($tagsArr); // array(3) { [0]=> string(4) "tech" [1]=> string(4) "code" [2]=> string(11) "programming" }

// implode => turn an array into string 
$output = implode(', ', $users);

var_dump($output); // string(35) "New User, okay, user2, user3, user3"

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
            <h2 class="text-xl font-semibold my-4">IDs Array: </h2>
            <p>
            <pre>
                    <?php print_r($ids); ?>
                </pre>
            </p>

            <h2 class="text-xl font-semibold my-4">Users Array: </h2>
            <p>
            <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>