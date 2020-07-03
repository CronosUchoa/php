<?php 

//conectando ao banco de dado
$conn = new PDO("mysql:host=localhost;dbname=bdphp7", "root", "123456");

$conn->beginTransaction();

//preparando a ação(nesse caso DELETANDO os dados do usuario na tabela) no banco de dado
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");


$id = 7;


//executando a ação
$stmt->execute(array($id));

//Confirmando a ação 
$conn->commit();

echo "os dados NAO foram DELETADOS do banco de dados !";
?>