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

            //radio de un circulo
            $radio = rand(1, 10);

            // calcular y mostrar por pantalla el volumen de una esfera de ese radio.
            echo "El volumen de la esfera es: " . (4 / 3) * pi() * pow($radio, 3);

            ?>

        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>