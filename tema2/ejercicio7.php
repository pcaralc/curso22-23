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
    $libreria = [
        array("ISBN"=> "1231", "titulo" => "Roma soy yo", "descripcion" => "La verdadera historia de Julio César", "cat" => "historica", "editorial" => "editorial1", "foto" => "imgs/1231.jpg", "precio"=>11.39),
        array("ISBN"=> "1232", "titulo" => "Los pilares de la Tierra", "descripcion" => "Saga Los pilares de la Tierra 1", "cat" => "historica", "editorial" => "editorial2", "foto" => "imgs/1232.jpg", "precio"=>8.54),
        array("ISBN"=> "1233", "titulo" => "Revolución", "descripcion" => "Una novela", "cat" => "historica", "editorial" => "editorial3", "foto" => "imgs/1233.jpg", "precio"=>  10.44),
        array("ISBN"=> "1234", "titulo" => "Las tinieblas y el alba", "descripcion" => "La precuela de Los pilares de la Tierra", "cat" => "historica", "editorial" => "editorial2", "foto" => "imgs/1234.jpg", "precio"=>8.54),
        array("ISBN"=> "1235", "titulo" => "Sidi", "descripcion" => "Relato de ficción", "cat" => "historica", "editorial" => "editorial4", "foto" => "imgs/1235.jpg", "precio"=>5.59),
        array("ISBN"=> "1236", "titulo" => "Reina roja", "descripcion" => "Reina roja", "cat" => "negra", "editorial" => "editorial1", "foto" => "imgs/1236.jpg", "precio"=>4.74),
        array("ISBN"=> "1237", "titulo" => "El silencio de la ciudad blanca", "descripcion" => "Trilogia de la Ciudad Blanca 1", "cat" => "negra", "editorial" => "editorial4", "foto" => "imgs/1237.jpg", "precio"=>9.49),
        array("ISBN"=> "1238", "titulo" => "La Bestia", "descripcion" => " ciudad sufre una terrible epidemia de cólera", "cat" => "negra", "editorial" => "editorial2", "foto" => "imgs/1238.jpg", "precio"=>12.95),
        array("ISBN"=> "1239", "titulo" => "La red púrpura", "descripcion" => "La novia gitana 2", "cat" => "negra", "editorial" => "editorial3", "foto" => "imgs/1239.jpg", "precio"=>7.59),
        array("ISBN"=> "1240", "titulo" => "El último barco", "descripcion" => "El último barco", "cat" => "negra", "editorial" => "editorial2", "foto" => "imgs/1240.jpg", "precio"=>9.49),
        array("ISBN"=> "1241", "titulo" => "Nosotros en la luna", "descripcion" => "Nosotros en la luna", "cat" => "romantica", "editorial" => "editorial3", "foto" => "imgs/1241.jpg", "precio"=>10.89),
        array("ISBN"=> "1242", "titulo" => "El dia que dejó de nevar en Alaska", "descripcion" => "historia de segundas oportunidades y destinos que se cruzan", "cat" => "romantica", "editorial" => "editorial1", "foto" => "imgs/1242.jpg", "precio"=>8.50),
        array("ISBN"=> "1243", "titulo" => "Cuando no queden más estrellas que contar", "descripcion" => "Cuando no queden más estrellas que contar", "cat" => "romantica", "editorial" => "editorial4", "foto" => "imgs/1243.jpg", "precio"=>8.54),
        array("ISBN"=> "1244", "titulo" => "Cocina día a día", "descripcion" => " 1095 recetas 365 menús para las cuatro estaciones", "cat" => "cocina", "editorial" => "editorial5", "foto" => "imgs/1244.jpg", "precio"=>9.50),
        array("ISBN"=> "1245", "titulo" => "1000 recetas de oro", "descripcion" => "1000 recetas de oro", "cat" => "cocina", "editorial" => "editorial5", "foto" => "imgs/1245.jpg", "precio"=>10.50),
    ];

    function pintarPorCategoria($libreria, $categoria) {
        echo "<h3>".strtoupper($categoria)."</h3>";
        $cont=0;
        foreach($libreria as $libro) {

            if ($libro['cat'] == $categoria) {

                if ($cont == 4)
                    break;
                $cont++;
                    
                echo "<div class='card mb-5' style='width: 10rem;'>
                        <img src='".$libro["foto"]."' class='card-img-top' alt='...'>
                            <div class='card-body'>
                            <h5 class='card-title'>".$libro["titulo"]."</h5>
                            <p class='card-text'>".$libro['descripcion']."</p>";
                echo "</tr>";
                echo "</table>";

                echo "
                            <p class='card-text'><small class='text-secondary'> <strong>".$libro["precio"]."€</strong></small></p>
                        </div>
                    </div>";    
            } 
        }

    }

    
    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<p class='display-1' class=' fw-bold'>LIBRERIA</p>";

    $categorias = array_column($libreria, "cat");

    $categorias = array_unique($categorias);

    foreach($categorias as $categoria)      
        pintarPorCategoria($libreria, $categoria);

    echo "</div>";
    echo "</div>";

    ?>
</body>
</html>