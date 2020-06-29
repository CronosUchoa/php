<?php
/*
Herança

a classe pai não acessa a classe filho.
mas a classe filho acessa a classe pai.
*/

// classe pai
class Documento {

	private $numero;

	public function getNumero(){

		return $this->numero;
	
	}
	public function setNumero($n){
		$this->numero = $n;

	}

}


//classe filho
class CPF extends Documento {

	public function validar():bool{

		$numeroCPF = $this->getNumero();
		//echo $numeroCPF . "<br>";
		//validação de cpf
		return true;
	}

}

$doc = new CPF();

$doc ->setNumero("111222333-44");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

?>