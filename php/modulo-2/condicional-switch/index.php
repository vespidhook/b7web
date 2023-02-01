<?php 
$tipo = 'video';

// if($tipo == 'foto') {
//   echo 'Exibindo uma foto';
// }
// if($tipo == 'video') {
//   echo 'Exibindo uma video';
// }
// if($tipo == 'texto') {
//   echo 'Exibindo uma texto';
// }

switch($tipo) {
  case 'texto':
    echo 'Exibindo texto';
    break;
  case 'video':
    echo 'Exibindo video';
    break;
  case 'foto':
    echo 'Exibindo foto';
    break;
}

