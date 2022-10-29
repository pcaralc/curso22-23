<?php session_start(); ?>
<?php include("lib.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    pintarTambor();
    for($i=0; $i<$_SESSION['numeroJugadores'];$i++) {
        echo "<br>";
       foreach($_SESSION['jugadores'] as $jugador){
        echo "Jugador 1:".$jugador[0];
       }
        pintarCarton($_SESSION['carton'.$i]);
    }
?>

</body>
</html>