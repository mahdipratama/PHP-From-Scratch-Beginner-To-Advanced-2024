<?php
// A constant is an identifier (name) for a simple value. As the name suggests, that value cannot change during the execution of the script

define('APP_NAME', 'My App');
define('APP_VERSION', '1.0.0');

echo APP_NAME; // My App
echo APP_VERSION; // 1.0.0

const DB_NAME = 'mybd';
const DB_HOST = 'localhost';

echo DB_NAME, DB_HOST; // mybd localhost

// A constant variable can be access inside a function scope without any 'global' declaration
function run()
{
  echo APP_NAME;
  echo DB_NAME;
}

run(); // mybd localhost

// can't re asign the value 
// define('APP_NAME', 'My App 2'); // error
