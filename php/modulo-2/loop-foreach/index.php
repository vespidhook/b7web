<?php
$ingredientes = [
  'açucar',
  'farinha de trigo',
  'ovo',
  'leite',
  'fermento em pó',
  'corante'
];

// print_r($ingredientes);
// echo "<br/>";

echo "<h2>Ingredientes</h2><br/>";

// foreach($ingredientes as $chave => $valor) {
//   echo "Item: " . ($chave + 1) . ':' . $valor . "<br/>";
// }

echo '<ul>';
foreach($ingredientes as $valor) {
  echo '<li>'.$valor.'</li>';
}
echo '</ul>';

