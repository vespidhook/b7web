<?php
$array = [
  'nome' => 'Bruno Alves',
  'idade' => 90,
  'empresa' => 'Google',
  'cor' => 'azul',
  'profissao' => 'programador'
];

$chaves = array_keys($array);
$valores = array_values($array);
?>

<table border="1">
  <tr>
    <?php foreach ($chaves as $chave) : ?>
      <th><?= $chave ?></th>
    <?php endforeach; ?>
  </tr>
  <tr>
    <?php foreach ($valores as $valor) : ?>
      <td><?= $valor ?></td>
    <?php endforeach; ?>
  </tr>
</table>
