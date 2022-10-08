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
    /*Vamos a construir un encriptador y desencriptador de mensajes. Crearemos dos
        funciones:
        - encriptar($mensaje,$clave)
            - donde el primer argumento sea el mensaje a encriptar
            - el segundo argumento sea el número de letras a desplazar a la
        derecha por cada letra, por ejemplo, la b con $clave=3 se
        transformará en en la f.
            - La función devolverá el mensaje cifrado sustituyendo los espacios
        en blanco del final y cada letra del mensaje por la correspondiente
        según la clave.*/
        $mensaje="hola";
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

        $mensaje= encriptar($mensaje,$clave);
        echo $mensaje. "<br>";
        $mensaje = desencriptar($mensaje,$clave);
        echo $mensaje;
    
   ?>
</body>
</html>