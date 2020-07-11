<?php 
/*
PHP SESSION HIJACKING COMO LIDAR ?//

*/
session_start();

//Depois de verificar login e senha reinicie o ID da sessão
session_destroy();

session_start();

//gerar uma nova sessão
session_regenerate_id();

echo session_id();

?>