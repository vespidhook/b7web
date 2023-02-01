<?php
$nomeSujo = '  Bruno      ';
$nomeLimpo = trim($nomeSujo);
$nome = 'Bruno Alves';
$nomeAlterado = str_replace('Alves', 'Silva', $nome);
$nomeCompleto = 'Bruno Alves';

$nome_ = substr($nomeCompleto, 3, 2); 

echo "NOME SUJO: ".strlen($nomeSujo)."<br>";
echo "NOME LIMPO: ".strlen($nomeLimpo)."<br>";
echo "NOME: ".strtolower($nome)."<br>";
echo "NOME: ".strtoupper($nome)."<br>";
echo "NOME ALTERADO: ".$nomeAlterado."<br>";
echo "NOME: ".$nome_."<br>";