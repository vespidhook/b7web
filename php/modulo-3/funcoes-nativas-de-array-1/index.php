<?php
// $lista = ['nome1', 'nome2', 'nome3', 'nome4', 'nome5'];

// echo "Total: ".count($lista);

// $lista = ['bruno', 'joice', 'antonia', 'jose'];
// $aprovados = ['bruno', 'joice'];

// $reprovados = array_diff($lista, $aprovados);

// print_r($reprovados);

$numeros = [18,22,12,56,98,780];

// $filtrados = array_filter($numeros, function($item) {
//   if($item > 30) {
//     return true;
//   } else {
//     return false;
//   }
// });

// print_r($filtrados);

$dobrados = array_map(function($item){
  return $item * 2;
}, $numeros);

print_r($dobrados);