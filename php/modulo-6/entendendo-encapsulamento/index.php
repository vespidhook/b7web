<?php
class Post {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  private string $author;

  public function aumentarLike() {
    $this->likes++;
  }

  public function setAuthor($author) {
    if(strlen($author) >= 3) {
      $this->author = ucfirst($author);
    }
  }

  public function getAuthor() {
    return $this->author ?? 'N/A';
  }
}

$post1 = new Post(0);
$post1->setAuthor('john doe');

$post2 = new Post(0);
$post2->setAuthor('Jane Doe');

echo "POST 1: ".$post1->likes." likes - ".$post1->getAuthor()."<br/>";
echo "POST 2: ".$post2->likes." likes - ".$post2->getAuthor()."<br/>";