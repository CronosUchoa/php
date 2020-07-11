<?php
/*
Criptografia em PHP
usando openssl_encrypt

*/

define('SECRETA_IV', pack("a16", "senha"));
define('SECRETA', pack("a16", "senha"));


$data = [

	"nome" => "bobo"

];


/*CRIPTOGRAFIA*/
$openssl = openssl_encrypt(
	 json_encode($data),/*STRING*/
	 'AES-128-CBC', /*ALGORITMO DE CRIPTOGRAFIA*/
	 SECRETA,
	 0,/*TEM 2 OPCAO 0 E 1; PODE RETORNAR ALGUMA INFORMAÇAO(1) OU NÃO (0)*/
	 SECRETA_IV
);

echo $openssl;

/*DESCRIPTOGRAFIA*/

$desopenssl = openssl_decrypt(
	$openssl,
	'AES-128-CBC',
	SECRETA,
	0,
	SECRETA_IV
);

echo "<br>";
var_dump(json_decode($desopenssl, true));

?>