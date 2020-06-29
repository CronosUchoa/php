<?php
/*
Método Mágicos
é quando usamos __construct
ele é chamado no momento em que se instância 
*/

class Endereco {

	private $rua;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){

		$this->rua = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

	//quando a classe é destruida. ou seja, quando ele é removido da memoria
	public function __destruct(){
		var_dump("destruir essa porra");
	}

	//transforma em string pra aparecer no eco
	public function __toString(){

		return $this->rua.", ".$this->numero.", ".$this->cidade;
		echo "<br>";
	}

}

$meuendereco = new Endereco("rua projetada", "42", "rio de janeiro");

//print_r($meuendereco);
echo $meuendereco;

// tira da memoria
unset($meuendereco);

?>

