<?php
/*
 interface é utilizada como um padrão comum. 

No PHP, as interfaces são nada mais do que um modelo de assinaturas de método para outras interfaces ou classes concretas implementarem.

Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe deve implementar, sem definir como esses métodos serão tratados.

*/

interface Veiculo {

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

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

$carro = new Civic();

$carro->trocarMarcha(1);

?>