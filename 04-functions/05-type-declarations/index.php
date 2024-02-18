<?php

declare(strict_types=1); // strict requirement

function getSum(int $a, int $b): int
{
  return $a + $b;
}

echo getSum(1, 1);

// Example 2
function greeting(string $name): string
{
  return "Hello $name";
}

echo greeting("John");


// Void return
function greeting2(string $name): void // that's mean there's no return value
{
  echo 'Hello ' . $name;
}

greeting2('Nami');

// https://www.php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration
