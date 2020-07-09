<?php 
/*
scannear
*/

$images = scandir("images");

$dados = array();

foreach($images as $img){

		// faz uma busca no array
	if(!in_array($img, array(".", ".."))) {

		$filename = "images". DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		//tamanho em byte
		$info["size"] = filesize($filename);

		//quando foi modificado
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

		//endereço
		$info["url"] = "http://localhost/teste/" .$filename;

		/*
		//windows
		$info["url"] = "http://localhost/teste/" .str_replace("\\", "/", $filename);

		*/


		array_push($dados, $info);

	}

}

echo json_encode($dados);

?>