<?php
/*
Uma classe abstrata é uma classe que serve de modelo para outras classes. 

 ela não pode ser instanciada e pode conter ou não métodos abstratos, podendo ser implementados nas classes descendentes.

 Crio uma classe abstrata defino os métodos que vai ter e o que eles fazem.

e pra usar-la preciso criar outra classe que vai estender dessa classe abstrata.
*/
interface Veiculo {

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

	public function acelerar ($vel){

		echo "O Veiculo acelerou até " . $vel . "km/h";

	}


	public function freiar ($fre){

		echo "O Veiculo freiou até " . $vel . "km/h";

	}


	public function trocarMarcha ($tMacha){

		echo "O Veiculo trocou a macha até " . $tMacha;

	}

}

class DelRey extends Automovel {

	public function empurrar(){
		echo "<br>";
		echo "leve ao mecanico";
		echo "<br>";
		echo "poxa, ajuda empurrar ai";
	}

}

$carro = new DelRey();

$carro->acelerar(200);
$carro->empurrar();


?>
