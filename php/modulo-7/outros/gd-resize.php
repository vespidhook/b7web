<?php
$arquivo = 'download.jpeg';
$maxWidth = 200;
$maxHeight = 200;

list($originalWidth, $originalHeigth) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeigth;
$radioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if($radioDest > $ratio) {
  $finalWidth = $maxHeight * $ratio;
  $finalHeight = $maxHeight;
} else {
  $finalHeight = $maxWidth / $ratio;
  $finalWidth = $maxWidth;
}

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefromjpeg($arquivo);

// var_dump($arquivo);

imagecopyresized($imagem, $originalImg, 0, 0, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeigth);

header('Content-Type: image/jpeg');
imagejpeg($imagem, 'paisagem_nova.jpg', 100);