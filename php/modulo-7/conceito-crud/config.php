<?php

$db_name = "teste";
$db_host = "144.22.147.129";
$db_user = "teste";
$db_pass = "teste";

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
