<?php
/*
Encapsulamento =  modificadores de acesso
Encapsulament é a técnica que faz com que detalhes internos do funcionamento dos métodos de uma classe permaneçam ocultos para os objetos.

Encapsulamento significa separar o programa em partes, o mais isoladas possível. A ideia é tornar o software mais flexível, fácil de modificar e de criar novas implementações
*/

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados() {

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}

//classe filho
class Programador extends Pessoa {

public function verDados() {
		// get_class diz em qual classe foi feito a instância
		echo get_class($this) . "<br>";
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";

	}

}



$objeto = new Programador();
//vai dar certo acessar o nome pq ele é publico
//echo $objeto->nome . "<br>";

/*vai dar errado pq esse dado é protegido.
só quem pode acessar é quem estar dentro da classe. ou quem herda dessa classe
echo $objeto->senha . "<br>";*/

/* vai dar errado pq é privado e o privado é mais protegido q o protected. ou seja, nem mesmo os herdeiros consegue acessa. somente a propria classe consegue acessa
echo $objeto->idade . "<br>";*/

/*pra resolver esse problema, eu preciso de um intermediaro*/

//esse metodo está dentro da classe e ele acessa o private e protected. 
// eu consigo acessar ele poq ele public
$objeto->verDados();


?>