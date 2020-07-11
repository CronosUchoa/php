<?php
/*
estudando sobre falahas antigas que alguem pode usar sql inject
*/


$id = (isset($_GET["id"]))?$_GET["id"]:1;
//possivel solução
if(!is_numeric($id) || strlen($id)>5){

exit("inteligente, mas não muito!")

}

$conn = mysqli_connect("localhost", "root", "root", "bdphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)){

	// o comando or 1=1 -- 
	//na barra de pesquisa no navegador explorar essa falha, então como corrigir ?
	echo $resultado-deslogin . "<br>";
} 


?>