<?php

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

 ?>