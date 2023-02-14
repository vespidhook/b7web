<?php

class Basico1 {
  public function somar($x, $y) {
    return $x + $y;
  }
}

class Basico2 {
  public function somar($x, $y) {
    $res = $x;
    for($q=0;$q<$y;$q++) {
      $res++;
    }
    return $res;
  }
}

class Matematica {
  private $basico;

  public function __construct($b) {
    $this->basico = $b;
  }

  public function somar($x, $y) {
    return $this->basico->somar($x, $y);
  }
}

$basico = new Basico1();

$mat = new Matematica($basico);
echo $mat->somar(2, 3);

class Database {
  private $engine;

  public function __construct(DatabaseInterface $eng) {
    $this->engine = $eng;
  }

  public function listarTudo() {
    return $this->engine->listarTudo();
  }
}

class MysqlEngine implements DatabaseInterface {
  public function listar() {
    return 'mysql';
  }
}

class OracleEngine implements DatabaseInterface {
  public function listar() {
    return 'mysql';
  }
}

class MongoEngine implements DatabaseInterface {
  public function listar() {
    return 'mysql';
  }
}

$db = new Database(new MysqlEngine());
echo $db->listar();