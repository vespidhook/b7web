<?php
class Post {
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function __construct($qtLikes = 0) {
    $this->likes = $qtLikes;
  }

  public function aumentarLike() {
    echo 'abc';
    $this->likes++;
  }
}

$post1 = new Post( 25 );

$post2 = new Post();

echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";