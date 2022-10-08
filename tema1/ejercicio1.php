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
            //Rand genera un numero entre el 1 y el 50
            $primera = rand(1, 50);
            $segunda = rand(1, 50);

            $diferencia = 0;
            $division = 0;

            if ($primera == $segunda) {
                echo "Los números son iguales";
            } else {
                $diferencia = $primera - $segunda;
                $division = $primera / $segunda;
            }

            echo "La diferencia es: " . $diferencia . "<br>";
            echo "El resultado de la división es: " . $division;
            ?>
        </div>
    </div>


    <?php
    include_once("../pie.php");
    ?>

</body>

</html>