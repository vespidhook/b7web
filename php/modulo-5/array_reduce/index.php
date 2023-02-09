<?php
// $numeros = [1,2,3,4,5];

// function somar($subtotal, $item) {
//   $subtotal += $item;
//   return $subtotal;
// }

// $total =  array_reduce($numeros, 'somar');

// echo $total;

$pessoas = [
  ['nome' => 'João', 'sexo' => 'M', 'idade' => 20],
  ['nome' => 'Maria', 'sexo' => 'F', 'idade' => 25],
  ['nome' => 'Pedro', 'sexo' => 'M', 'idade' => 30],
  ['nome' => 'Ana', 'sexo' => 'F', 'idade' => 35],
  ['nome' => 'Jorge', 'sexo' => 'M', 'idade' => 40],
];

function contar_m($subtotal, $item) {
  if ($item['sexo'] === 'M') {
    $subtotal++;
  }
  return $subtotal;
}

$total_m = array_reduce($pessoas, 'contar_m');

function soma_m($subtotal, $item) {
  if ($item['sexo'] === 'M') {
    $subtotal += $item['idade'];
  }
  return $subtotal;
}

$soma_m = array_reduce($pessoas, 'soma_m');

$media_m = $soma_m / $total_m;

echo "Total de homens: ".$total_m."<br/>";
echo "Total de idade dos homens: ".$soma_m."<br/>";
echo "Media: ".$media_m."<br/>";
