<?php 
/*
O bloco try/catch vai tratar essa parte "crítica" de código e tentar executá-lo, caso nenhum erro aconteça, o programa segue seu fluxo normal, senão ele entrará no bloco que se encontra dentro do catch para tratar o erro.

*/

/*
locos de try/catch são blocos para tratar exceções que o programador não tem como prever que irão acontecer, erros em tempo de execução, que não há como o programador controlar, como por exemplo, o usuário perder a conexão com a internet. Esses comportamentos inesperados são tratados com o lançamento de exceções, essas exceções lançam erros, avisando que um comportamento inesperado aconteceu.

*/


function trataNome($name){
	if(!$name){

		throw new Exception("nenhum nome foi informado", 1);
		
	}
echo ucfirst($name) . "<br>";

}


	trataNome("jão");


try {
	trataNome("");
	$nomeQualquer = "alguem";
	trataNome($nomeQualquer);
		

}catch(Exception $e) {

	echo $e->getMessage();
}finally {

	echo "<br>"."Executou o try!";
}



?>