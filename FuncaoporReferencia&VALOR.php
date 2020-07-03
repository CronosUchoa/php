<?php

//por referencia
$numero02 = 5;

echo "Valor da variavel 01 sem referencia:  " . $numero02;
echo "<br>";

function referencia(&$num_1){

	$num_1 +=10;

	return $num_1;
}



//Execução da função
echo "o valor da variavel 01 de quando chamamos a funcao POR REFERENCIA e passamos o parametro por referencia:  " . referencia($numero02) . "<br>";
echo "o valor da variavel 01 após a referencia: " . $numero02;
echo "<br>";

// por valor
$numero03 = 5;
echo "<br>";
echo "Valor da variavel 02:   " . $numero03;
echo "<br>";
function valor($num_1){

	$num_1 +=15;

	return $num_1;
}


echo "o valor da variavel 02 de quando chamamos a funcao POR VALOR e passamos o parametro por valor padrao:  " .valor($numero03) . "<br>";
echo "o valor da variavel 02 após a passa o parametro por valor: " . $numero03;
echo "<br>";

echo "<br>";
echo "Funcao por referencia";
echo "Nota: Sempre que o valor do parâmetro for alterado o valor da variável externa será alterado e assim vice-versa.";
echo "<br>";
echo "<br>";
echo "Funcao por valor";
echo "só altera a variavel quando a funcao é chamada, e a alteracao n é permanente. Ou seja, a funcao n muda o valor real da variavel. ela so usa a variavel durante a execução da funcao.";

?>