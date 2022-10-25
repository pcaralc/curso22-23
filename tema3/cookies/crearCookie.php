<?php

//Si he pinchado en un link
if ($_GET) {
    if (isset($_COOKIE['servidor'])) {

        //Leemos lo que ya te gusta
        $gustos = $_COOKIE['servidor'];

        //Aquí desencriptas los datos
          // $gustos = desencriptar($gustos);
    
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
        function encriptar($gustosString){
            $key ="key";
            $cipher = "aes-128-ctr";
            $iv = "AOKDUTEU12345678";      
            $opcion = 0; 
            return openssl_encrypt($gustosString, $cipher, $key, $opcion, $iv);
        }

        function desencriptar($gustosString){
            $key ="key";
            $cipher = "aes-128-ctr";
            $iv = "AOKDUTEU12345678";      
            $opcion = 0;

            return openssl_decrypt($gustosString, $cipher, $key, $opcion, $iv);
        }



        setcookie('servidor',encriptar($gustosString), time()+60, "/tema3", "localhost", false, true);

    }else{
        setcookie('servidor',"CreacionCookie#moda-0#deporte-0#juegos-0", time()+60, "/tema3", "localhost", false, true);
    }


    header("Location: index.php");

}
