<?php
/*
|Sessions Super Global|

Sessions allow developers to store and manage user-specific data on the server that persist through HTTP requests. This is used fo logins, etc. 

The $_SESSION super global us used to store session data

In order to use sessions, the function 'session_start()' must be called


|How Sessions Work|

- Session Initialization: Session ID is created and stored in a cookie

- Data Storage: Data such as the user ID can be stored in a session

- Data Retrieval: The server can retrieve session data associated with the user

- Session Termination: Sessions can be expire or be terminated explicityly
*/

session_start();

$_SESSION['name'] = 'John';

if (isset($_SESSION['name'])) {
  echo 'Name: ' . $_SESSION['name'];
} else {
  echo 'Name is not set';
}

// print_r($_SESSION);
