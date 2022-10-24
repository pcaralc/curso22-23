<?php

//Si he pinchado en un link
if (isset($_COOKIE['servidor'])) {

    //Leemos lo que ya te gusta
    $gustos = $_COOKIE['servidor'];

    //Aquí desencriptas los datos
    //-----

    //Aquí habría que meter antes el contador de visitas.
    //juegos-1#ropa-4
    $gustosArray = explode("#",$gustos);
    

    $encontrado = false;
    for($i=1; $i<count($gustosArray); $i++) {
        //Separa moda de 1
        
        $gustoContadorArray = explode("-",$gustosArray[$i]);

        if ($_GET['interes'] == $gustoContadorArray[0]) {
            $gustoContadorArray[1]++;
        }

        $gustosArray[$i] = implode("-", $gustoContadorArray);
    }



    //Volvemos a convertir a string ya quitados los duplicados
    $gustosString = implode("#", $gustosArray);

    setcookie('servidor',$gustosString, time()+60, "/tema3", "localhost", false, true);

}else{
    setcookie('servidor',$_GET['interes'], time()+60, "/tema3", "localhost", false, true);
}


header("Location: index.php");






?>