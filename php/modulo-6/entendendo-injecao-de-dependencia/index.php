<?php
interface MatermaticaBasica {
  public function somar($x, $y);
}

class Basico1 implements MatermaticaBasica {
  public function somar($x, $y) {
    return $x + $y;
  }
}

class Basico2 implements MatermaticaBasica {
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

  public function __construct(MatermaticaBasica $b) {
    $this->basico = $b;
  }

  public function somar($x, $y) {
    return $this->basico->somar($x, $y);
  }
}

$mat = new Matematica(new Basico1());
echo $mat->somar(2, 3);

