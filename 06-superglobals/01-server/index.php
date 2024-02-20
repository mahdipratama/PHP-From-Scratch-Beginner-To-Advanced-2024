<?php
/*
PHP Super Globals
Is a group variables that are accessible from anywhere in a PHP script, including functions and classes

They are assoaciave arrays that store information about things such as the current request, the server, sessions, cookies and more

They make PHP very practical, however, if your not careful they can be a source of security vulnerabilities


$_GLOBALS: References variables in the global scope
$_SERVER: Contains info about the server such as hostname, file paths, etc
$_GET: Variables passed to the script via query params and GET forms
$_POST: Variables passed to the script via POST forms
$_FILES: Items uploaded to current script
$_COOKIE: Variables passed to script via HTTP cookies
$_SESSION: Session variables available to the script
$_REQUEST: Contains the contents of $_GET, $_POST, and $_COOKIE
$_ENV: Variables passed to the current script via environment method
*/


// Common server variables:
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? ''; // GET
$serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? ''; // HTTP/1.1
$serverName = $_SERVER['SERVER_NAME'] ?? ''; // localhost
$serverPort = $_SERVER['SERVER_PORT'] ?? ''; // 8000
$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? ''; // $_SERVER['REQUEST_METHOD'] ?? '';
$serverAdmin = $_SERVER['SERVER_ADMIN'] ?? '';
$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? ''; // C:\laragon\www
$scriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? ''; // C:\laragon\www\06-superglobals\01-server\index.php
$scriptName = $_SERVER['SCRIPT_NAME'] ?? ''; // /06-superglobals/01-server/index.php
$phpSelf =  $_SERVER['PHP_SELF'] ?? ''; // /06-superglobals/01-server/index.php
$remoteAddr = $_SERVER['REMOTE_ADDR'] ?? ''; // ::1
$connection =  $_SERVER['HTTP_CONNECTION'] ?? ''; // keep-alive
$host =  $_SERVER['HTTP_HOST'] ?? ''; // localhost:8000
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? ''; // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36
$queryString = $_SERVER['QUERY_STRING'] ?? '';
$requestUri = $_SERVER['REQUEST_URI'] ?? ''; // /06-superglobals/01-server

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">Server Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Method:</strong>
        <?= $requestMethod ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Protocol:</strong>
        <?= $serverProtocol ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Name:</strong>
        <?= $serverName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Port:</strong>
        <?= $serverPort ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Software:</strong>
        <?= $serverSoftware ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Admin:</strong>
        <?= $serverAdmin ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Document Root:</strong>
        <?= $documentRoot ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Filename:</strong>
        <?= $scriptFilename ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Name:</strong>
        <?= $scriptName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">PHP Self:</strong>
        <?= $phpSelf ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Remote Addr:</strong>
        <?= $remoteAddr ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Connection:</strong>
        <?= $connection ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Host:</strong>
        <?= $host ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Referer:</strong>
        <?= $referer ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">User Agent:</strong>
        <?= $userAgent ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Query String:</strong>
        <?= $queryString ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Uri:</strong>
        <?= $requestUri ?>
      </div>
    </div>
</body>

</html>