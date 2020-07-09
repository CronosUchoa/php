<?php 

/*
cUrl
Fazer uma conexão com algum página para enviar ou buscar alguma informação (ou fazer os dois).

*/

$cep = "01310100";
$link = "https://viacep.com.br/ws/$cep/json/";

//iniciar a biblioteca cUrl
$ch = curl_init($link);

//PRIMEIRO DIZ QUE CURL foi iniciado, = $ch
//CURLOPT_RETURNTRANSFER = MANDANDO DADO E ESPERA O RETORNO
// 0 OU 1 = 1 QUER RESPOSTA DE VOLTA, 0 NÃO 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//OPCAO = CURLOPT_SSL_VERIFYPEER // NO CASO TO DIZENDO QUE NÃO PRECISA VERIBBFICAR O CERTIFICADO // FALSE to stop cURL from verifying the peer's certificate.
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//resposta
$response = curl_exec($ch);

curl_close($ch);

//transformar  json em array
$data = json_decode($response, true);

print_r($data);

?>