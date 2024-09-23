<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Mayor de Tres</title>
    <link rel="stylesheet" href="../EjerciciosPHP.css">
</head>

<body>
    <div>
        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        echo "El numero mas alto es " . max($num1, $num2, $num3);
        ?>
    </div>
</body>

</html>