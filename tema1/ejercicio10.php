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
            /*. Rellena un array de 10 números enteros, con los 10 primeros números naturales.
        Calcula la media de los que están en posiciones pares y muestra los impares por
        pantalla. */

            $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            $par = 0;
            $cont = 0;
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i] % 2 == 0) {
                    $par = $array[$i];
                    $cont++;
                } else {
                    echo "Impar: " . $array[$i] . " ";
                }
            }

            echo "<br>";
            echo "Media de pares: " . $par / $cont;

            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>