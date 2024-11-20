<?php

/**Enunciado: Crea un formulario en PHP que solicite al usuario su nombre y apellido
 por separado. Al enviar el formulario, el programa debe mostrar un mensaje que diga 
 "¡Hola [nombre] [apellido]!". */

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];

echo "Hola " . $nombre . " " . $apellidos;
