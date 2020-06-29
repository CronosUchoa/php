<?php 
/*
EXEMPLO 02
Private e public
diferenças:
Private precisa getter e do setter, porque private só é acessado dentro da classe
*/

class carro {

	private $modelo;
	private $motor;
	private $ano;

	//getters.
	//pegar que ta no atributos.
	public function getModelo(){

		return $this->modelo;

	} 

	//setters.
	//definir ou mudar os valores que estão nos atributos.
	public function setModelo($valorModelo) {

		$this->modelo = $valorModelo;
	}

	//getters.
	//pegar que ta no atributos.
	public function getMotor(){

		return $this->motor;

	} 

	//setters.
	//definir ou mudar os valores que estão nos atributos.
	public function setMotor($valorMotor) {

		$this->motor = $valorMotor;
	}

	//getters.
	//pegar que ta no atributos.
	//função:  a declaração de rertono, eu quero retornar um inteiro
	public function getAno():int{

		return $this->ano;

	} 

	//setters.
	//definir ou mudar os valores que estão nos atributos.
	public function setAno($valorAno) {

		$this->ano = $valorAno;
	}

	public function exibir() {

		return array(
			"modelo" => $this->getModelo(),
			"motor" => $this->getAno()
		);
	}

}


$gol = new carro();
//se fosse public.  voce poderia acessa diretamente no atributos.
//$gol->modelo="Gol Bolinha";

//acesso privado
$gol->setModelo("Gol Bolinha"); //defini o valor do modelo
echo $gol->getModelo(); //pega o valor definido.

//exibir um array
//print_r($gol->exibir());

?>