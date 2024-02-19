<?php

/*
  - public
  The property or method can be accessed from anywhere. This is the default if you leave off the modifier

  - protected
  The property or method can be accessed from within the class OR any class that inherits from it

  - private
  The property can ONLY be accessed from within the class
*/

class User
{
  // Properties
  public $name;
  public $email;
  protected $status = 'active'; // still can accessed from Getter and Setter
  // private $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }

  // Getters , to access private properties
  public function getStatus()
  {
    echo $this->status;
  }

  // Setters, to modify private properties
  public function setStatus($status)
  {
    $this->status = $status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

// set status 
$user2->setStatus('inactive'); // inactive

// get status
$user2->getStatus(); // active

// try to access protected property
// $user2->status; // Fatal error: Uncaught Error: Cannot access private property User


// var_dump($user2);
