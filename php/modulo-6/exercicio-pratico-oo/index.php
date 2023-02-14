<?php
require_once 'calculadora.php';

$obj = new Calculadora;
$obj -> add (12);
$obj -> add (2);
$obj -> sub (1);
$obj -> multiply (3);
$obj -> divide (2);
$obj -> add (0.5);

echo 'Total: '.$obj -> getResult ();
$obj -> clear();
?>