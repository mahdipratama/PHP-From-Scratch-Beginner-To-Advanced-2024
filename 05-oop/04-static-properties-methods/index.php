<?php

class MathUtility
{
  // public $pi = 3.14;
  public static $pi = 3.14;

  public static function add(...$nums)
  {
    return array_sum($nums);
  }
}

// in some cases we don't need multiple instances like below 
// $mathUtil1 = new MathUtility();
// $mathUtil2 = new MathUtility();
// echo $mathUtil1->pi; // 3.14
// echo $mathUtil2->pi; // 3.14

// use the class name directly and use scope resolution operator (::) to access a method or property from a class
echo MathUtility::$pi; // 3.14
echo MathUtility::add(1, 2, 3, 4, 5); // 15