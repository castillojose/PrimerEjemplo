
<?php

<!DOCTYPE html>
<html>
<body>

<h2>Listado de usuarios</h2>

<ol>
<?php
$miarchivo = fopen("usuarios.txt", "r") or die("Unable to open file!");
while(!feof($miarchivo)) {
  $objeto=json_decode(fgets($miarchivo));
  echo "<li>".$objeto->Nombre."</li>";
}
fclose($miarchivo);
?>

</ol> 

</body>
</html>
?>