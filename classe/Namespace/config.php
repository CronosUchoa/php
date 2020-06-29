<?php

spl_autoload_register(function($nameClass){
	//autoload especificando o caminho.
	$dirClass = "class";
	//$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	// util pra mac e linux
	//str_replace — Substitui todas as ocorrências da string de procura com a string de substituição
	$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");

	if(file_exists($filename)) {

		require_once($filename);
	}

});


?>