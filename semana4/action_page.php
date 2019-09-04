<?php

//var_dump($_GET);

//echo"sunombre es".$_GET['Nombre'];
$archivo = fopen('usuario.txt','a');
	fwrite ($archivo,$_GET['Nombre']."\n");
	

?>




