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
    /* Mejora el programa anterior de tal manera que el mensaje original lo divida primero
    en un array de palabras considerando el espacio en blanco como separador
    únicamente.*/

    $mensaje="hola mundo";
    $clave=3;

    function encriptar($mensaje, $clave){

        //divide el mensaje letra a letra y lo metemos en un array
        $dividido=str_split($mensaje,1);

        for($i=0; $i<count($dividido);$i++){
            $dividido[$i] = chr(ord($dividido[$i])+$clave);
        }
       return implode($dividido);
    }

    function desencriptar($mensaje,$clave){
        $dividido=str_split($mensaje,1);

        for($i=0; $i<count($dividido);$i++){
            $dividido[$i] = chr(ord($dividido[$i])-$clave);
        }
       return implode($dividido);
    }

    //separa el mensaje por el delimitador 
    $palabras = explode(" ",$mensaje);
    for($i=0; $i<count($palabras);$i++){
        $palabras[$i]=encriptar($palabras[$i],$clave);
    }
    //pasa de array a string con el delimitador
    $mensaje=implode(" ", $palabras);
    echo $mensaje;

    
    $palabras = explode(" ",$mensaje);
    for($i=0; $i<count($palabras);$i++){
        $palabras[$i]=desencriptar($palabras[$i],$clave);
    }
    $mensaje=implode(" ", $palabras);
    echo "<br>".$mensaje;

    ?>
</body>
</html>