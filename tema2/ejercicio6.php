<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <?php
    /*Vamos a crear un programa que calcule el IVA de un carrito de la compra. El
    carrito será un array bidimensional asociativo de este tipo: */
    $carrito = array(
        array("id" => 1234, "nombre" => "PS4", "precio" => 349.95, "cant" => 2, "iva_r" => 0),
        array("id" => 1235, "nombre" => "iPhone XS", "precio" => 1249.95, "cant" => 1, "iva_r" => 0),
        array("id" => 1236, "nombre" => "Chocolate", "precio" => 9.95, "cant" => 5, "iva_r" => 1)
    );

    function subtotal($linea_pedido)
    {
        $precio = 0;
        if ($linea_pedido['iva_r'] == 0) {
            $precio = ($linea_pedido['precio'] * $linea_pedido['cant']) * 1.21;
        } elseif ($linea_pedido['iva_r'] == 1) {
            $precio = ($linea_pedido['precio'] * $linea_pedido['cant']) * 1.10;
        }
        return $precio;
    }

    echo '<table class="table table-striped" >';

    echo '<thead>';
    echo '<tr>';
    echo '<th>Nombre</th>';
    echo '<th>Precio</th>';
    echo '<th>Cant</th>';
    echo '<th>Precio Iva</th>';
    echo '</tr>';
    echo '</thead>';

    $total = 0;
    foreach ($carrito as $linea) {
        echo '<tr>';
        echo '<td>' . $linea['nombre'] . '</td>';
        echo '<td>' . $linea['precio'] . '€</td>';
        echo '<td>' . $linea['cant'] . '</td>';
        echo '<td>' . subtotal($linea) . '€</td>';
        //se va sumando el subtotal de cada línea para sacar el total
        $total += subtotal($linea);
        echo '</tr>';
    }

    echo '<tr>';
    echo '<td  font-weight:bolder colspan="3"><strong>Total</strong></td>';
    echo '<td>' . $total . '€</td>';
    echo '</tr>';


    echo '</table>';

    ?>

</body>

</html>