<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleCor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 40, 0, 320, 250, $titleCor, "fonts". DIRECTORY_SEPARATOR. "Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 35, 0, 375, 350, $titleCor, "fonts". DIRECTORY_SEPARATOR. "Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Bob bobao");



imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleCor);

header("Content-type: image/jpeg");

imagejpeg($image);

//salvar a imagem no pc
//imagejpeg($image, "certificado-". date("Y-m-d").".jpg");
//imagejpeg($image, "certificado-". date("Y-m-d").".jpg",10); //esse numero é a qualidade da imagem;

imagedestroy($image);


?>