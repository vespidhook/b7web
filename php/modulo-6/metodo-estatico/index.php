<?php
class Matematica {
  public function somar($x, $y) {
    return $x + $y;
  }
}

$m = new Matematica;
echo $m->somar(10, 20);