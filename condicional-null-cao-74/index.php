<?php
$nome = 'Bruno';
// $sobrenome = ' Alves';









$nomeCompleto = $nome;
// $nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;