<?php
$nomeCompleto = 'Bruno Alves';
$nomeMinusculo = 'bruno alves';
$posicao = strpos($nomeCompleto, 'e');
$nomes = explode(' ', $nomeCompleto);
$numero = 1232132.12;

echo number_format($numero, 1, ',', '.');

echo $posicao;
echo "<br>";

if($posicao > -1) {
  echo "achou";
} else {
  echo "não achou";
}
echo "<br>";

echo ucwords($nomeMinusculo);
echo "<br>";

echo $nomes[0];
echo "<br>";

print_r($nomes);

