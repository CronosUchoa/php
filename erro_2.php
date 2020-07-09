<?php

//quando eu quiser que notice não apareça
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;


?>