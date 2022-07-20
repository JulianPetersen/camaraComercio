<?php

$destino="julian_petersen5@hotmail.com";

$nombre= $_post["nombre"];
$correo= $_post["correo"];

$contenido="Nombre: " . $nombre . "\nCorreo: " . $correo;

mail($destino, "Agenda de comercio", $contenido);

header("Location:index.html")

?>