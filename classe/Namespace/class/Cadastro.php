<?php

class Cadastro {

	private $nome;
	private $email;
	private $senha;

	public function getNome():string {

		return $this->nome;
	}


	public function getEmail():string {

		return $this->email;
	}

	//get obter a informção, no caso eu posso pegar a
	//informação ja definida
	public function getSenha():string {

		return $this->senha;
	}

	//set é definir a informação.
	//set vai jogar a informação dentro da variavel.
	public function setNome($n){
		$this->nome = $n;
	}

	public function setEmail($e){
		$this->email = $e;
	}

	public function setSenha($s){
		$this->senha = $s;
	}

	public function __toString(){

		return json_encode(array(
			//chave => valor
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));
	}

}



 ?>