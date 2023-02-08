<?php
echo '<pre>';
print_r($_FILES);

$permitidos = ['image/jpeg', 'image/png'];

if(in_array($_FILES['arquivo']['type'], $permitidos)) {
  $nome = md5(time().rand(0, 999)).'.jpg';
  move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

  echo 'Arquivo enviado com sucesso';
} else {
  echo 'Aquivo nao permitido';
}

