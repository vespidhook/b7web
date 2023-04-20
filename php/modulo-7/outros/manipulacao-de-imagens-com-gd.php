<?php
$imagem = imagecreatetruecolor(300,300);

$cor = imagecolorallocate($imagem, 255, 0, 0);
imagefill($imagem, 0, 0, $cor);

header("Content-type: image/jpeg");

imagejpeg($imagem, 'nava_imagem.jpeg', 100);
// imagepng($imagem, 'nava_imagem.png');
