<?php 
/*
função include()
include(): inclui o arquivo passado como parâmetro. Se o arquivo não for encontrado, o PHP irá lançar um "warning", mas dará continuidade na execução.

include_once(): o funcionamento dessa função é igual ao da função include(), porém, o arquivo só será importado caso o mesmo ainda não tenha sido.

função require()
require(): a função require() importa arquivos, porém, caso o mesmo não seja encontrado, será levantado uma exceção e a execução é finalizada. Essa é uma maneira de interrompermos a execução dos scripts caso alguma anomalia ocorra.

require_once(): o funcionamento é igual ao da função require(), porém, um arquivo só será importado caso o mesmo ainda não tenha sido.

#__autoload() = tentativa de carregar classe indefinida;
*/

function incluirClasses($nomeClass){

	if(file_exists($nomeClass. ".php") === true) {
		require_once("$nomeClass.php");
		
	}
	
	
}

//r — Registra a função dada como implementação de __autoload()
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClass){

	//endereço da pasta; DIRECTORY_SEPARATOR é a costante pra "\" or "/"
	if(file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClass. ".php") === true){
		require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClass. ".php");
	}
});


$carro = new DelRey();
$carro->acelerar(2000);

?>