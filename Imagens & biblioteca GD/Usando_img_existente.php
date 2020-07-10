<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleCor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "certificado", $titleCor);
imagestring($image, 5, 440, 350, "Bob bobao", $titleCor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleCor);

header("Content-type: image/jpeg");

imagejpeg($image);

//salvar a imagem no pc
//imagejpeg($image, "certificado-". date("Y-m-d").".jpg");
//imagejpeg($image, "certificado-". date("Y-m-d").".jpg",10); //esse numero é a qualidade da imagem;

imagedestroy($image);


?>