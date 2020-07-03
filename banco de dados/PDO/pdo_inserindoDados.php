<?php 

//conectando ao banco de dado
$conn = new PDO("mysql:host=localhost;dbname=bdphp7", "root", "123456");

//preparando a ação(nesse caso inserindo dados do usuario na tabela) no banco de dado
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "toto";
$password = "456789";

//colocando a informaçao nos parametro
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

//executando a ação
$stmt->execute();

echo "os dados foram para o banco de dados !";
?>