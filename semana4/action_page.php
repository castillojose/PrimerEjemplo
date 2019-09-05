<?php

//var_dump($_GET);

//echo"sunombre es".$_GET['Nombre'];

	$miobjeto=new stdClass();
    $miobjeto->nombre="alfredo";
	$miobjeto->apellido="mercurio";
	


	//var_dump(json_decode($miobjeto));
    $archivo=fopen('usuario.txt','a');
	fwrite ($archivo,json_encode($miobjeto));
	fclose($archivo);

?>




