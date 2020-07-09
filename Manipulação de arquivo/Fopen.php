<?php 
/*
Fopen
*/
//fopen(filename, mode)
//abrir arquivo
$file = fopen("log.txt", "w+");

fwrite($file, date("Y-m-d H:i:s"));

fclose($file);

echo "arquivo criado com sucesso !";

?>