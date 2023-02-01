<?php
$idade = 18;

// echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade'; 

$menorDeIdade = ($idade < 18) ? true : false;

if($menorDeIdade) {
  echo 'MENOR';
} else {
  echo 'MAIOR';
}