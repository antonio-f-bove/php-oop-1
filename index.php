<?php

class Movie {

  public $title;
  public $year;
  public $likes;

  function __construct(string $_title, int $_year, int $_likes = 0) {
    $this->title = $_title;
    $this->year = $_year;
    $this->likes = $_likes;
  }

  public function getInfoArr() {
    return [
      'title' => $this->title,
      'year' => $this->year,
      'likes' => $this->likes,
    ];
  }

  public function getLikes() {
    return $this->likes;
  }

  public function setLikes($n_of_likes) {
    $this->likes = $n_of_likes;
  }

  public function setLikesToZero() {
    $this->likes = 0;
  }
}


$movies = [];

$movies[] = new Movie('Batman', 1989);
$movies[] = new Movie('The Dark Knight Rises', 2012, 1000000);
$movies[] = new Movie('The Batman', 2022, 3);

var_dump($movies[1]->getInfoArr());

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>
<body>
  <dl>
    <?php
    foreach($movies as $movie):
      ?>
      <dt><?= $movie->title ?></dt>
      <dd>
        <ul>
          <li>Made in: <?= $movie->year ?></li>
          <li>Liked <?= $movie->getLikes() ?> times</li>
        </ul>
      </dd>
      <?php
    endforeach
    ?>
  </dl>
</body>
</html>