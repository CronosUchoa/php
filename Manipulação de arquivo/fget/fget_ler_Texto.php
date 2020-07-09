<?php 

$filename = "texto.txt";

if(file_exists($filename)){

	$file = fopen($filename, "r");

	while($row = fgets($file)){

		echo $row . "<br>";
	}



	fclose($file);
}

?>