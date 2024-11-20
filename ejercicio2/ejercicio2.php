<?php

/** Diseña un formulario que pida al usuario la distancia a recorrer (en kilómetros) 
 * y la velocidad promedio esperada (en km/h). Al enviar el formulario, el programa 
 * debe calcular y mostrar el tiempo que tomará el viaje en horas. */
$distancia = $_GET['distancia'];
$velocidad = $_GET['velocidad'];

echo "Tardarás " . ($distancia / $velocidad) . "horas";
