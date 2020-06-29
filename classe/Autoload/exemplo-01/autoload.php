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

function __autoload($nomeClass){

	require_once("$nomeClass.php");
}


$carro = new DelRey();
$carro->acelerar(2000);

?>