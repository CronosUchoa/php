<?php
//criando usuário.
//senha aleatoria
$conn = new mysqli("127.0.0.1", "root", "senha_aleatoria", "bdphp7");

if($conn->connect_error){

	echo "error: " . $conn->connect_error;
}

// enviar um comando para o banco de dados

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) values (?,?)");

//bind_param espera dois parametros naquela interrogação
//s de string
$stmt->bind_param("ss", $login, $pass);

$login = "betinho";
$pass = "12345";

$stmt->execute();

?>