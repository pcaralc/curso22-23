<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
    ?>

    <?php
    /*Crea un array de nombres de clientes, que contengan nombre de la empresa de al
    menos 5 clientes.
    [“Cosentino”, “Garciden”, “Deretil”, “Makito”, “Globomatik”]
    A continuación, crea una función llamada:
    convierteClientes($nombres, $opcion)
    donde el primer parámetro sea el array con los nombres de los clientes, y el
    segundo parámetro pueden ser tres opciones: */

    $nombres  = ["Cosentino", "Garciden", "Deretil", "Makito", "Globomatik"];

    function convierteClientes($nombres, $opcion)
    {
        switch ($opcion) {
            case "L":
                for ($i = 0; $i < count($nombres); $i++) {
                    $nombres[$i] = strtolower($nombres[$i]);
                }
                return $nombres;
                break;
            case "U":
                for ($i = 0; $i < count($nombres); $i++) {
                    $nombres[$i] = strtoupper($nombres[$i]);
                }
                return $nombres;
                break;
            case "M":
                for ($i = 0; $i < count($nombres); $i++) {
                    $nombres[$i] = ucwords($nombres[$i]);
                }
                return $nombres;
                break;
        }
    }

    print_r(convierteClientes($nombres, "L"));
    echo "<br>";
    print_r(convierteClientes($nombres, "U"));
    echo "<br>";
    print_r(convierteClientes($nombres, "M"));


    ?>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>