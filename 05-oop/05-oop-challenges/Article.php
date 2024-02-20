<?php

// My Solution
class Article
{
  public $title;
  public $content;
  private $published = false;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function publish()
  {
    echo $this->published = true;
  }

  public function isPublished()
  {
    echo var_dump($this->published);
  }
}

$article1 = new Article('Why you are so ugly', 'Here\'s why you\'re so ugly ');

$article2 = new Article(null, null);

$article1->publish(); // 1

$article1->isPublished(); // true
$article2->isPublished(); // false


// Brad Solution
class Article2
{
  public $title;
  public $content;
  private $published = false;

  public function __construct($title, $content)
  {
    $this->title = $title;
    $this->content = $content;
  }

  public function publish()
  {
    $this->published = true;
  }

  public function isPublished()
  {
    return $this->published;
  }
}

$article1 = new Article2('My First Post', 'This is the first post.');
$article2 = new Article2('My Second Post', 'This is the second post.');

$article1->publish();

echo var_dump($article1->isPublished(), true) . '<br>';
echo var_dump($article2->isPublished(), true) . '<br>';
