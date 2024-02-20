<?php

// abstract class can be instantiate like a regular class, but they can be sub class, so we can create a sub class that inherit an abstract class

abstract class Shape
{
  protected $name;

  // Abstract Method
  abstract public function calculateArea();

  public function __construct($name)
  {
    $this->name = $name;
  }

  // Concreate method 
  public function getName()
  {
    return $this->name;
  }
}


class Circle extends Shape
{
  private $radius;

  public function __construct($name, $radius)
  {
    parent::__construct($name);
    $this->radius = $radius;
  }

  public function calculateArea()
  {
    return pi() * pow($this->radius, 2);
  }
}


class Rectangle extends Shape
{
  private $width;
  private $height;

  public function __construct($name, $height, $width)
  {
    parent::__construct($name);
    $this->width = $width;
    $this->height = $height;
  }

  public function calculateArea()
  {
    return $this->width * $this->height;
  }
}

// Instantiate
$circle = new Circle('Circle', 15);
$rectangle = new Rectangle('Rectangle', 4, 6);

// var_dump($circle);

echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br/>';

echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br/>';

// notice the calculateArea() function is called by different instantiate, they are based on the same function from 'Shape class' but do different things, it's called POLYMORPHISM. 