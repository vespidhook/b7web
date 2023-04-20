<?php
$hash = '$2y$10$FT6V1m.4GE8FZyZgi1TqXORHVikkRjhQ.ZUoU4pG6lCn.aBgNKq5W';
$senha = '123456';

$md5 = 'e10adc3949ba59abbe56e057f20f883e';

if(password_verify($senha, $hash)){
    echo "Senha correta";
}else{
    echo "Senha incorreta";
}

if(md5($senha) == $md5){
    echo "Senha correta";
}else{
    echo "Senha incorreta";
}