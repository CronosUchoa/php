<?php 
/*
CRIAR E REMOVER
*/

$name = "images";

if(!is_dir($name)){
	//criar a pastaS
	mkdir($name);
	echo "Diretório $name criado com sucesso!";

} else {
	
	//apagar a pasta
	rmdir($name);
	echo "Já existe o diretório: $name, ele acaba de ser removido!";

}

?>