<?php

//A utilização do PDO fornece uma camada de abstração em relação a conexão com o banco de dados visto que o PDO efetua a conexão com diversos bancos de dados da mesma maneira, modificando apenas a sua string de conexão.
//mysql
//$conn = new PDO("mysql:dbname=bdphp7;host=localhost", "root", "123456");

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS,1433; ConnectionPooling=0", "sa", "Sama456123*");

$stmt = $conn->prepare("SELECT *FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {

	foreach($row as $key => $value) {

		echo "<strong>" . $key . ":</strong>" . $value . "<br>" ;
	}

	echo "==================================================<br>";

}

//var_dump($results);

?>