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
            /*. Crea un array 7x7 con valores numéricos aleatorios excepto las diagonales que
        deben ser 1. A continuación muestra el array y después genera un vector que
        contenga la suma de cada fila y otro con la suma de cada columna. */

            $numeros = [];
            for ($i = 0; $i < 7; $i++) {
                for ($j = 0; $j < 7; $j++) {
                    if ($i == $j) {
                        $numeros[$i][$j] = 1;
                    } else {
                        $numeros[$i][$j] = rand(1, 9);
                    }
                }
            }

            for ($i = 0; $i < 7; $i++) {
                for ($j = 0; $j < 7; $j++) {
                    echo $numeros[$i][$j] . " ";
                }
                echo "<br>";
            }

            //Calculo de cada fila
            $sumaFila = [];
            for ($i = 0; $i < 7; $i++) {
                $sumaFila[$i] = array_sum($numeros[$i]);
            }
            var_dump($sumaFila);
            echo "<br>";

            //Calculo de cada columna
            $sumaColumna = [];
            for ($j = 0; $j < 7; $j++) {
                $sumaColumna[$j] = array_sum(array_column($numeros, $j));
            }
            var_dump($sumaColumna);
            echo "<br>";


            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>