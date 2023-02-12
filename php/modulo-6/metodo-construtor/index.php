<?php
class Post {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function __construct($postId) {
    $this->id = $postId;

    $this->likes = 22 * $postId;
  }

  public function aumentarLike() {
    echo 'abc';
    $this->likes++;
  }
}

$post1 = new Post(1);

$post2 = new Post(2);

echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";