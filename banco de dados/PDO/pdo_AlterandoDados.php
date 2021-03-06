<?php 

//conectando ao banco de dado
$conn = new PDO("mysql:host=localhost;dbname=bdphp7", "root", "123456");

//preparando a ação(nesse caso atualizando os dados do usuario na tabela) no banco de dado
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "totoUpdate";
$password = "456789";
$id = 6;

/*
1 - bindParam(). Para realizar a definição do valor de um parâmetro, esse método recebe como argumento  uma referência, ou seja, uma variável ou uma constante. Isso significa que se informarmos um valor de maneira direta para ele, não irá funcionar.

2 - bindValue(). Para realizar a definição do valor de um parâmetro, esse método pode receber como argumento tanto uma referência como um valor direto.
*/

//colocando a informaçao nos parametro
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

//executando a ação
$stmt->execute();

echo "os dados foram alterados do banco de dados !";
?>