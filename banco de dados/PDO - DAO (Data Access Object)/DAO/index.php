<?php

require_once("config.php");

// uma forma de mostrar todos da tabela usuario

/*$sql = new Sql_BancoDados();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios); */

//*************************************


//Carrega um usuario

/*$root = new usuario();
$root->loadById(1);
echo $root;	*/

//*************************************

//metodo static 
// uma lista de todos cadastrados
//$lista = usuario::getList();
//echo json_encode($lista);

//*************************************

//Carrega uma lista de usuários buscando especifica pelo login

//$busca = usuario::search("to");
//echo json_encode($busca);

//*************************************

//autenticação login e senha
//carregar um usuario usando login e senha.

/*$User = new usuario();
$User->login("king","123senha");
echo $User;*/

//*************************************

// Criação de cadrastro
//inserir novos usuarios
/*$aluno = new usuario("bob", "12345bobo");

//ou

/*$aluno = new usuario();

$aluno->setDeslogin("bob");
$aluno->setdessenha("14785bobo");

$aluno->insert();

echo $aluno;*/

//*************************************
//alteração de usuario
/*$usuario2 = new usuario();

$usuario2->loadById(9);

$usuario2->update("professor", "lasdh2");

echo $usuario2; */


//*************************************
//deletar o usuario
$usuario2 = new usuario();

$usuario2->loadById(9);
$usuario2->delete();

echo $usuario2;


?>