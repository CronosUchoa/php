<?php
//tipo desse arquivo será uma imagem
header("Content-Type: image/png");

//criar imagem width(largura) e height(altura)
$image = imagecreate(256, 256);

//cores
//a primeira cor vira a de fundo
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);


//imagem string, tamanho da font, eixo X e Y, STRING, cor
imagestring($image, 10, 70, 120, "Cronos Uchoa", $red);

//dizer qual é formato da imagem que será gerado
imagepng($image);

//destroi a imagem
imagedestroy($image); 



?>