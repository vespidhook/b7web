<?php
class Post {
  private int $id;
  private int $likes;

  protected function setId($i) {
    $this->id = $i;
  }

  public function getId() {
    return $this->id;
  }

  protected function setLikes($n) {
    $this->likes = $n;
  }

  public function getLikes() {
    return $this->likes;
  }
}

class Foto extends Post {
  private $url;

  public function __construct($id) {
    $this->setId($id);
    $this->setLikes(0);
  }

  public function setUrl($u) {
    $this->url = $u;
  }

  public function getUrl() {
    return $this->url;
  }
}

class Texto extends Post {
  private $texto;

  public function __construct($id) {
    $this->setId($id);
  }

  public function setTexto($t) {
    $this->texto = $t;
  }

  public function getTexto() {
    return $this->texto;
  }
}

$foto = new Foto(1);
$foto->setUrl('http://www.google.com.br');

$texto = new Texto(2);

echo "FOTO: ".$foto->getId()." - ".$foto->getLikes()." likes - ".$foto->getUrl();
echo "<br>";