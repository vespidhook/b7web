<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id) {
  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();

  if($sql->rowCount() > 0) {

    $info = $sql->fetch(PDO::FETCH_ASSOC);

  } else {
    header("Location: index.php");
    exit;
  }
} else {
  header("Location: index.php");
  exit;
}
?>
<h1>Editar usuário</h1>
<form action="editar_action.php" method="POST">
  <label for="nome">Nome</label><br>
  <input type="text" name="nome" id="nome" value="<?=$info['nome']?>"><br><br>

  <label for="email">E-mail</label><br>
  <input type="email" name="email" id="email" value="<?=$info['email']?>"><br><br>

  <input type="submit" value="Editar">
</form>