<?php
    $velocidad = $_POST['velocidad'];
    $distancia = $_POST['distancia'];

    echo "El tiempo del viaje será de " . $distancia/$velocidad . " horas.";
?>