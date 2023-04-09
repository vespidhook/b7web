<?php

$db_name = "teste";
$db_host = "132.226.245.173";
$db_user = "teste";
$db_pass = "teste";

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
