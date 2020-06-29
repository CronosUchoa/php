<?php
/*
Namespaces possibilitam o agrupamento de classes, interfaces, funções e constantes, visando evitar o conflito entre seus nomes, atuando como um encapsulador para estes itens, seu funcionamento é equivalente ao de diretórios em sistemas operacionais, onde dois arquivos de mesmo nome não podem existir em um único diretório, mas nada impede a existência de dois arquivos de mesmo nome localizados em diretórios distintos, este mesmo princípio é aplicado no PHP através de namespaces,

DECLARANDO NAMESPACE :
//NAMESPACE E NOME DA PASTA;
namespace Client;



USANDO O NAMESPACE:

use Client\Cadastro
*/


require_once("config.php");

//nome da pasta e o nome da class. no caso o endereço
use Client\Cadastro;

$cad = new Cadastro();

$cad->setNome("Gabriel Henrique");
$cad->setEmail("Gabriel5432@gmail.com");
$cad->setSenha("123456");


$cad->registrarVenda();

?>