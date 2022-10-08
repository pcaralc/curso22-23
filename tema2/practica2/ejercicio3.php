<!DOCTYPE html>
<html lang"en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    /*Crear un array llamado $word_list_en con 50 palabras en inglés. Crea otro array
    llamado $word_list_es con las mismas 50 palabras en el mismo orden, pero en
    español. El ejercicio consiste en hacer un traductor literal de español a inglés o
    viceversa, debe recorrer una cadena de texto y devolverla en el idioma traduciendo
    una por una las palabras (se supone que están en la misma posición en los
    arrays).*/
    $word_list_es=["casa","coche",  
    "perro", 
    "gato",
    "mariposa",  
    "dia",
    "gente",
    "tomar",  
    "hacer",  
    "arriba",   
    "uno",
    "dos",  
    "tres",   
    "cuatro",
    "cinco", 
    "seis", 
    "siete",   
    "ocho", 
    "nueve",   
    "diez"];
    $word_list_en=["home","car","dog","cat","baterfly","day","people","take","make","up","one","two","tree","four","five","six","seven","eight","nine","ten"];

    $cadena = "dog";
    if(in_array($cadena, $word_list_es)){
        $posicionES = array_search($cadena,$word_list_es);      //busco la posicion de la palabra en el diccionario
        echo $word_list_en[$posicionES];                        // muestro en el otro diccionario la palabra en la posición obtenida
    }else{
        $posicionEN = array_search($cadena,$word_list_en);
        echo  $word_list_es[$posicionEN];
    }
    

    

   ?>
</body>
</html>