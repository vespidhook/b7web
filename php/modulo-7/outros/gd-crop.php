<?php
$arquivo = 'download.jpeg';
$width = 300;
$height = 300;

list($originalWidth, $originalHeigth) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeigth;
$radioDest = $width / $height;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

if($radioDest > $ratio) {
  $finalWidth = $height * $ratio;
  $finalHeight = $height;
} else {
  $finalHeight = $width / $ratio;
  $finalWidth = $width;
}

if($finalWidth < $width) {
  $finalWidth = $width;
  $finalHeight = $width / $ratio;

  $finalY = -(($height - $finalHeight) / 2);
} else {
  $finalHeight = $height;
  $finalWidth = $height * $ratio;

  $finalX = -(($width - $finalWidth) / 2);
}

$imagem = imagecreatetruecolor($width, $height);
$originalImg = imagecreatefromjpeg($arquivo);


imagecopyresized(
  $imagem, 
  $originalImg, 
  $finalX, $finalY, 0, 0, 
  $finalWidth, $finalHeight, 
  $originalWidth, $originalHeigth
);

header('Content-Type: image/jpeg');
imagejpeg($imagem, null, 100);