<?php
/*
Define uma função do usuário (error_handler) para manipular erros no script.
*/

//Define uma função do usuário (error_handler) para manipular erros no script.
//Ele especifica a função a ser executada com erros. A sintaxe do error_handler é fornecida abaixo.
function erro_handler($code, $message, $file, $line)
{
	echo json_encode(array(
		"code" =>$code,
		"message" =>$message,
		"line" =>$line,
		"file" => $file
	));

}

// Define uma função do usuário para manipular erros.
//Essa função pode ser usada para definir sua própria maneira de lidar com erros durante o tempo de execução
//ensina pro php a função que vai manipular o erro. 
set_error_handler("erro_handler");


$total = 100 / 0;




?>