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
        $edad = $_GET['edad'];
        if ($edad >=0 && $edad < 12) {
            echo "<p>Infante</p>";
        } else if ($edad >= 12 && $edad <= 17) {
            echo "<p>Adolescente</p>";
        } else if ($edad >= 18 && $edad <= 60) {
            echo "<p>Adulto</p>";
        } else if ($edad > 60) {
            echo "<p>Anciano</p>";
        } else {
            echo "<p>El número introducido no es una edad.</p>";
        }
        ?>
    </div>
</body>

</html>