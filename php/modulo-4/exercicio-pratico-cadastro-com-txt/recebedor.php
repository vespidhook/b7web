<?php
$nome = filter_input(INPUT_POST,'nome');
if($nome){
    $nomes = file_get_contents('nomes.txt');
    $nomes .= $nome."\n";
    file_put_contents('nomes.txt', $nomes);
       
    header('Location: index.php');
    exit;
}