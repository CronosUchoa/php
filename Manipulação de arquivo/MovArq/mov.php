<?php 

$dir1 = "pasta_01";
$dir2 = "pasta_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "Readme.txt";

if(!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){

	$file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

	fwrite($file, date("Y-m-d H:i:s"));

	fclose($file);

}
	//mover o arquivo ou só renomear 
	rename(
		$dir1 . DIRECTORY_SEPARATOR . $filename, //origem
		$dir2 . DIRECTORY_SEPARATOR . $filename	//destino

	);

echo "Arquivo $filename movido com sucesso";

?>