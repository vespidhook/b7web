<?php
$arquivo = 'download.jpeg';
$width = 300;
$height = 300;

list($originalWidth, $originalHeigth) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeigth;
$radioDest = $width / $height;

$finalWidth = 0;
$finalHeight = 0;

if($radioDest > $ratio) {
  $finalWidth = $height * $ratio;
  $finalHeight = $height;
} else {
  $finalHeight = $width / $ratio;
  $finalWidth = $width;
}

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefromjpeg($arquivo);


imagecopyresized(
  $imagem, 
  $originalImg, 
  0, 0, 0, 0, 
  $finalWidth, $finalHeight, 
  $originalWidth, $originalHeigth
);

header('Content-Type: image/jpeg');
imagejpeg($imagem, null, 100);