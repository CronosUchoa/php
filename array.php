<?php 

$pessoas = array();


/*array_push($pessoas, $pessoa = [
	'nome' => 'João',
	'idade' => 20

]);

array_push($pessoas, $pessoa = [
	'nome' => 'ege',
	'idade' => 23

]);*/

array_push($pessoas, array ('gabriel', 'miguel'), array('valter', 'luciana'));

//print_r($pessoas);

echo json_encode($pessoas); // pra transformar um array em em json

//$variavelqualquer = json_decode($json, true) // pra transformar um json em array

?>