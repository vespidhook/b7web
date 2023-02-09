<?php
$array = [
  'nome' => 'Bruno Alves',
  'idade' => 90,
  'empresa' => 'Google',
  'cor' => 'azul',
  'profissao' => 'programador'
];
?>

<table border="1">
  <?php foreach($array as $chave => $valor): ?>
    <tr>
      <td><?php echo ucfirst($chave); ?></td>
      <td><?php echo ucfirst($valor); ?></td>
    </tr>
  <?php endforeach; ?>
</table>