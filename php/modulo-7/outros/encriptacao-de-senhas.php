<?php
$senha = '123456';

// $hash = password_hash($senha, PASSWORD_BCRYPT);

// echo "SENHA: ".$senha."<br>";
// echo $hash;

$hash = md5($senha);

echo $hash;