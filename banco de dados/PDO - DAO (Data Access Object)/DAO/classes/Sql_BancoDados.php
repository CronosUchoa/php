<?php
/*
PDO junto com programação orientada a objeto.
*/

class Sql_BancoDados extends PDO {

	private $conn;

	//poderia conectar em outro banco passando como parametro no construct
	public function __construct(){
		//conectar com o banco de dados
		$this->conn = new PDO("mysql:host=localhost; dbname=bdphp7", "root", "123456");

	}

	private function setParams($statment, $parameters = array()){

		foreach($parameters as $key => $value) {

			$this->setParam($statment,$key, $value);

		}

	}

	private function setParam($statment, $key, $value){

		$statment->bindParam($key,$value);
	}

	public function query ($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}


	public function select($rawQuery, $params = array()):array{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);


	}


}




?>