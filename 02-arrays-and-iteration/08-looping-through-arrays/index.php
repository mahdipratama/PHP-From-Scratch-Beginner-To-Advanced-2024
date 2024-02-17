<?php
$names = ['John Doe', 'Matthew Thomas', 'Jose Ramirez', 'Mary Jane'];

$users = [
  ['name' => 'John', 'email' => 'john@email.com'],
  ['name' => 'Jane', 'email' => 'jane@email.com'],
  ['name' => 'Joe', 'email' => 'joe@email.com'],
  ['name' => 'Mary', 'email' => 'mary@email.com']
];


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
      <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
      <ul class="mb-6">

        <!-- For Loop -->
        <?php for ($i = 0; $i < count($names); $i++) : ?>
          <li>
            <?= $names[$i]; ?>
          </li>
        <?php endfor; ?>
      </ul>
      <!-- 
          Output :
            Using a for loop
            John Doe
            Matthew Thomas
            Jose Ramirez
            Mary Jane
      -->

      <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
      <ul class="mb-6">
        <?php foreach ($names as $name) : ?>
          <li>
            <?= $name ?>
          </li>
        <?php endforeach ?>
        <!-- 
          Output :
            Using a for loop
            John Doe
            Matthew Thomas
            Jose Ramirez
            Mary Jane
      -->

      </ul>
      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
      <ul class="mb-6">
        <?php foreach ($names as $index => $name) : ?>
          <li>
            <?= $index + 1 . '. ' . $name ?>
          </li>
        <?php endforeach ?>
      </ul>
      <!--
          Output :
          1. John Doe
          2. Matthew Thomas
          3. Jose Ramirez
          4. Mary Jane
        -->

      <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
      <ul class="mb-6">
        <?php foreach ($users as $user) : ?>
          <li><?= $user['name'] . ': ' . $user['email'] ?></li>
        <?php endforeach ?>
      </ul>
      <!-- 
        output: 
        John: john@email.com
        Jane: jane@email.com
        Joe: joe@email.com
        Mary: mary@email.com

       -->

      <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative array</h3>
      <ul class="mb-6">
        <ul class="mb-6">
          <?php foreach ($users as $user) : ?>
            <?php foreach ($user as $key => $value) : ?>
              <li>
                <?= $key . ': ' . $value ?>
              </li>
            <?php endforeach ?>
          <?php endforeach ?>
        </ul>
      </ul>
      <!-- 
        output : 
        name: John
        email: john@email.com
        name: Jane
        email: jane@email.com
        name: Joe
        email: joe@email.com
        name: Mary
        email: mary@email.com
       -->
    </div>
  </div>
</body>

</html>