<?php
/*
Criptografia em PHP
usando encrypt
encrypt caiu em desuso no php 7.1 +

*/

$data = [

	"nome" => "Hcode"

];

define('SECRETA', pack("a16", "senha"));

$mcrypt = mcrypt_encrypt(
	MCRYPT_RIJNDAEL_128,
	SECRETA,
	json_encode($data),
	MCRYPT_MODE_ECB
);


$final = base64_encode($mcrypt);

var_dump($final);


/*
descriptografia
*/

$DESmcrypt = mcrypt_decrypt(
	MCRYPT_RIJNDAEL_128,
	SECRETA,
	json_decode($final),
	 MCRYPT_MODE_ECB
	);


var_dump($DESmcrypt) ;


?>