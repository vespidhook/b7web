<?php
class Matematica {

  public static string $nome = 'Bruno';

  public static function somar($x, $y) {
    return $x + $y;
  }
}

// $m = new Matematica;
// echo $m->somar(10, 20);

echo Matematica::somar(10, 20);
echo Matematica::$nome;
