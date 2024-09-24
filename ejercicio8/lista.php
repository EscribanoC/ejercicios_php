<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de compra</title>
    <link rel="stylesheet" href="../EjerciciosPHP.css">
</head>
<body>
    <div>
        <h1>Lista compra</h1>
        <?php
            $listaCompra = $_GET['listaCompra'];
            $listaArray = explode(":", $listaCompra , 100);
            foreach($listaArray as $articulo){
                echo $articulo . "<br/>";
            }
        ?>
    </div>
</body>
</html>