<?php
// $nome = 'Bruno';
// $sobrenome = ' Alves';









$nomeCompleto = $nome;
// $nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
$nomeCompleto =  $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;