<?php
class StringUtility
{

  public static function shout($string)
  {
    return strtoupper($string) . '! <br/>';
  }

  public static function whisper($string)
  {
    return strtolower($string) . '&period; <br/>';
  }

  public static function repeat($string, $times = 2)
  {
    return str_repeat($string, $times);
  }
}

echo StringUtility::shout('we got this'); // WE GOT THIS!
echo StringUtility::whisper('we got this'); // we got this.
echo StringUtility::repeat('we got this ', 4); // we got this we got this we got this we got this
