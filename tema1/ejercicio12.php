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
            /*. Haz un diccionario de palabras español a inglés (20 palabras mínimo) con un array
        asociativo. Haz un programa que dada una palabra compruebe si está en el
        diccionario y si es así que muestre la traducción, y si no está que indique que no
        está en el diccionario. A continuación, muestra el diccionario ordenador en
        español */

            $diccionario = [
                "casa" => "home",
                "coche" => "car",
                "perro" => "dog",
                "gato" => "cat",
                "mariposa" => "baterfly",
                "dia" => "day",
                "gente" => "people",
                "tomar" => "take",
                "hacer" => "make",
                "arriba" => "up",
                "uno" => "one",
                "dos" => "two",
                "tres" => "tree",
                "cuatro" => "four",
                "cinco" => "five",
                "seis" => "six",
                "siete" => "seven",
                "ocho" => "eight",
                "nueve" => "nine",
                "diez" => "ten"
            ];

            $palabra = "catorce";
            if (array_key_exists($palabra, $diccionario)) {
                echo $diccionario[$palabra];
            } else {
                echo "No está en el diccionario";
            }
            echo "<br>";

            //ordenar el diccionario por la key (palabra en español)
            ksort($diccionario);
            foreach ($diccionario as $key => $val) {
                echo "$key <br>";
            }
            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>