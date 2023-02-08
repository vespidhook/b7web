<?php
$array = [
  'nome' => 'Bruno Alves',
  'idade' => 90,
  'empresa' => 'Google',
  'cor' => 'azul',
  'profissao' => 'programador'
];

if(key_exists('idade', $array)) {
  $idade = $array['idade'];
  echo $idade;
} else {
  echo "A chave idade não existe no array";
}

