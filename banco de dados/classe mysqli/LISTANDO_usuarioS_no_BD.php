

<?php
//listando o usuario
//senha aleatoria
$conn = new mysqli("127.0.0.1", "root", "123456", "bdphp7");

if($conn->connect_error){

	echo "error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//criando um json
$exmjson = array();

//MYSQLI_ASSOC N TRAS OS INDICE

//fetch_array Retorna uma matriz que corresponde a linha obtida ou NULL se não houverem mais linhas no conjunto de resultados.

// em vez de fetch_array posso colocar fetch_assoc();

while($row = $result->fetch_array(MYSQLI_ASSOC))
{
	array_push($exmjson, $row);
	//var_dump($row);
}

echo json_encode($exmjson);

?>