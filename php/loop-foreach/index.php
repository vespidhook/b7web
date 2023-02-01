<?php
$ingredientes = [
  'açucar',
  'farinha de trigo',
  'ovo',
  'leite',
  'fermento em pó'
];

// print_r($ingredientes);
// echo "<br/>";

echo "<h2>Ingredientes</h2><br/>";
foreach($ingredientes as $chave => $valor) {
  echo "Item: " . ($chave + 1) . ':' . $valor . "<br/>";
}