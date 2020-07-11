<?php
/*
Entendendo um pouco sobre Command Injection

*/


if($_SERVER["REQUEST_METHOD"] === 'POST'){

//escapeshellcmd diz que qualquer comando vindo de fora ele dará um scape. ou seja, ele anula transformando em uma string
	$cmd = escapeshellcmd($_POST["cmd"]);



echo "<pre>";
//a pasta que está o arquivo
//$comando = system("ls", $retorno);

//de forma dinamica
$comando = system($cmd, $retorno);


echo "</pre>";

}

?>

<form method="post">

	<input type="text" name="cmd">
	<button type="submit">enviar</button>

</form>