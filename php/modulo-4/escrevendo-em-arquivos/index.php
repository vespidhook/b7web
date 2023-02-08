<?php
$texto = file_get_contents('texto.txt');
$texto .= "\nBruno Alves da Silva";
file_put_contents('texto.txt', $texto);

echo "Arquivo atualizado com sucesso!";