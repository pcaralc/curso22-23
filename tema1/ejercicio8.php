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
            /*Crea un generador aleatorio de apuesta de la Lotería Primitiva. Cada vez que
    recargues la página aparecerá una combinación diferente. */

            $array = array(rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99), rand(1, 99));

            for ($i = 0; $i < count($array); $i++) {
                echo $array[$i] . ", ";
            }



            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>