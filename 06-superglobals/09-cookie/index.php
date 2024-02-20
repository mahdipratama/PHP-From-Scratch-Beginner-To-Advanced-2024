<?php

/*
Cookies allow developers to store data on the user's client/browser, making it avaialable through multiple pages, similiar to senssions. 

The $_COOKIES super global holds the values of cookies sent by the client's browser to the server.

These cookies are sent with HTTP request, allowing the server to remember information about the user. 
  
*/

// set the cookie 
setcookie('username', 'jdoe', time() + 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>
  <p>Cookie set. <a href="09-cookie/page.php">Go to page.php</a></p>
</body>

</html>