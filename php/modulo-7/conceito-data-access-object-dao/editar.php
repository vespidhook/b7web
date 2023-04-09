<?php
require 'config.php';
require './dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;

$id = filter_input(INPUT_GET, 'id');
if($id) {
  $usuario = $usuarioDao->findById($id);
}

if($usuario  === false) {
  header("Location: index.php");
  exit;
}
?>
<h1>Editar usuário</h1>
<form action="editar_action.php" method="POST">
  <input type="hidden" name="id" value="<?=$usuario->getId();?>">
  
  <label for="nome">Nome</label><br>
  <input type="text" name="nome" id="nome" value="<?=$usuario->getNome();?>"><br><br>

  <label for="email">E-mail</label><br>
  <input type="email" name="email" id="email" value="<?=$usuario->getEmail();?>"><br><br>

  <input type="submit" value="Editar">
</form>