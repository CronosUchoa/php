<?php
/*
permissõe de pastas
*/

$pasta = "arquivos";
//upload 0775
//or 0755
$permissao = "0775";


if(!is_dir($pasta)) mkdir($pasta, $permissao);



echo "Diretório criado com sucesso!";



?>