<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">

	<button type="submite">Send</button>

</form>

<?php

//$_SERVER informação do servidor e ambiente de execução
// $_SERVER é um array

//REQUEST_METHOD
//Contém o método de request utilizando para acessar a página
//Geralmente 'GET', 'HEAD', 'POST' ou 'PUT'.
if($_SERVER["REQUEST_METHOD"] === "POST") {
	//$_FILES
	//Um array associativo de items enviado através do script atual pelo método HTTP POST.
	$file = $_FILES["fileUpload"];

	if($file["error"]) {

		throw new Exception("Error: " . $file["error"]);
		
	}

	$dirUploads = "uploads";

	if(!is_dir($dirUploads)) {

		mkdir($dirUploads);
	}

	//tmp_name = o nome temporáro com o qual o arquivo enviado foi amarzenado no servidor
	//move_uploaded_file(filename, destination) arquivo e o destino
	if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {

		echo "Upload realizado com sucesso!";
	}else {
		throw new Exception("Não foi possível realizar o upload");
		
	}

}


 ?>