<?php
require 'config.php';
require './dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($nome && $email) {

  if($usuarioDao->findByEmail($email) === false) {
    $novoUsuario = new Usuario();
    $novoUsuario->setNome($nome);
    $novoUsuario->setEmail($email);

    $usuarioDao->add($novoUsuario);

    header("Location: index.php");
    exit;
  } else {
    header("Location: adicionar.php");
    exit;
  }
}