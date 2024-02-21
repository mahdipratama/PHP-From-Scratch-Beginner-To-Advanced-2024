<?php
/*
PDO is an acronym for PHP Data Objects. PDO is a lean, consistent way to access databases. This means developers can write portable code much easier. PDO is not an abstraction layer like PearDB. PDO is a more like a data access layer which uses a unified API
*/

// Database Credentials; 
$host  = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'wilson';
$password = 'dontcry09';

// DSN (data source name) 
$dsn = "mysql:host={$host};port={$port};dbName={$dbName};charset=utf8";

try {
  // Create PDO instance
  $pdo = new PDO($dsn, $username, $password);

  // Set PDO to throw exception on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Database connected.. ';
} catch (PDOException $e) {
  // If there is an error, catch it here
  echo 'Connection Failed: ' . $e->getMessage();
};
