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
            $cadena1 = "hola a todo el mundo";
            $cadena2 = "mi nombre es Pilar";

            $cadena3 = $cadena1 . " " . $cadena2;

            //muestro cadena3 por pantalla
            echo "CADENA 3 <br>";
            echo $cadena3;
            echo "<br>";

            $cadena1 = $cadena1 . " " . $cadena2;

            //muestra por pantalla cadena1
            echo "CADENA 1 <br>";
            echo $cadena1;
            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>