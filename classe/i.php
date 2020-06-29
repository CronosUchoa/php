<?php
/*
Polimorfismo

o principal conceito é a propriedade de duas ou mais classes derivadas de uma mesma superclasse responderem a mesma mensagem, cada uma de uma forma diferente. Ocorre quando uma subclasse redefine um método existente na superclasse, ou seja, quando temos os métodos sobrescritos

*/

abstract class Animal {

	public function falar(){
		return "emitir som ou ruidos";
	}

	public function mover(){
		return "Anda";
	}

}

class Cachorro extends Animal {

	public function falar(){
		return "late";
	}

}

class Gato extends Animal {

	public function falar(){
		return "mia";
	} 

	public function mover(){
		// parent é usado pra acessar a classe pai de forma static "::"
		return "salta e " . parent::mover();
	}

}

$pluto = new Cachorro();

// 
echo $pluto->falar() . "<br>"; // olha o polimorfismo acontecendo. ele mudou o comportamento do metodo falar
//nesse caso vai ter como resultado "late".

echo $pluto->mover() . "<br>"; // nesse caso ele herdou o comportamento do pai, poís não criamos um polimorfismo com relação a se mover.

$gatinho =  new Gato();

echo "<br>" . "-----------------------------------------------------"."<br>";

echo $gatinho->falar() . "<br>";

echo $gatinho->mover() . "<br>";

?>