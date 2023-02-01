<?php
function somar(int $n1, int $n2, int $n3 = 0) {
  $total = $n1 + $n2 + $n3;
  return $total;
}

$z = somar(7, 1);

// $x = somar(1, 22, 100);
// $y = somar(14, 22);
// $w = somar($x, $y);

// echo "TOTAL: ".$w;
echo $z;


