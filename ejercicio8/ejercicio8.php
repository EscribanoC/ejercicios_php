<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista compra</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="producto">
        <input type="submit">
    </form>


    <?php

    /**Crea un formulario que permita al usuario ingresar varios 
     * productos en una lista de compras. Al enviar el formulario, 
     * el programa debe mostrar la lista completa de productos 
     * ingresados, utilizando un array para almacenarlos. Permite 
     * que el usuario agregue productos hasta que decida finalizar.
     */

    session_start();

    if (!isset($_SESSION['listaCompra'])) {
        $_SESSION['listaCompra'] = array();
    } else {
        //array_push($_SESSION['listaCompra'], $_GET['producto']);
        $_SESSION['listaCompra'][] = $_GET['producto'];
        foreach ($_SESSION['listaCompra'] as $producto) {
            echo $producto . "<br>";
        }
    }
    ?>
</body>

</html>