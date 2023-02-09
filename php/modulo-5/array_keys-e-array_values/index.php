<?php
$array = [
  'nome' => 'Bruno Alves',
  'idade' => 90,
  'empresa' => 'Google',
  'cor' => 'azul',
  'profissao' => 'programador'
];

print_r($array);

echo '<hr>';

$chaves = array_keys($array);
print_r($chaves);

echo '<hr>';

$valores = array_values($array);
print_r($valores);