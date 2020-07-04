<?php 

/**
 * 
 */
class usuario 
{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){

		return $this->idusuario;

	}

	public function setIdusuario($value) {

		$this->idusuario = $value;
	}


	public function setDeslogin($value) {

		$this->deslogin = $value;
	}

	public function getDeslogin(){

		return $this->deslogin;

	}

	public function setdessenha($value) {

		$this->dessenha = $value;
	}

	public function getdessenha(){
		return $this->dessenha;

	}

	public function setDtcadastro($value) {

		$this->dtcadastro = $value;

	}

	public function getDtcadastro(){

		return $this->dtcadastro;

	}

	public function loadById($id){

		$sql = new Sql_BancoDados();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID",array(
			":ID" => $id
		));

		if(count($results) > 0) {

			$this->setDados($results[0]);
		
		}

	}	
	// uma lista
	public static function getList(){

		$sql = new Sql_BancoDados();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");

	}

	//search procurar pelo nome de login

	public static function search($login){

		$sql = new Sql_BancoDados();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(':SEARCH'=>"%".$login."%"));

	}

	//autenticação
	public function login($login, $password){

		$sql = new Sql_BancoDados();
		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD",array(
			":LOGIN" => $login,
			":PASSWORD" => $password
		));

		if(count($results) > 0) {

			$this->setDados($results[0]);
			
		
		} else {

			throw new Exception("Login e/ou senha inválida !!");

		}

	}
	// a ação estava se repetindo entao criamos um metodo

	public function setDados($dado){

			$this->setIdusuario($dado['idusuario']);
			$this->setDeslogin($dado['deslogin']);
			$this->setdessenha($dado['dessenha']);
			$this->setDtcadastro($dado['dtcadastro']);

	}


	//colocar usuarios novos no banco de dados

	public function insert(){

		$sql = new Sql_BancoDados();
		//sp_usuarios_insert precisa criar uma procedure no banco de dados

		/*
			CREATE PROCEDURE 'sp_usuarios_insert' {
				pdeslogin VARCHAR(64),
				pdessenha VARCHAR(256)
			}
			BEGIN

				INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(pdeslogin, pdessenha);
				
				SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();
			END



		*/
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN' => $this->getDeslogin(),
			':PASSWORD' => $this->getdessenha()
		));

			if(count($results) > 0) {

			$this->setDados($results[0]);
		
		}

	}

		public function update($loginn, $passwordd) {

			$this->setDeslogin($loginn);
			$this->setdessenha($passwordd);

			$sql = new Sql_BancoDados();

			$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario =:ID", array(
				':LOGIN'=>$this->getDeslogin(),
				':PASSWORD'=>$this->getdessenha(),
				':ID'=>$this->getIdusuario()

			));


		}

		public function delete() {

			$sql = new Sql_BancoDados();

			$sql->query("DELETE FROM tb_usuarios where idusuario = :ID", array(
				':ID'=>$this->getIdusuario()
			));

			$this->setIdusuario(0);
			$this->setDeslogin("");
			$this->setdessenha("");
			$this->setDtcadastro(new DateTime());

		}


	/*public function __construct($Login = "" , $password = ""){

		$this->setDeslogin($login);
		$this->setdessenha($password);

	}*/


	//procurar pelo id
	public function __toString(){

			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getdessenha(),
				"dtcadastro"=>$this->getDtcadastro()
			));
		}


}
	



?>