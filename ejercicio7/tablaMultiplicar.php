<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <link rel="stylesheet" href="../EjerciciosPHP.css">
</head>
<body>
    <div>
        <?php
            $numero = $_GET['numero'];
            echo "<h3>Tabla de multiplicar del $numero</h3>";
            echo "<p>$numero x 1 = " . $numero *1 . "</p>";
            echo "<p>$numero x 2 = " . $numero *2 . "</p>";
            echo "<p>$numero x 3 = " . $numero *3 . "</p>";
            echo "<p>$numero x 4 = " . $numero *4 . "</p>";
            echo "<p>$numero x 5 = " . $numero *5 . "</p>";
            echo "<p>$numero x 6 = " . $numero *6 . "</p>";
            echo "<p>$numero x 7 = " . $numero *7 . "</p>";
            echo "<p>$numero x 8 = " . $numero *8 . "</p>";
            echo "<p>$numero x 9 = " . $numero *9 . "</p>";
            echo "<p>$numero x 10 = " . $numero *10 . "</p>";
        ?>
    </div>
</body>
</html>