<?php
/*
Cookies são um mecanismo para armazenar dados no navegador remoto e assim rastrear ou identificar usuários que retornam.
*/

$data = array(
	"empresa" => "Hcode treinamentos"
);


//Envia um cookie
setcookie("Nome_do_cookie", json_encode($data), time() + 3600);

echo "okay";



?>