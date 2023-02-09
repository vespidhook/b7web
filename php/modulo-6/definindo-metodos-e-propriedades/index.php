<?php
class Post {
  public $likes = 0;
  public $comments = [];
  public $author;

  public function aumentarLike() {
    $this->likes++;
  }
}

$post1 = new Post();
$post1->aumentarLike();

$post2 = new Post();

echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";