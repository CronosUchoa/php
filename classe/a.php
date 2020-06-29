<?php 

/*
EXEMPLO 1 DE COMO CRIAR UMA CLASSE
*/

class Pessoa { //classe

	public $nome; // atributo

	public function falar(){ //metodo

		return "O meu nome é ". $this->nome;

	}

}

$glaucio = new Pessoa(); // objeto
$glaucio->nome = "Glaucio professor"; //acessando o atributo public
//echo $glaucio->nome;
echo $glaucio->falar();





?>