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
        if (isset($_GET["numero"])) {
            if (is_numeric($_GET["numero"])) {
                $numero = $_GET['numero'];
                echo "<h3>Tabla de multiplicar del $numero</h3>";
                echo "<table>";
                for($i = 1; $i<=10;$i++){
                    $mult = $num*$i;
                    echo "<tr>";
                    echo "<p>$numero x " . $i . " = " . $numero * $i . "</p>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
        ?> 
    </div>
</body>

</html>