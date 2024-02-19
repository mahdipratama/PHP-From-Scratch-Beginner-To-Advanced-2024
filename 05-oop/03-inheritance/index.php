<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';
  // private $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

// 'extends' keyword, to inherit from a class
class Admin extends User
{
  public $level;

  public function __construct($name, $email, $level)
  {
    $this->level = $level;
    // no need to do this in $name and $email because we already have that from the parent constructor which is the User class 
    parent::__construct($name, $email);
  }

  // this is an example of polymorphism where we have the same method where we have login() in User class and we have login() in Admin but they do different things
  // overwrite inherit method
  public function login()
  {
    echo  'Admin ' . $this->name . ' logged in <br>';
  }

  public function getStatus()
  {
    echo $this->status;
  }
}

$admin1 = new Admin('Wilson', 'wilson@gmail.com', 5);

echo $admin1->name; // Wilson
echo $admin1->email; // wilson@gmail.com
echo $admin1->level; // 5
$admin1->login(); // Wilson logged in -> Admin Wilson logged in
$admin1->getStatus(); // active, keep in mind if the $status property is set with 'private keyword, it'll be undefined even this Admin class is subclass from User class!

// print_r($admin1); 
/*
output 
{
  name: "Wilson",
  email: "tom@gmail.com",
  status:protected: "active",
  level: "5"
  }
*/
