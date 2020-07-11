<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>



<?php
/*

cross-site_Scripting or xss;
como lidar


*/


if(isset($_POST['busca'])){
// como lidar com cross-site_Scripting
	//usar strip_tags = transformar tags em string
	// htmlentities
	echo strip_tags($_POST['busca'], "<strong>");
}


?>