<?php

class User
{
  // the properties that User object class have, with 'public' keyword, those properties can be access outside of the class 
  public $name;
  public $email;

  // Constructor

  public function __construct($name, $email)
  {
    echo 'Construct run ...';
    $this->name = $name;
    $this->email = $email;
  }

  // Method is just a function that belong to a Class 
  public function login()
  {
    echo  $this->name . ' logged in';
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com'); // Construct run ... -> when instantiate new object will run the constructor 

// Manual to set a value for properties
// $user1->name = 'John Doe';
// $user1->email = 'john@gmail.com';


// print_r($user1);
/*
{
  name: "John Doe",
  email: "john@gmail.com"
},
*/

$user1->login(); // John Doe logged in


$user2 = new User('Jane Doe', 'jane@gmail.com');

// $user2->name = 'Jane Doe';
// $user2->email = 'jane@gmail.com';

$user2->login(); // Jane Doe logged in

// print_r($user2);
/*
{
  name: "jane Doe",
  email: "jane@gmail.com"
},
*/


// Constructor Method 
class Admin
{
  public $name;
  public $email;

  // Constructor
  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {

    // $name is a property, not a variable. To access properties within the class, you should use $this->propertyName. 
    echo 'Welcome ' . $this->name;
  }
}

$admin = new Admin('John Doe', 'john@gmail.com');
$admin->login();  // Outputs: Welcome John Doe