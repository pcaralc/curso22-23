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

    <div class="col-md-8 themed-grid-col">
        <div class="flex-shrink-0 p-3 bg-white">
            <?php
            /*Hacer una página PHP que para un array de 5 elementos muestre por pantalla la
    tabla de multiplicar de dichos elementos (del 1 al 10) (for o while) */

            $array = array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));

            for ($i = 0; $i < count($array); $i++) {       //nos recorremos el array, cada vuelta es un elemento
                for ($j = 0; $j <= 10; $j++) {            // sacos del 0 al 10 para multiplicarlo con el número del array
                    echo $array[$i] . " X " . $j . " = " . $array[$i] * $j . "<br>";
                }
                echo "<br>";
            }



            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>