<?php
$bolo1 = [
  'açucar',
  'farinha de trigo',
  'ovo',
  'leite',
  'fermento em pó'
];

$bolo2 = [
  'vasilha',
  'agua morna',
  ...$bolo1,
  'corante'
];

echo $bolo2[5]."<br>";

print_r($bolo2);