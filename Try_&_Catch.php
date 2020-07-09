<?php 

//vai lançar a exceção/erro
//através do Try ele irá tentar executar o código, caso não ocorra nenhum erro, o programa seguirá o seu fluxo normal.
try{

	//erro fatal
	throw new Exception("houve um erro", 400);
	

}
// usado para capturar exceçõe/erro
catch(Exception $e){

	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));

}


?>