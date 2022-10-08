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

            //ecuación de 2º grado (ax2 + bx + c = 0)
            $a = rand(1, 9);
            $b = rand(1, 9);
            $c = rand(1, 9);

            $x = (-$b + sqrt(pow($b, 2) - 4 * $a * $c)) / 2 * $a;
            $x1 = (-$b - sqrt(pow($b, 2) - 4 * $a * $c)) / 2 * $a;
            if ($x == is_nan($x)) {
                echo "La operación no tiene resultado";
            } else {
                echo $x;
            }
            echo "<br>";

            if ($x1 == is_nan($x1)) {
                echo "La operación no tiene resultado";
            } else {
                echo $x1;
            }


            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>