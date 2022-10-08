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
            /* . Dado un DNI guardado en una variable $dni, obtener la letra y mostrar por
    pantalla el DNI completo DNI-LETRA.
    - Calcular el resto de dividir el número de DNI entre 23
    - El número obtenido esta entre 0 y 22. Seleccionar una letra asociada a dicho
    número en la siguiente tabla: */

            $dni = 53467211;

            $resto = $dni % 23;

            switch ($resto) {
                case (0):
                    echo $dni . "T";
                    break;
                case (1):
                    echo $dni . "R";
                    break;
                case (2):
                    echo $dni . "W";
                    break;
                case (3):
                    echo $dni . "A";
                    break;
                case (4):
                    echo $dni . "G";
                    break;
                case (5):
                    echo $dni . "M";
                    break;
                case (6):
                    echo $dni . "Y";
                    break;
                case (7):
                    echo $dni . "F";
                    break;
                case (8):
                    echo $dni . "P";
                    break;
                case (9):
                    echo $dni . "D";
                    break;
                case (10):
                    echo $dni . "X";
                    break;
                case (11):
                    echo $dni . "B";
                    break;
                case (12):
                    echo $dni . "N";
                    break;
                case (13):
                    echo $dni . "J";
                    break;
                case (14):
                    echo $dni . "Z";
                    break;
                case (15):
                    echo $dni . "S";
                    break;
                case (16):
                    echo $dni . "Q";
                    break;
                case (17):
                    echo $dni . "V";
                    break;
                case (18):
                    echo $dni . "H";
                    break;
                case (19):
                    echo $dni . "L";
                    break;
                case (20):
                    echo $dni . "C";
                    break;
                case (21):
                    echo $dni . "K";
                    break;
                case (22):
                    echo $dni . "E";
                    break;
            }

            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>