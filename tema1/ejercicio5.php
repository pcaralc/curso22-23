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
            /*Tenemos una variable $numero que tiene un número de 0 a 99. Mostrarlo escrito.
    Por ejemplo, para 56 mostrar: cincuenta y seis. */

            $numero = rand(0, 99);

            $formatoEs = new NumberFormatter("es-ES", NumberFormatter::SPELLOUT);
            echo ($numero . ": " . $formatoEs);

            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>