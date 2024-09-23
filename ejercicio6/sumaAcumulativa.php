<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma Acumulativa</title>
    <link rel="stylesheet" href="../EjerciciosPHP.css">
</head>

<body>
    <div>
        <?php
        $resultado = 0;
        $n = $_GET['numero'];
        for ($i = 1; $i <= $n ; $i++) {
            $resultado += $i;
        }
        echo "<p><b>La suma de todos los números entre 1 y $n es $resultado</b></p>"
        ?>
    </div>
</body>

</html>