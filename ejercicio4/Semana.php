<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../EjerciciosPHP.css">
</head>

<body>
    <div>
        <?php
        $dia = $_GET["dia"];

        switch ($dia) {
            case 1:
                echo "<p>El día de la semana $dia es Lunes</p>";
                break;
            case 2:
                echo "<p>El día de la semana $dia es Martes</p>";
                break;
            case 3:
                echo "<p>El día de la semana $dia es Miércoles</p>";
                break;
            case 4:
                echo "<p>El día de la semana $dia es Jueves</p>";
                break;
            case 5:
                echo "<p>El día de la semana $dia es Viernes</p>";
                break;
            case 6:
                echo "<p>El día de la semana $dia es Sábado</p>";
                break;
            case 7:
                echo "<p>El día de la semana $dia es Domingo</p>";
                break;
            default:
            echo "<p style='color:red'>Error: $dia no es un número entre el 1 y el 7</p>";
        }
        ?>
    </div>
</body>

</html>