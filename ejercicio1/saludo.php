<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNombre y apellidos</title>
    <link rel="stylesheet" href="../EjerciciosPHP.css">
</head>

<body>
    <div>
        <?php
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        echo "Mi nombre es $nombre $apellidos";
        ?>
    </div>
</body>

</html>