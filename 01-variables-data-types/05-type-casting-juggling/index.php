<?php
$number0 = 0;
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Conversion 
$result = $number1 + $number2; // int(15)
$result = $number1 + $number3; // int(25) int (string to int)
$result = $number3 + $number1; // int(25) int (string to int)
$result = $number3 + $number3; // int(40) int (string to int)

// int to string
$result = $number1 . $number2; // string(3) "510" (int to string)

// $result = $fruit + $number2; // Fatal error: Uncaught TypeError: Unsupported operand types: string + int

$result = $number1 + $bool1; // int(6) bool to int, true is converted into 1
$result = $number1 + $bool2; // int(5) bool to int
$result = $number1 + $null; // int(5) null to int

// Explicit Conversion 
$result = (string) $number1; // string(1) "5"
$result = (int) $number3; // int(20)
$result = (bool) $number1; // bool(true)
$result = (bool) $number0; // bool(false)


var_dump($result);
