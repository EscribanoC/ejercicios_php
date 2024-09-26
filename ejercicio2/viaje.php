<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiempo de viaje</title>
    <link rel="stylesheet" href="../EjerciciosPHP.css">
</head>

<body>
    <div>
        <?php
        $velocidad = $_POST['velocidad'];
        $distancia = $_POST['distancia'];

        if (isset($velocidad) && isset($distancia)){
            if(is_numeric($velocidad)&& is_numeric($distancia)){
                echo "El tiempo del viaje será de " . $distancia / $velocidad . " horas.";
            } else{
                echo "Lo introducido no es un número.";
            }
        }
        ?>
        <br>
        <a href="viaje.html">Volver atrás</a>
</body>

</html>