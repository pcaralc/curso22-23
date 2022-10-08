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
            /*Implementa una cola (FIFO: primero en entrar primero en salir) con php. Crear las
        funciones para añadir o eliminar n elementos en la cola, para vaciar la cola y para
        mostrar el contenido de la cola. Con esas funciones haz un programa en el que se
        pueda apreciar claramente el funcionamiento de la cola llamando a todas las
        funciones implementadas.*/
            function pintarCola($cola)
            {
                for ($i = 0; $i < count($cola); $i++) {
                    echo $cola[$i] . " ";
                }
                echo "<br>";
            }

            function addCola(&$cola, $num, $elem)
            {
                for ($i = 0; $i < $num; $i++) {
                    array_push($cola, $elem);
                }
            }

            function delCola(&$cola, $num)
            {
                for ($i = 0; $i < $num; $i++) {
                    array_shift($cola);
                }
            }
            function vaciarCola(&$cola)
            {
                $cola = array();
            }

            $cola = array();
            addCola($cola, 4, 2);
            pintarCola($cola);

            delCola($cola, 2);
            pintarCola($cola);

            vaciarCola($cola);
            pintarCola($cola);
            ?>
        </div>
    </div>

    <?php
    include_once("../pie.php");
    ?>
</body>

</html>