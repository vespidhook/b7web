<?php
function somar($n1, $n2) {
  $total = $n1 + $n2;
  return $total;
}

$x = somar(1, 22);
$y = somar(14, 22);
$w = somar($x, $y);

echo "TOTAL: ".$w;
